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
