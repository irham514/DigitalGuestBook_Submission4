<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\DigitalGuestBook>
 */
class DigitalGuestBookFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        // Submission 4
        return [
            'name'          => $this->faker->name(),
            'from'          => $this->faker->city(),
            'email'         => $this->faker->email(),
            'phone number'  => $this->faker->phoneNumber()
        ];
    }
}
