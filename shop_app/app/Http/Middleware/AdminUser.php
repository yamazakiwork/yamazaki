<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class AdminUser
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        $user_admin_level = auth()->user()->admin_level;
        //管理者ユーザー以外adminルートは使用できず、login画面にリダイレクトする。
        if (!(($user_admin_level === 1)|($user_admin_level === 2))){
            return redirect('login');
        }
        return $next($request);
    }
}
