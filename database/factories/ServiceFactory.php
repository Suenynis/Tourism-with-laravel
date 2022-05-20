<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class ServiceFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->word(),
            'tags' => $this->faker->word(),
<<<<<<< HEAD
            'sphere' => $this->faker->word(),
=======
            'author' => $this->faker->firstName(),
            'sphere' => $this->faker->word(),
            'description' => $this->faker->text(),

>>>>>>> b160b33c79382548d58b2e8fd7dcab4f23c7209f
        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     *
     * @return \Illuminate\Database\Eloquent\Factories\Factory
     */
    public function unverified()
    {
        return $this->state(function (array $attributes) {
            return [
                'email_verified_at' => null,
            ];
        });
    }
}
