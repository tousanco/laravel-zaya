<?php

namespace Tousanco\LaravelZaya;

use Illuminate\Support\Facades\Facade;

/**
 * @method static details(): array
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