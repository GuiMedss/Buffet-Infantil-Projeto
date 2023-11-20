<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;

class SiteController extends Controller
{
    public function redirect()
    {
        $user = Auth::user();

        if (Auth::user()) {
            if (Gate::forUser($user)->allows('administrador')) {
                return redirect()->route('admin.home');
            } else {
                return redirect()->route('user.home');
            }
        } else {
            return redirect()->route('login');
        }
    }
}
