<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use App\Http\Requests\LoginRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index(){
        return view('login');
    }

    public function authenticate(LoginRequest $request){
        // Lógica de autenticação aqui
        $credentails = $request->only('email', 'password');

        if(Auth::attempt($credentails)){
            $request->session()->regenerate();

            return redirect()->intended(route('habits.index'));
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
