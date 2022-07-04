<?php

namespace Database\Factories;

use App\Models\Categories;
use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;

class CategoriesFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title'=>$this->faker->word,
            'photo'=>$this->faker->imageUrl(800,800),
            'parent_id'=>$this->faker->randomElement(Categories::pluck('id')->toArray()),
            'is_parent'=>$this->faker->randomElement( ['0','1']),
            'status'=>$this->faker->randomElement( ['Active','Inactive']),
        ];
    }
}
