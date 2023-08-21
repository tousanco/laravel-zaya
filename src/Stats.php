<?php

namespace Tousanco\LaravelZaya;

use Illuminate\Support\Facades\Facade;

/**
 * @method static total(int $linkId, array $params = []): array
 * @method static clicks(int $linkId, array $params = []): array
 * @method static referrers(int $linkId, array $params = []): array
 * @method static countries(int $linkId, array $params = []): array
 * @method static languages(int $linkId, array $params = []): array
 * @method static browsers(int $linkId, array $params = []): array
 * @method static devices(int $linkId, array $params = []): array
 * @method static operatingSystems(int $linkId, array $params = []): array
 *
 * @see \Tousanco\PhpZaya\Stats
 */
class Stats extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'zayaStats';
    }
}