<?php

use Illuminate\Database\Seeder;
use App\Beer;

class BeersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = json_decode( file_get_contents( storage_path('project.json') ) );

        \DB::statement('TRUNCATE TABLE `beers`');

        foreach ($data as $beer) {
            $new_beer = new Beer;
            $new_beer->company_name   = $beer->company_name;
            $new_beer->product_name   = $beer->product_name;
            $new_beer->category   = $beer->category;
            $new_beer->alcohol_content = $beer->alcohol_content;
            $new_beer->description   = $beer->description;
            $new_beer->image   = $beer->image;
            $new_beer->price   = $beer->price;

            $new_beer->save();
        }
    }
}
