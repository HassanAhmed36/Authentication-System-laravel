<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;

class RegisterController extends Controller
{
    public function register()
    {
        return view('auth.register');
    }

    public function submitRegister(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
            'email' => 'required|email',
            'password' => 'required|confirmed'
        ]);
        try {
            $user = User::create([
                'name' => $request->name,
                'email' => $request->email,
                'password' => Hash::make($request->password)
            ]);
            Auth::login($user);
            return redirect()->route('dashboard')->with('success', 'user login successfully');
        } catch (\Exception $e) {
            Log::error('rigestration field' . $e->getMessage());
            return back()->with('error', 'Rigestration Failed!');
        }
    }
}
