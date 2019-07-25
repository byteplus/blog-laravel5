<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function delete(Request $request)
    {
        $user = User::findOrFail($request->id);
        
        if ($user->delete()) {
            \Notification::send($user, new \App\Notifications\UserDeleted($user));
        }

        return redirect()->back();
    }
}
