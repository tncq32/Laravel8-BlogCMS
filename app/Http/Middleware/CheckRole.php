<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class CheckRole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next, ...$roles)
    {
        // Kullanıcının rollerini kontrol et
        if ($request->user() && $request->user()->hasAnyRole(...$roles)) {
            return $next($request);
        }

        // Yetkiye sahip değilse, isteği reddet
        return redirect('/anasayfa')->with('error', 'Unauthorized action.');
    }
}
