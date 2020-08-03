<?php

use Illuminate\Database\Seeder;

class BlogCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('blog_categories')->insert([
            'name'=>'Entrepreneurship'
        ]);

        DB::table('blog_categories')->insert([
            'name'=>'Marketing'
        ]);

        DB::table('blog_categories')->insert([
            'name'=>'Positivity'
        ]);

        DB::table('blog_categories')->insert([
            'name'=>'Personal Growth'
        ]);

        DB::table('blog_categories')->insert([
            'name'=>'Economics'
        ]);

        DB::table('blog_categories')->insert([
            'name'=>'Monetary Value'
        ]);
    }
}
