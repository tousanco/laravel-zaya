# Zaya link shortener sdk for Laravel
using this package you can easily implement the [Zaya](https://zaya.io) link shortener in your php application.
## Installation

You can install the package via composer:
```bash
composer require tousanco/laravel-zaya
```
## Usage
First you need to get your API key from [Zaya](https://zaya.io/developers/api)

then add the api key to your env :
```bash
ZAYA_API_KEY=*************your-key*****************
```
### Links
```php
use Tousanco\LaravelZaya\Link;

$listParams = [
    // All options nullable

    // search (string)
    'search' => 'search key',
    // by (in:title,alias,url) null for all.
    'by' => 'title',
    // ids comma separated (string)
    'ids' => '1,2,3,4,5',
    // status (int|in:0,1,2,3,4,5,6)
    'status' => 1,
    // (int) space-id
    'space' => 1,
    // (int) domain-id
    'domain' => 1,
    // favorites (bool|in:1) null for false
    'favorites' => 1,
    // sort (string|in:desc,asc,max,min)
    'sort' => 'desc',
];
$links = Link::all($listParams);

$createOrUpdateParams = [
    // All options nullable
    'alias' => 'string',
    'password' => 'string',
    'space' => 'int',
    'domain' => 'int',
    'disabled' => 'int',
    'public' => 'int',
    'description' => 'string',
    'expiration_url' => 'url',
    'expiration_date' => 'Y-m-d',
    'expiration_time' => 'HH:MM',
    'expiration_clicks' => 'int',
];
$link = Link::create('https://example.com', $createOrUpdateParams);

$linkId = 1;
$link = Link::details($linkId);

$link = Link::update($linkId, $createOrUpdateParams);

Link::delete($linkId);
```
### Space
```php
use Tousanco\LaravelZaya\Space;

$listParams = [
    // All options nullable
    'search' => 'string key',
    // sort (string|in:desc,asc)
    'sort' => 'desc',
];
$spaces = Space::all($listParams);

$params = ['name' => 'sample space', 'color' => '#fff'];
$space = Space::create($params);

$spaceId = 1;
$space = Space::details($spaceId);

$space = Space::update($spaceId, $params);

Space::delete($spaceId);
```
### Domain
```php
use Tousanco\LaravelZaya\Domain;

$listParams = [
    // All options nullable
    'search' => 'string key',
    // sort (string|in:desc,asc)
    'sort' => 'desc',
];
$domains = Domain::all($listParams);

$params = [
    'name' => 'yourdomain.com',
    // index_page and not_found_page nullable.
    'index_page' => 'url',
    'not_found_page' => 'url',
];
$domain = Domain::create($params);

$domainId = 1;
$domain = Domain::details($domainId);

// You cannot update the domain name
$domain = Domain::update($domainId, $params);

Domain::delete($domainId);
```
### Stats
```php
use Tousanco\LaravelZaya\Stats;

$linkId = 1;
// The default value is the current day's
$params = ['from' => 'Y-m-d H:i:s', 'to' => 'Y-m-d H:i:s'];
$total = Stats::total($linkId, $params);

$clicks = Stats::clicks($linkId, $params);

$referrers = Stats::referrers($linkId, $params);

$countries = Stats::countries($linkId, $params);

$languages = Stats::languages($linkId, $params);

$browsers = Stats::browsers($linkId, $params);

$devices = Stats::devices($linkId, $params);

$operatingSystems = Stats::operatingSystems($linkId, $params);
```
### Account
```php
use Tousanco\LaravelZaya\Account;

$accountDetails = Account::details();
```
## Documentation
See the [documentation](https://zaya.io/developers) for more details.