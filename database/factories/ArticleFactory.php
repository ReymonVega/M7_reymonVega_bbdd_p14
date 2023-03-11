<?php

namespace Database\Factories;
use App\Models\Article;
use Illuminate\Database\Eloquent\Factories\Factory;
use Faker\Factory as Faker;

use Database\Factories\ArticleFactory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class ArticleFactory extends Factory
{
    protected $model = Article::class;

    public function definition()
{
    $faker = Faker::create(); 
    return [
        'marcaZapatilla' => $faker->unique()->text(50),
        'informacion' => $faker->paragraph(3),
        'color' => $faker->colorName(),
        'preu_salida' => $faker->randomFloat(2, 100, 1000),
        'preu_reventa' => $faker->randomFloat(2, 1100, 2000),
        'numero_modelo' => $faker->numberBetween(0, 6000),
        'estado' => $faker->paragraph(4)
    ];
}
}
