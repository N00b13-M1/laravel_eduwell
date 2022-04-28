<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AgeCheck
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next, string $role)
    {
        // $age = 16;
        // if( $age <= 18 ){ 
        //     // return redirect()->route('back.index');
        //     dd($age);
        // } else{
        // return $next($request);
        // }
        // if(Auth::user()->roles[0]->id == 1){
        //     dd(Auth::user());
        //     return $next($request);
        // }
        // else{
        //     return route('back.index');
    
        if($request->user()->roles()->where('role', $role)->exists()) {
            // return $next($request);
            dd($request->user()->roles());
        }
    }
}

e