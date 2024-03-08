<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;
use App\Traits\HasImage;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class ProfileController extends Controller
{
    use HasImage;

    /**
     * Display the user's profile form.
     */
    public function edit(Request $request): View
    {
        $guardName = Auth::guard()->name;
        $user = auth($guardName)->user()->load("image");

        if ($guardName === "participant") {
            $user->loadCount("bookings");
        } elseif ($guardName === "organiser") {
            $user->loadCount("events");
        }
        return view('profile.edit', [
            'user' => $user,
            'userType' => $guardName
        ]);
    }

    /**
     * Update the user's profile information.
     */
    public function update(ProfileUpdateRequest $request)
    {
        $request->user()->fill($request->validated());

        if ($request->user()->isDirty('email')) {
            $request->user()->email_verified_at = null;
        }
        if (request()->has("image")) {
            $this->updateImg($request->user(), request()->file("image"));
        }

        $request->user()->save();

        return back()->with('status', 'profile-updated');
    }

    /**
     * Delete the user's account.
     */
    public function destroy(Request $request): RedirectResponse
    {
        $request->validateWithBag('userDeletion', [
            'password' => ['required', 'current_password'],
        ]);

        $user = $request->user();

        auth($request->userType)->logout();

        $user->delete();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return Redirect::to('/');
    }
}
