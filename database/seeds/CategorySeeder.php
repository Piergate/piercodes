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
        DB::table('users')->insert([
            'name' => 'admin',
            'email' => 'admin@piercodes.com',
            'password' => bcrypt('admin'),
        ]);
    	DB::table('categories')->insert([
    		'name' => 'Web Application Development',
            'user_id' => 1,
    	]);
    	DB::table('categories')->insert([
    		'name' => 'Mobile/Web Application',
            'user_id' => 1,
    	]);

    }
}
