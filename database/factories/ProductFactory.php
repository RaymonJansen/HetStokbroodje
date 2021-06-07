<?php

namespace Database\Factories;

use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Product::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->unique()->word,
            'caption' => $this->faker->unique()->words(3),
            'description' => $this->faker->unique()->text(100),
            'price' => $this->faker->unique()->randomNumber(),
            'image_path' => "not_available",
            'category_id' => $this->faker->randomNumber([1, 7]),
            'created_at' => $this->faker->dateTime,
        ];
    }
}
