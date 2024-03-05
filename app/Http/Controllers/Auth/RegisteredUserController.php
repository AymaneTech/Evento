<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Organiser;
use App\Models\Participant;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\View\View;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     */
    public function create(): View
    {
        return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
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
        if($request->role === "participant"){
            $user = Participant::create([
                'name' => $request->name,
                'email' => $request->email,
                'password' => Hash::make($request->password),
            ])->assignRole("participant");
            auth("participant")->login($user);
        }else {
            $user = Organiser::create([
                'name' => $request->name,
                'email' => $request->email,
                'password' => Hash::make($request->password),
            ])->assignRole("organiser");
            auth("organiser")->login($user);
        }

        event(new Registered($user));


        return redirect(RouteServiceProvider::HOME);
    }
}
