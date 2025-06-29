<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class AuthenticatedSessionController extends Controller
{
    /**
     * Display the login view.
     */
    public function create(): View
    {
        return view('admin.dashboard.signin');
    }

    /**
     * Handle an incoming authentication request.
     */
 public function store(LoginRequest $request): RedirectResponse
{
    // Validate and authenticate
    $request->authenticate();

    // Regenerate session to prevent session fixation
    $request->session()->regenerate();

    // Redirect to the admin dashboard
    return redirect()->intended(route('admin.dashboard'));
}


    /**
     * Destroy an authenticated session.
     */
    public function destroy(Request $request): RedirectResponse
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}
