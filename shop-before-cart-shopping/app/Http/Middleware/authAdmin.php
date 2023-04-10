<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Session ;
use App\Models\User;
                    $user=User::find(session('loginId'));
class authAdmin

{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $user=User::find(session('loginId'));
        //if user connect is admin 
        if($user){
            if($user->utype==='ADM'){
                return $next($request);
            }
            else{
                return redirect()->route('home');
            }
        }
        else{
            return redirect()->route('login');
        }
    }
}
