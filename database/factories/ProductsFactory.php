<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ProductsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name,
            'price' => $this->faker->numberBetween(1000,1000),
            'quantity' => $this->faker->numberBetween(10,100),
            'content' => $this->faker->sentence(5),
            'configuration' => $this->faker->paragraph,

        ];
    }
}
