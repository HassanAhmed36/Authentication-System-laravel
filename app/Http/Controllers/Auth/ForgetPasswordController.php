<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\PasswordResetToken;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\URL;

class ForgetPasswordController extends Controller
{
    public function forgetpassword()
    {
        return view('auth.forget-password');
    }

    public function submitforgetpassword(Request $request)
    {
        $request->validate([
            'email' => 'required|email|exists:users,email',
        ]);

        $token = Str::random(64);
        $email = $request->email;

        // Use a different variable name to avoid conflict with the $message instance
        Mail::send('mail.send-reset-link', [
            'title' => 'Password Reset',
            'emailMessage' => 'Click the button below to reset your password',
            'url' => URL::route('reset.password', ['token' => $token]),
        ], function ($message) use ($email) {
            $message->to($email)->subject('Password Reset');
        });

        PasswordResetToken::updateOrCreate(
            ['email' => $email],
            ['token' => $token, 'created_at' => now()]
        );

        return back()->with('success', 'Link sent successfully. Check your email.');
    }

    

}
