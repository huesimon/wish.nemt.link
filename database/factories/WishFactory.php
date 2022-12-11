<?php

namespace Database\Factories;

use App\Models\Wishlist;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Wish>
 */
class WishFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'wishlist_id' => Wishlist::factory(),
            'title' => $this->faker->name,
            'description' => $this->faker->text,
            'amount' => $this->faker->numberBetween(1, 100),
            'url' => $this->faker->url,
        ];
    }
}
