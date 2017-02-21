<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    // public function data_images() {
    //     $images = DB::table('images')->get();
    //     dd($images);
    //     foreach($images as $image) {
    //         $image->merge({'category' => $image->category->name});
    //     }

    //     return $images;
    // }
}
