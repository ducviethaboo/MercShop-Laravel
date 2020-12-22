<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use MongoDB\Driver\Session;

class CheckLogin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password, 'role' => 'User'])) {
            $user = Auth::user();
            $name = $user->name;
            $id = $user->id;
            $request->session()->push('login', $id);
            return $next($request);
        }
    }
}
