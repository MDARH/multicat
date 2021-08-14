<?php

namespace Database\Factories;

use App\Models\MultiCat;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class MultiCatFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = MultiCat::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'cat_name' => $this->faker->name,
            'slug' => str::slug($this->faker->name),
            'parent' => $this->faker->numberBetween(0,10)
        ];
    }
}
