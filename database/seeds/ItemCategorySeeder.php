<?php

use Illuminate\Database\Seeder;

class ItemCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('item_categories')->insert([
            'name'=>'Book',
            'slug'=>'ItemBook'
            
        ]);

        DB::table('item_categories')->insert([
            'name'=>'Audio',
            'slug'=>'ItemAudio',
        ]);
    }
}
