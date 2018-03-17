<?php

use Illuminate\Database\Seeder;

class categoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    
    public function run()
    {
        
              DB::table('categories')->insert([
              'created_at' => str_random(30),
              'updated_at' => str_random(30),
              'name' => str_random(30),
              'order' => str_random(30),
          ]);
        factory(App\categories::class, 50)->create()->each(function ($u) {
     
     });
    }
}
