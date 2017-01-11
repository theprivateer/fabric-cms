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
        $user = \App\User::create([
            'name'   => 'John Snow',
            'email' => 'john@example.com',
            'password'  => bcrypt('password')
        ]);

        if($site = \Privateer\Fabric\Sites\Site::first())
        {
            $user->sites()->attach($site);
        }
    }
}
