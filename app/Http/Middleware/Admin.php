<?php
namespace App\Http\Middleware;
use Closure;
use Auth;
class Admin
{
    
    public function handle($request, Closure $next)
    {
        if(Auth::check()){
            if(Auth::user()->isAdmin()){
                return $next($request);
            }
            return redirect(404);
        }
        return $next($request);
    }
   
}
        
    




