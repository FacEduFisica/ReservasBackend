<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use App\Models\User;

class UserActiveMiddleware
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
        $user_active = json_decode(User::select('is_active')->where('email','=',$request->email)->first());
                
        if($user_active->is_active===0) {
            return response(['message'=>'El usuario no está activado'],401);
        }
        return $next($request);
    }
}
