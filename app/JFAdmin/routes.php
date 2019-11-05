<?php

JFAdmin::routes();

Route::group([
    'middleware' => config('jfadmin.route.middleware'),
    'namespace' => config('jfadmin.route.namespace'),
    'prefix' => config('jfadmin.route.prefix'),
    'as' => config('jfadmin.route.as'),
    'domain' => config('jfadmin.route.domain'),
], function ($router) {
    // 首页
    $router->get('', 'HomeController@showIndex')->name('show.index');
});
