<?php

namespace App\Http\Controllers\Auth;

use App\Actions\CreateUser;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreUserRequest;
use App\Traits\HasImage;
use Illuminate\Validation\ValidationException;
use Illuminate\View\View;
use PharIo\Manifest\InvalidEmailException;

class RegisteredUserController extends Controller
{
    use HasImage;
    public function __construct(public CreateUser $action)
    {}

    /**
     * Handle an incoming registration request.
     *
     * @throws ValidationException
     */
    public function store(StoreUserRequest $request)
    {
        try {
            $redirectTo = $this->action->handle($request->validated());
        } catch (InvalidEmailException $e) {
            return back()->withErrors(["email" => $e->getMessage()]);
        }
        return redirect($redirectTo);
    }

    /**
     * Display the registration view.
     */
    public function create(): View
    {
        return view('auth.register');
    }
}
