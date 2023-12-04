<?php

namespace Tousanco\LaravelZaya;

use Illuminate\Support\Facades\Facade;

/**
 * @method static details($timeout = null): array
 *
 * @see \Tousanco\PhpZaya\Account
 */
class Account extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'zayaAccount';
    }
}