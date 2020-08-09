<?php

use Illuminate\Database\Seeder;

class ServiceCounterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('service_counters')->insert([
            'title'=>'Satisfied Clients',
            'count'=>15448,
            'slug'=>'Satisfied_clients',
        ]);

        DB::table('service_counters')->insert([
            'title'=>'Ongoing Projects',
            'count'=>15448,
            'slug'=>'Ongoing_projects',
        ]);

        DB::table('service_counters')->insert([
            'title'=>'Completed Projects',
            'count'=>15448,
            'slug'=>'comleted_projects',
        ]);

        DB::table('service_counters')->insert([
            'title'=>'Graduated Entrepreneurs',
            'count'=>15448,
            'slug'=>'graduated_entrepreneurs',
        ]);

    }
}
