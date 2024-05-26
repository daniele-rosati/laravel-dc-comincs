<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Comic;

class ComicsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $comicsArrey = config('comics');
        
        foreach($comicsArrey as $comicItem) {
            $newComic = new Comic();
            $newComic-> title = $comicItem['title'];
            $newComic-> description = $comicItem['description'];
            // $newComic-> thumb = 'https://picsum.photo/200/300';
            $newComic-> price = $comicItem['price'];
            $newComic-> series = $comicItem['series'];
            $newComic-> sale_date = $comicItem['sale_date'];
            $newComic-> type = $comicItem['type'];
            
            $newComic -> save();
        }
    }
}
