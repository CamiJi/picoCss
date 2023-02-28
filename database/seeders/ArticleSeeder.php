<?php

namespace Database\Seeders;

use App\Models\Article;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Article::create([
            'title' => 'Premier article',
            'subtitle' => 'Cette article est seedé par la classe ArticleSeeder',
            'content' => 'Article seedé par la classe ArticleSeeder. La commande pour le ssedé est : php artisan db:seed --class=ArticleSeeder. Pour notre application nous avons crée  un model, une migration, un sedder et une factory sur le thème de l\'article',
            'image' => 'https://www.qwant.com/?client=brz-moz&t=images&q=seeder&size=large&o=1%3ABB64D9D4A38E1A398C60F50F646A130336402021',
            'published_at' => now(),
        ]);

    }
}
