<?php

namespace App\Http\Controllers\api;

use Illuminate\Http\Request;
use DB;
use Log;

class ImagesController extends BaseController{
    public function get_images() {
        $images = DB::table('images')->get();
        echo "aaaaaaaaaaa"
        // return response()->json(['images' => 'ImagesControllerJson']);
    }
}
?>
