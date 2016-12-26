<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        DB::table('roles')->insert([
        	'name' => 'Formatteur',
        	'slug' => 'form'
        ]);

        DB::table('roles')->insert([
        	'name' => 'Apprenant',
        	'slug' => 'appr'
        ]);

        DB::table('role_user')->insert([
            'user_id' => 1,
            'role_id' => 1
        ]);
    }
}
