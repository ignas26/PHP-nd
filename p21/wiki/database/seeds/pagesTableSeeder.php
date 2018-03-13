<?php

use Illuminate\Database\Seeder;

class pagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
            public function run()
      {
          DB::table('pages')->insert([
              'created_at' => str_random(30),
              'updated_at' => str_random(30),
              'content' => str_random(500),
              'title' => str_random(30),
              'category_id' => str_random(30),
              'author_id' => str_random(30),
              'published' => str_random(30),
          ]);
                 factory(App\pages::class, 50)->create()->each(function ($u) {
     
     });    
      }
}