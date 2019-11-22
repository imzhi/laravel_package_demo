<?php

namespace Imzhi\Super\Facades;

use Illuminate\Support\Facades\Facade;

class Super extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \Imzhi\Super\Super::class;
        // return 'super';
    }
}
