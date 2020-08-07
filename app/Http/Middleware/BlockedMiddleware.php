<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
class BlockedMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $user=Auth::user();
        if($user->isBlocked()){
            Auth::logout();
            return redirect()->to('login')->with('warning', 'You have been blocked from logging in, please contact your administrator for more information');
       
        }
        return $next($request);
     }
}
