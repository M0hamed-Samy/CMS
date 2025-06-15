<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Service>
 */
class ServiceFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'icon' => null, // Or you can use fake image binary if needed
            'title_image' => null,
            'title' => $this->faker->sentence(3),
            'about' => $this->faker->sentence(6),
            'description1' => $this->faker->paragraph(),
            'importance' => $this->faker->sentence(6),
            'small_image' => null,
            'mini_title' => $this->faker->sentence(3),
            'description2' => $this->faker->paragraph(),
            'large_image' => $this->faker->imageUrl(),
            'mini_one_image' => null,
            'mini_two_image' => null,
            'mini_three_image' => null,
        ];
    }
}
