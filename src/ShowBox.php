<?php

namespace Elsayed85\ShowBox;

use Elsayed85\ShowBox\Api\Episode;
use Elsayed85\ShowBox\Api\Movie;
use Elsayed85\ShowBox\Api\Search;
use Elsayed85\ShowBox\Api\TV;

class ShowBox
{
    public static function search()
    {
        return new Search();
    }

    public function movie()
    {
        return new Movie();
    }

    public function tv()
    {
        return new TV();
    }

    public function episode()
    {
        return new Episode();
    }
}
