<?php

namespace Database\Seeders;

use App\Models\Comics;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ComicSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $comics = config('comic_db');

        foreach ($comics as $comic_item) {
            $comics = new Comics();
            $comics->title = $comic_item['title'];
            $comics->description = $comic_item['description'];
            $comics->price = $comic_item['price'];
            $comics->series = $comic_item['series'];
            $comics->sale_date = $comic_item['sale__date'];
            $comics->type = $comic_item['type'];
            $comics->artists = $comic_item['artists'];
            $comics->writers = $comic_item['writers'];
            
            $comics->save();
        }
    }
}
