<?php

namespace Database\Factories;

use App\Models\Wish;
use App\Models\Wishlist;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Image>
 */
class ImageFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $imageable = $this->faker->randomElement([
            Wishlist::class,
            Wish::class,
        ]);

        return [
            'imageable_id' => $imageable::factory(),
            'imageable_type' => $imageable,
            'path' => $this->faker->imageUrl(),
        ];
    }
}
