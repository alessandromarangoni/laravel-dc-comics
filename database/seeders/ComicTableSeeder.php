<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Comic;

class ComicTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $comics = config('store');

        for ($i = 0; $i < count($comics); $i++) {
            $item = $comics[$i];

        $newComic = new Comic();

        $newComic->title = $item['title'];
        $newComic->description = $item['description'];
        $newComic->thumb = $item['thumb'];
        $newComic->price = $item['price'];
        $newComic->series = $item['series'];
        $newComic->sale_date = $item['sale_date'];
        $newComic->artist = json_encode(implode(",", $item['artists']));
        $newComic->writers = json_encode(implode(",", $item['writers']));

        $newComic->save();
        }
    }
}
