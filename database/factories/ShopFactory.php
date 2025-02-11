<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Shop>
 */
class ShopFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $user = User::inRandomOrder()->first();

        return [
            'user_id' => $user,
            'shop_name' => fake()->name(),
            'shop_description' => fake()->sentence(3),
            'shop_address' => fake()->address(),
            'latitude' => fake()->latitude(-1, 5),
            'longitude' => fake()->longitude(103, 110)
        ];
    }
}
