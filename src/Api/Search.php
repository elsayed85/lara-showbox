<?php

namespace Elsayed85\ShowBox\Api;

use Elsayed85\ShowBox\Helpers\Helper;

class Search
{
    public static function get($type, $title, $page = 1, $pagelimit  = 10)
    {
        if ($type == null) {
            $type = "all";
        }

        return (new Helper())->call([
            "module" => "Search5",
            "page" => $page,
            "pagelimit" => $pagelimit,
            "type" => $type,
            "keyword" => $title,
        ]);
    }


    public static function top($type, $pagelimit = 10)
    {
        if (!in_array($type, ["movie", "tv"])) {
            $type = "movie";
        }

        return (new Helper())->call([
            "module" => "Search_hot",
            "type" => $type,
            "pagelimit" => $pagelimit,
        ]);
    }

    public static function autocomplate($title, $pagelimit = 10)
    {
        return (new Helper())->call([
            "module" => "Autocomplate2",
            "keyword" => $title,
            "pagelimit" => $pagelimit,
        ]);
    }
}
