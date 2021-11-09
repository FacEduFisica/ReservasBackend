<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class CheckRoleMiddleware
{
    public function handle(Request $request, Closure $next)
    {   
        $role = auth()->user()->user_type;
        if($role === 'Admin') {
            return $next($request);
        }else if($role ==='Profesor' || $role === 'Alumno' || $role === 'Externo') {
            return response(['message'=>'User unauthorized']);
        }else {
            return response(['message'=>'User role does not exist in our system']);
        }
    }
}
