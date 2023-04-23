<?php

namespace Elsayed85\ShowBox\Api;

use Elsayed85\ShowBox\Helpers\Helper;

class Search
{
    public static function get($type, $title, $page = 1, $pagelimit  = null)
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


    public static function top($type, $pagelimit = null)
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

    public static function autocomplate($title, $pagelimit = null)
    {
        return (new Helper())->call([
            "module" => "Autocomplate2",
            "keyword" => $title,
            "pagelimit" => $pagelimit,
        ]);
    }
}
