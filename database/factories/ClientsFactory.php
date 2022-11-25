<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class ClientsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        //$name = $this->faker->word;   - busca pelo primeiro name
        $name = $this->faker->sentence;
        return [
            'name' => $name,
            'email' => $this->faker->safeEmail(),
            'password' => Str::slug($name),
            'phone' => $this->faker->imageUrl,
            'city' => $this->faker->randomFloat(1,20,30),
            'state' => $this->faker->sentence,
            'street_name' => $this->faker->randomDigit(),
            'street_number' => $this->faker->randomDigit(),
        ];
    }
}
