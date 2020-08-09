<?php

use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('roles')->insert([
            'name'=>'administrator',
            'slug'=>'administratorRole'
        ]);

        DB::table('roles')->insert([
            'name'=>'subscriber',
            'slug'=>'subscriberRole'
        ]);

        DB::table('roles')->insert([
            'name'=>'block',
            'slug'=>'blockRole'
        ]);
    }
}
