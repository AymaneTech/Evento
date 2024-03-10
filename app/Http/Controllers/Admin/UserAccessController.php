<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;

class UserAccessController extends Controller
{
    public function suspend(User $user)
    {
        $user->delete();
        return back()->with("success", "User suspended Successfully");
    }

    public function activate($id)
    {
        $user = User::withTrashed()->where("id", $id)->first();
        $user->restore();
        return back()->with("success", "user activated again successfully");
    }
}
