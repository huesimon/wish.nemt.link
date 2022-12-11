<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Image;
use App\Models\Wish;
use App\Models\Wishlist;
use Database\Factories\ImageFactory;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $wishlists = Wishlist::factory()->count(10)->create();

        foreach ($wishlists as $wishlist) {
            Image::factory()->count(3)->create([
                'imageable_id' => $wishlist->id,
                'imageable_type' => Wishlist::class,
            ]);

            $wishlist->wishes()->saveMany(
                Wish::factory()->count(5)->create()
            );

            foreach ($wishlist->wishes as $wish) {
                Image::factory()->count(3)->create([
                    'imageable_id' => $wish->id,
                    'imageable_type' => Wish::class,
                ]);
            }
        }


    }
}
