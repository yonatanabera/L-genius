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
            'name'=>'Entrepreneurship',
            'slug'=>'BlogEntrepreneurship'
        ]);

        DB::table('blog_categories')->insert([
            'name'=>'Marketing',
            'slug'=>'BlogMarketing'
        ]);

        DB::table('blog_categories')->insert([
            'name'=>'Positivity',
            'slug'=>'BlogPositivity'
        ]);

        DB::table('blog_categories')->insert([
            'name'=>'Personal Growth',
            'slug'=>'BlogPersonalGrowth'
        ]);

        DB::table('blog_categories')->insert([
            'name'=>'Economics',
            'slug'=>'BlogEconomics'
        ]);

        DB::table('blog_categories')->insert([
            'name'=>'Monetary Value',
            'slug'=>'BlogMonetaryValue'
        ]);
    }
}
