<?php

namespace Database\Seeders;

use App\Models\Comic;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ComicsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $comics = config('comics');
        foreach($comics as $el){
            $comic = new Comic();
            $comic->title = $el['title'];
            $comic->description = $el['description'];
            $comic->thumb = $el['thumb'];
            $comic->price = $el['price'];
            $comic->series = $el['series'];
            $comic->sale_date = $el['sale_date'];
            $comic->type = $el['type'];
            $comic->save();

        }
    }
}
