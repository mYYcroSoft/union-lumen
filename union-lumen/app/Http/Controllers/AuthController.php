<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

// Přidej tento import

class AuthController extends Controller
{
    public function login(Request $request)
    {
        $username = $request->input('username');
        $password = $request->input('password');

        if ($username === 'admin' && $password === 'admin123') {
            Session::put('logged_in', true); // Použij Session facade
            return redirect('/cars');
        }

        return redirect('/login')->with('error', 'Neplatné přihlašovací údaje');
    }

    public function logout()
    {
        Session::forget('logged_in'); // Použij Session facade
        return redirect('/login');
    }
}
