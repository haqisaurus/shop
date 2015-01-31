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
		$this->call('SettingTableSeeder');
		$this->call('CategoryTableSeeder');
		$this->call('SupplierTableSeeder');

	}

}

class UserTableSeeder extends Seeder {

    public function run()
    {
        DB::table('user')->delete();
	    User::create(array(
	        'firstname' => 'Admin laravel',
	        'lastname' => 'laravel',
	        'photo' => 'laravel',
	        'email'    => 'admin@laravel.com',
	        'password' => Hash::make('laravel'),
	        'role_id' => '1',
	    ));

	    User::create(array(
	        'firstname'     => 'Member laravel',
	        'lastname'     => 'laravel',
	        'photo' => 'member',
	        'email'    => 'member@laravel.com',
	        'password' => Hash::make('laravel'),
	        'role_id' => '2',
	    ));

	    User::create(array(
	        'firstname'     => 'Member 2 laravel',
	        'lastname'     => '2 laravel',
	        'photo' => 'member 2',
	        'email'    => 'member2@laravel.com',
	        'password' => Hash::make('laravel'),
	        'role_id' => '2',
	    ));
    }
}

class UserroleTableSeeder extends Seeder {

    public function run()
    {
        DB::table('user_role')->delete();
	    Role::create(
	    	array(
		        'level'     => 'Admin',
		    )
		);
	    Role::create(
		    array(
		        'level'     => 'Member',
		    )
	    );
    }

}

class SettingTableSeeder extends Seeder {

    public function run()
    {
        DB::table('setting')->delete();
        
	    Setting::create(array(
	        'name'     => 'Nova',
	        'owner'    => 'Admin',
	        'address'  => 'jakal km 10',
	        'email'     => 'nova@gmail.com',
	        'phone' 	=> '09878764367',
	        'logo'     => 'Admin',
	        )
	    );
    }
}

class CategoryTableSeeder extends Seeder {

    public function run()
    {
        DB::table('product_category')->delete();
        
	    Category::create(array(
	        'name'     => 'Root',
	        'description'  => 'Description',
	        'level'    => '0',
	        'parent_id'    => '0',
	        )
	    );
    }
}

class SupplierTableSeeder extends Seeder {

    public function run()
    {
        DB::table('product_supplier')->delete();
        
	    Supplier::create(array(
	        'name'     => 'Lotus',
	        'description'  => 'Description',
	        'address'    => 'Street',
	        'path'    => '',
	        )
	    );
    }
}
