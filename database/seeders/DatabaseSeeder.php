<?php
use App\Models\Article;
use Database\Factories\ArticleFactory;
use Illuminate\Support\Facades\DB;

use Illuminate\Database\Eloquent\Factories\Factory;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        
        ArticleFactory::new()->count(25)->create();

    }
}
