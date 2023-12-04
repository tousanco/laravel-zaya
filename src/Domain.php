<?php

namespace Tousanco\LaravelZaya;

use Illuminate\Support\Facades\Facade;

/**
 * @method static all(array $params = [], $timeout = null): array
 * @method static create(array $params, $timeout = null): array
 * @method static details(int $id, $timeout = null): array
 * @method static update(int $id, array $params = [], $timeout = null): array
 * @method static delete(int $id, $timeout = null): array
 *
 * @see \Tousanco\PhpZaya\Domain
 */
class Domain extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'zayaDomain';
    }
}