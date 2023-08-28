<?php

namespace Tousanco\LaravelZaya;

use Illuminate\Support\Facades\Facade;

/**
 * @method static all(array $params = []): array
 * @method static create(string $url, array $params = []): array
 * @method static details(int $id): array
 * @method static update(int $id, array $params = []): array
 * @method static delete(int $id): array
 *
 * @see \Tousanco\PhpZaya\Link
 */
class Link extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'zayaLink';
    }
}