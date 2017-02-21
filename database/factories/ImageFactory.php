<?php
$factory->define(App\Models\Image::class, function (Faker\Generator $faker){
    return [
        'link' => $faker->text,
        'category_id' => function() {
            return App\Models\Category::inRandomOrder()->get()->first()->id;
        },
    ];
});
?>
