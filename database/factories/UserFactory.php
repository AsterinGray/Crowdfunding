<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'username' => $this->faker->userName,
            'fullname' => $this->faker->name,
            'email' => $this->faker->unique()->safeEmail(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'gender' => $this->faker->randomElement(['Male', 'Female']),
            'phone' => $this->faker->phoneNumber,
            'dateofbirth' => $this->faker->date,
            'placeofbirth' => $this->faker->randomElement(['Jakarta', 'Bali', 'Aceh', 'Papua', 'Bandung', 'Makassar']),
            'address' => 'Jl. ' . $this->faker->randomElement(['A', 'B', 'C', 'D']) . ' No. ' . $this->faker->numberBetween(1, 39) . ' RT ' . $this->faker->numberBetween(1, 13) . ' RW ' . $this->faker->numberBetween(1, 13) . ' Gang Dugu.',
            'bankname' => $this->faker->name,
            'accnumber' => $this->faker->numberBetween(100000000000, 999999999999),
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
