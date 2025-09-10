<?php

namespace Roberts\LaravelFanclub\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Roberts\LaravelFanclub\LaravelFanclub
 */
class LaravelFanclub extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return \Roberts\LaravelFanclub\LaravelFanclub::class;
    }
}
