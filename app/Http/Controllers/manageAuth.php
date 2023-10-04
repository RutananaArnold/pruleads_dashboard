<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class manageAuth extends Controller
{
    public function logout()
    {
        auth()->guard('web')->logout();

        session()->invalidate();
        session()->regenerateToken();

        return redirect('/');
    }
}
