<?php

namespace App\Http\Middleware;

use Route;
use Closure;

class Interception
{
    public function handle($request, Closure $next)
    {
        $route_name = Route::currentRouteName();
        if (ends_with($route_name, '::profile.pwd')) {
            return response()->fai(['msg' => '演示站点，禁止修改密码']);
        }
        $id = intval(request()->input('id', 0));
        if (ends_with($route_name, '::manageuser.create') && $id === 1) {
            return response()->fai(['msg' => '演示站点，禁止修改初始管理员资料']);
        }

        return $next($request);
    }
}
