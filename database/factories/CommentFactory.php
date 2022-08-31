<?php

namespace Database\Factories;

use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class CommentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
        "author_comm_id"=>User::factory(),
        "message" =>$this->faker->sentence(),
       "post_id"=>Post::factory(),
        ];
    }
}
