<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        // ADMIN USER
        $admin = App\User::create([
            'name' => str_random(10),
            'firstname' => 'admin',
            'surname' => 'surname',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('password'),
            'is_admin' => 1,
            'contact_site' => 'eataman.com'
        ]);

        DB::table('profiles')->insert([
            'avatar' => '',
            'about' => ' about ADMIN ',
            'user_id' => $admin->id,
            'hobbies' => 'some hobbies about you'
        ]);
        // END ADMIN USER


        // NORMAL USER
        $user = App\User::create([
            'name' => str_random(10),
            'firstname' => 'user',
            'surname' => 'surname',
            'email' => 'user@gmail.com',
            'password' => bcrypt('password'),
            'is_admin' => 0
        ]);

        DB::table('profiles')->insert([
            'avatar' => '',
            'about' => ' about USER ',
            'user_id' => $user->id,
            'hobbies' => 'some hobbies about you'
        ]);
        // END NORMAL USER
    }
}
