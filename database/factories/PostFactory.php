<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Arr;

class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */    
     public function definition()
    {
        return [
            "title" => $this->faker->word(),
            "description" => $this->faker->text($maxNbChars = 200)  ,
            "author_id" => Arr::random([1, 2, 3, 4, 5, 6, 7, 8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30]),            "publication_date"=> now(),
            "photo" => $this->faker->imageUrl(),
            "published" => true,
        ];
    }
}
