<?php
 
namespace Database\Factories;
 
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
 
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->company,
            'price' => $this->faker->numberBetween($min = 200, $max = 9000),
            'description' => $this->faker->company,
            'quantity' => $this->faker->numberBetween($min = 0, $max = 50),
        ];
    }
}
