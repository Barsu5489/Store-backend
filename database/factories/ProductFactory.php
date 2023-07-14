<?php

namespace Database\Factories;

use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    protected $model = Product::class;

    public function definition()
    {
        return [
            'name' => $this->faker->name,
            'description' => $this->faker->sentence,
            'price' => $this->faker->randomFloat(2, 0, 999999),
            'specifications' => $this->faker->paragraph,
            'brand' => $this->faker->word,
            'model' => $this->faker->word,
            'ram' => $this->faker->numberBetween(1, 16),
            'storage' => $this->faker->numberBetween(64, 1024),
        ];
    }
    public function configure()
    {
        return $this->afterCreating(function (Product $product) {
            $product->images()->createMany([
                ['image_path' => 'https://picsum.photos/640/480?random=1'],
                ['image_path' => 'https://picsum.photos/640/480?random=2'],
                ['image_path' => 'https://picsum.photos/640/480?random=3'],
            ]);
        });
    }

}
