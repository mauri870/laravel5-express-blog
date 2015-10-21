<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        //Faker generate random users
        factory(App\User::class,5)->create();

        //Faker generate random posts
        factory(App\Post::class,20)->create();

        // $this->call(UserTableSeeder::class);

        Model::reguard();
    }
}
