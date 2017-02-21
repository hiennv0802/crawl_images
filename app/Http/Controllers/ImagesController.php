<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Log;

class ImagesController extends Controller{
    public function get_images() {
        $categories = DB::table('categories')->get();
        $images = DB::table('images')->get();
        return response()->json(['images' => $images]);
    }
}
?>
