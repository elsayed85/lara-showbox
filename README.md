# Showbox Api

## Installation

You can install the package via composer:

```bash
composer require elsayed85/lara-showbox
```

You can publish the config file with:

```bash
php artisan vendor:publish --tag="lara-showbox-config"
```

This is the contents of the published config file:

```php
<?php

$key = "123d6cedf626dy54233aa1w6";
$iv = "wEiphTn!";
$appId = "com.tdo.showbox";
$appKey = "moviebox";

$servers = [
    "showbox" => "https://showbox.shegu.net/api/api_client/index/",
    "mbpapi" => "https://mbpapi.shegu.net/api/api_client/index/",
];

$default = [
    "page" => 1,
    "pagelimit" => 10,
    "lang" => "en",
    "childmode" => 0,
    "server" => "showbox", // showbox, mbpapi
];


return [
    "key" => env("SHOWBOX_KEY", $key),
    "iv" => env("SHOWBOX_IV", $iv),
    "appId" => env("SHOWBOX_APPID", $appId),
    "appKey" => env("SHOWBOX_APPKEY", $appKey),
    "servers" => $servers,

    "default" => [
        "page" => $default["page"],
        "pagelimit" => env("SHOWBOX_PAGELIMIT", $default["pagelimit"]),
        "lang" => env("SHOWBOX_LANG", $default["lang"]),
        "childmode" => env("SHOWBOX_CHILDMODE", $default["childmode"]),
        "server" => env("SHOWBOX_SERVER", $default["server"]),
    ]
];
```

you only need to chnage default values like page, pagelimit ,lang , childmode and server

in env file you can change default values like this

#### notes:

- SHOWBOX_SERVER can be showbox or mbpapi
- SHOWBOX_LANG can be en or ar
- SHOWBOX_CHILDMODE can be 0 or 1

```php
SHOWBOX_PAGELIMIT=15
SHOWBOX_LANG=ar
SHOWBOX_CHILDMODE=1
SHOWBOX_SERVER=mbpapi
```

<hr> 

## Usage

### Search

#### Search

```php 
use Elsayed85\Showbox\Api\Search;

$search = Search::get(
    $type = "movie", // movie, tv, all
    $title = "avengers",
    $page = 1,
    $pagelimit = 10
);
```

#### top searchs

```php
use Elsayed85\Showbox\Api\Search;

$search = Search::top(
    $type = "movie", // movie, tv
);
```

#### Auto Complete

```php
use Elsayed85\Showbox\Api\Search;

$search = Search::autoComplete(
    $title = "avengers",
    $pagelimit = 10
);
```

<hr>

### Movies

#### get Single Movie

```php
use Elsayed85\Showbox\Api\Movie;

$movie_id = "14932";
$movie = Movie::get($movie_id);
```

#### get Movie download links

```php
use Elsayed85\Showbox\Api\Movie;

$movie_id = "14932";
$movie = Movie::download($movie_id);
```

#### get All Movies

```php
use Elsayed85\Showbox\Api\Movie;

$movies = Movie::all(
    $year = 2022,
    $category_id = null,
    $rating = null,
    $quality = null,
    $country = null,
    $imdbRating = null,
    $orderby = null,
    $page = 1,
    $pagelimit = 10
);
```

#### get top lists

```php
use Elsayed85\Showbox\Api\Movie;

$movies = Movie::topLists();
```

#### get Top List Content

```php
use Elsayed85\Showbox\Api\Movie;

$list_id = "top_box_office";
$movies = Movie::topList($list_id);
```

#### Get Movie Srts (subtitles)

```php
use Elsayed85\Showbox\Api\Movie;

$movie_id = "14932";
$subtitles = Movie::srts($movie_id);
```

<hr>

### Series

#### get Single Series

```php
use Elsayed85\Showbox\Api\TV;

$series_id = "578";
$series = TV::get($series_id);
```

#### get all Series

```php
use Elsayed85\Showbox\Api\TV;

$series = TV::all(
    $year = 2022,
    $category_id = null,
    $rating = null,
    $quality = null,
    $country = null,
    $imdbRating = null,
    $orderby = null,
    $page = 1,
    $pagelimit = 10
);
```

#### get top lists

```php
use Elsayed85\Showbox\Api\TV;

$series = TV::topLists();
```

#### get Top List Content

```php
use Elsayed85\Showbox\Api\TV;

$list_id = "new_tv_tonight";
$series = TV::topList($list_id);
```

<hr>

### Episodes

#### get all Episodes

```php
use Elsayed85\Showbox\Api\Episode;

$episodes = Episode::all(
    $tv_id = 578,
    $season = 1,
);
```

#### get Episode download links

```php
use Elsayed85\Showbox\Api\Episode;

$episode = Episode::download(
    $tv_id = 578,
    $season = 1,
    $episode = 1,
);
```

#### get Episode Srts (subtitles)

```php
use Elsayed85\Showbox\Api\Episode;

$episode = Episode::srts(
    $tv_id = 578,
    $season = 1,
    $episode = 1,
);
```

<hr>


## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

-   [Elsayed Kamal](https://github.com/elsayed85)
-   [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
