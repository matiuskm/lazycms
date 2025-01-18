<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;

class LoginController extends Controller
{
    public function index() {
        return view('auth.login.index', [
            'routeAction' => route('auth.login.action'),
            'routeHome' => route('site.home'),
            'routeForgotPassword' => 'todo-forgot-password',
        ]);
    }

    public function action(Request $request) {
        $validated = $request->validate([
            'email' => ['required', 'string', 'email'],
            'password' => ['required', 'string'],
        ]);

        if ($validated) {
            $request->session()->regenerate();
            return redirect()->intended(route("dashboard.home", absolute: false));
        }

        throw ValidationException::withMessages([
            'email' => trans('auth.failed'),
        ]);
    }
}
