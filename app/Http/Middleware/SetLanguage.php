<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class SetLanguage
{
    /**
     * Get the path the user should be redirected to when they are not authenticated.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return string|null
     */

    public function handle(Request $request, Closure $next)
    {       
        $languages = ['az','en','ru'];
        $locale = $_COOKIE['language'] ?? 'az';
        if($request->language && in_array($request->language, $languages)){
            setcookie('language', $request->language, time() + (86400 * 30), "/");
            $locale = $request->language;
        }

        App::setlocale($locale);
        return $next($request);
    }
}