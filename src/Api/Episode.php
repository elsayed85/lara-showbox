<?php

namespace Elsayed85\ShowBox\Api;

use Elsayed85\ShowBox\Helpers\Helper;


class Episode
{
    public static function all($tid, $season)
    {
        return (new Helper())->call([
            "module" => "TV_episode",
            "tid" => $tid,
            "season" => $season,
        ]);
    }

    public static function donwload($tid, $season, $episode)
    {
        return (new Helper())->call([
            "module" => "TV_downloadurl_v3",
            "tid" => $tid,
            "season" => $season,
            "episode" => $episode,
        ]);
    }

    public static function srts($tid, $season, $episode, $fid  = null, $uid = null)
    {
        return (new Helper())->call([
            "module" => "TV_srt_list_v2",
            "tid" => $tid,
            "fid" => $fid ?? "",
            "season" => $season,
            "episode" => $episode,
            "uid" => $uid ?? 1,
        ]);
    }
}
