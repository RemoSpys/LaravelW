<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    // protected $model = Product::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $this->faker->addProvider(new \Bezhanov\Faker\Provider\Commerce($this->faker));
        
        return [
            'name' => $this->faker->productName,
            'price' => $this->faker->randomFloat(4, 10, 1000),
            'description' => $this->faker->text,
            'image' => 'https://picsum.photos/seed/'.$this->faker->text(12).'/200/300',
        ];
    }
}
