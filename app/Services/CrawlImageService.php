<?php

namespace App\Services;

use App\Models\Category;
use App\Models\Image;

class CrawlImageService
{
    public function __construct()
    {

    }

    public function crawlImages()
    {
        $images = Image::all();
        $results = [];
        foreach ($images as $image) {
            $result = [];
            $result['id'] = $image->id;
            $result['link'] = $image->link;
            $result['category'] = $image->category->name;
            $results[] = $result;
        }
        return $results;
    }
}
