<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class BeneficiaryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'user_id' => $this->faker->numberBetween(1, 10),
            'businessdesc' => $this->faker->unique()->paragraph(),
            'businessadd' => 'Jl. ' . $this->faker->randomElement(['A', 'B', 'C', 'D']) . ' No. ' . $this->faker->numberBetween(1, 39) . ' RT ' . $this->faker->numberBetween(1, 13) . ' RW ' . $this->faker->numberBetween(1, 13) . ' Gang Kuning.',
            'businesspic' => 'https://gobiz.co.id/pusat-pengetahuan/wp-content/uploads/2021/06/membuka-warung-kelontong-1.jpg',
            'grossincome' => $this->faker->unique()->numberBetween(3000000, 4000000),
            'netincome' => $this->faker->unique()->numberBetween(1000000, 2000000),
        ];
    }
}
