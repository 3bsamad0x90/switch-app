<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\App;

class isPublisherMiddleware
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
        if ($request->user() != null) {
            if ($request->user()->role == '2') {
                $locale = $request->user()->language;
                if ($locale !== null && in_array($locale, config('app.locales'))) {
                    App::setLocale($locale);
                }
        
                if ($locale === null) {
                    $request->session()->put('Lang',config('app.locale'));
                }
        
                return $next($request);
            }
        }
        return redirect()->route('publisher.login');
    }
}
