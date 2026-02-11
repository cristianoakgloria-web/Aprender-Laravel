<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index(){
        return view('login');
    }

    public function authenticate(Request $request){
        // Lógica de autenticação aqui
        $credentails = $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:6',
        ]);

        if(Auth::attempt($credentails)){
            $request->session()->regenerate();

            return redirect()->intended(route('site.dashboard'));
        }

            return back()->withErrors([
                'email' => 'Credenciais Inválidas',
            ]);
    }

    public function logout(Request $request): RedirectResponse{
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect(route('site.index'));
    }
}
