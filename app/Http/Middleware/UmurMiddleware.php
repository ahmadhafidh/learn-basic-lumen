<?php
 
namespace App\Http\Middleware;
 
use Closure;
 
class UmurMiddleware
{
    public function handle($request, Closure $next)
    {
        if ($request->umur <= 20) {
            return "Anda tidak di ijinkan masuk, karena umur anda belum mencukupi.";
        }
        return $next($request);
    }
}