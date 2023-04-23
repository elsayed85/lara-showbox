<?php
namespace Elsayed85\ShowBox\Api;

use Elsayed85\ShowBox\Helpers\Helper;

class Movie
{
    public static function get($id)
    {
        return (new Helper())->call([
            "module" => "Movie_detail",
            "mid" => $id,
        ]);
    }

    public static function download($mid)
    {
        return (new Helper())->call([
            "module" => "Movie_downloadurl_v3",
            "mid" => $mid,
        ]);
    }


    public static function all(
        $year = null,
        $category_id = null,
        $rating = null,
        $quality = null,
        $country = null,
        $imdbRating = null,
        $orderby = null,
        $page = null,
        $pagelimit = null
    ) {
        return (new Helper())->call([
            "module" => "Movie_list_v3",
            "year" => $year,
            "cid" => $category_id,
            "rating" => $rating,
            "quality" => $quality,
            "country" => $country,
            "imdbRating" => $imdbRating,
            "orderby" => $orderby,
            "page" => $page,
            "pagelimit" => $pagelimit,
        ]);
    }

    public static function topLists()
    {
        return (new Helper())->call([
            "module" => "Top_list",
            "box_type" => 1
        ]);
    }

    public static function topList($id, $page = 1, $pagelimit = 10)
    {
        return (new Helper())->call([
            "module" => "Top_list_movie",
            "id" => $id,
            "page" => $page,
            "pagelimit" => $pagelimit,
        ]);
    }

    public static function srts($mid, $fid = null, $uid = null)
    {
        return (new Helper())->call([
            "module" => "Movie_srt_list_v2",
            "mid" => $mid,
            "fid" => $fid ?? "",
            "uid" => $uid ?? 1,
        ]);
    }
}
