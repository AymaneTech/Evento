<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Organiser;
use App\Models\Participant;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use App\Traits\HasImage;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\Validation\ValidationException;
use Illuminate\View\View;

class RegisteredUserController extends Controller
{
    use HasImage;
    /**
     * Handle an incoming registration request.
     *
     * @throws ValidationException
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:' . User::class],
            'role' => ['required'],
            'avatar' => ['required', 'image'],
            'password' => ['required', 'confirmed', Rules\Password::defaults(),
            ],
        ]);
        if ($request->role === "participant") {
            $user = Participant::create([
                'name' => $request->name,
                'email' => $request->email,
                'password' => Hash::make($request->password),
            ])->assignRole("participant");
            $this->createImage($user, $request->avatar);
            auth("participant")->login($user);
            event(new Registered($user));

            return redirect(RouteServiceProvider::HOME);
        } else {
            $user = Organiser::create([
                'name' => $request->name,
                'email' => $request->email,
                'password' => Hash::make($request->password),
            ])->assignRole("organiser");

            $this->createImage($user, $request->avatar);
            auth("organiser")->login($user);
            event(new Registered($user));

            return redirect(RouteServiceProvider::ORGANISER);
        }

    }

    /**
     * Display the registration view.
     */
    public function create(): View
    {
        return view('auth.register');
    }
}
