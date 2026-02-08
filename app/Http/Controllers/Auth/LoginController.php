<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function showLoginForm()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email'    => 'required|email',
            'password' => 'required',
        ]);

        if (!Auth::attempt($credentials)) {
            return back()->withErrors([
                'email' => 'Invalid login credentials',
            ]);
        }

        $request->session()->regenerate();

        return redirect()->intended($this->redirectByRole());
    }

    public function logout(Request $request)
    {   
        Auth::logout();        
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        $request->session()->flush();
        return redirect('/login');
    }

    protected function redirectByRole(): string
    {
        $role = auth()->user()->role;

        return match ($role) {
            'super_admin' => '/platform/dashboard',
            'org_admin'   => '/org/dashboard',
            'org_hr'      => '/employees',
            'org_sales'   => '/leads',
            default       => '/login',
        };
    }
}
