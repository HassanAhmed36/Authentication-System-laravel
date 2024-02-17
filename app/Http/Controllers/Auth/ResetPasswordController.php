<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\PasswordResetToken;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class ResetPasswordController extends Controller
{
    public function resetPassword(Request $request)
    {
        $token = PasswordResetToken::where('token', $request->token)->first();
        if (!$token) {
            abort(403);
        }
        $user = User::where('email', $token->email)->first();
        return view('auth.reset-password', [
            'user_id' => $user->id
        ]);
    }

    public function SubmitResetPassword(Request $request)
    {
        $request->validate([
            'password' => 'required|confirmed'
        ]);

        $user = User::where('id', $request->user_id)->first();
        $user->update([
            'password' => $request->password
        ]);

        Auth::login($user);
        return redirect()->route('dashboard')->with('success', 'user login successfully');

    }
}
