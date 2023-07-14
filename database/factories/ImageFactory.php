<?php

namespace Database\Factories;

use App\Models\Image;
use Illuminate\Database\Eloquent\Factories\Factory;
use Faker\Generator as Faker;

class ImageFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Image::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $faker = new Faker();

        return [
            'product_id' => function () {
                return factory(App\Models\Product::class)->create()->id;
            },
            'image_path' =>  $this->faker->imageUrl(640, 480, 'technics', true),
        ];
    }
}
