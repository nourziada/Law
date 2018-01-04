<?php


use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\User::create(
        	[
        		'name' => 'Admin',
        		'email' => 'admin@admin.com',
        		'password' => bcrypt('password'),
        		'admin' => 1
        	]);
    }
}
