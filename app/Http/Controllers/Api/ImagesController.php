<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Services\CrawlImageService;

class ImagesController extends Controller
{

    protected $crawlImageService;

    public function __construct(CrawlImageService $crawlImageService)
    {
        $this->crawlImageService = $crawlImageService;
    }

    public function getImages()
    {
        //$categories = DB::table('categories')->get();
        $images = $this->crawlImageService->crawlImages();
        return response()->json(['images' => $images]);
    }
}
?>
