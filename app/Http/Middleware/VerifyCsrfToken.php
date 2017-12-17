<?php

namespace App\Http\Middleware;

use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken as Middleware;

class VerifyCsrfToken extends Middleware
{
    /**
     * The URIs that should be excluded from CSRF verification.
     *
     * @var array
     */
    protected $except = [
        //
    ];

     /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    // public function handle($request, Closure $next)
    // {
    //     foreach($this->excludeRoutes as $route) {
    //         if ($request->is($route)) {
    //             return $next($request);
    //         }
    //     }
    //     return parent::handle($request, $next);
    //     // Add this:
    //     if($request->method() == 'POST')
    //     {
    //     return $next($request);
    //     }

    //     if ($request->method() == 'GET' || $this->tokensMatch($request))
    //     {
    //         return $next($request);
    //     }
    //     throw new TokenMismatchException;
    //     }
    }
