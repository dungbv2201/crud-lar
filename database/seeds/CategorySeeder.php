<?php

use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i=0;$i <100;$i++){
            \App\Models\Category::create(['name'=>'category_'.$i]);
        }

    }
}
