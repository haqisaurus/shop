<?php

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Eloquent::unguard();

		$this->call('UserroleTableSeeder');
		$this->call('UserTableSeeder');
	}

}

class UserTableSeeder extends Seeder {

    public function run()
    {
        DB::table('users')->delete();
	    User::create(array(
	        'name'     => 'Admin laravel',
	        'photo' => 'laravel',
	        'email'    => 'admin@laravel.com',
	        'password' => Hash::make('laravel'),
	        'user_role_id' => '1',
	    ));

	    User::create(array(
	        'name'     => 'Member laravel',
	        'photo' => 'member',
	        'email'    => 'member@laravel.com',
	        'password' => Hash::make('laravel'),
	        'user_role_id' => '2',
	    ));

	    User::create(array(
	        'name'     => 'Member 2 laravel',
	        'photo' => 'member 2',
	        'email'    => 'member2@laravel.com',
	        'password' => Hash::make('laravel'),
	        'user_role_id' => '2',
	    ));
    }
}

class UserroleTableSeeder extends Seeder {

    public function run()
    {
        DB::table('user_role')->delete();
	    Role::create(array(
	        'level'     => 'Admin',
	    ));

	    Role::create(array(
	        'level'     => 'Member',
	    ));
    }

}
