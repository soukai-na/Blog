<?php

namespace Database\Factories;

use App\Models\Article;
use Illuminate\Database\Eloquent\Factories\Factory;

class ArticleFactory extends Factory
{
    /** 
     * 
     * @var string
     */
     
    protected $model= Article::class;
    /**
     
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this ->faker->sentence(),
            'subtitle' => $this ->faker->sentence(),
            'content' => $this ->faker->sentence()
        ];
    }
}
