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
		$this->call('MessageTableSeeder');
		$this->call('MessageDetailTableSeeder');

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
	        'password' => Hash::make('admin'),
	        'role_id' => '1',
	    ));

	    User::create(array(
	        'firstname'     => 'Member laravel',
	        'lastname'     => 'laravel',
	        'photo' => 'member',
	        'email'    => 'member@laravel.com',
	        'password' => Hash::make('member'),
	        'role_id' => '2',
	    ));

	    User::create(array(
	        'firstname'     => 'Member 2 laravel',
	        'lastname'     => '2 laravel',
	        'photo' => 'member 2',
	        'email'    => 'member2@laravel.com',
	        'password' => Hash::make('member'),
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
	        'photo'    => '',
	        )
	    );
    }
}

class MessageTableSeeder extends Seeder {

    public function run()
    {
        DB::table('message')->delete();
        
	    Message::create(array(
	        'name'     => 'Message title',
	        )
	    );

	    Message::create(array(
	        'name'     => 'Message keren',
	        )
	    );
    }
}

class MessageDetailTableSeeder extends Seeder {

    public function run()
    {
        DB::table('message_detail')->delete();
        
	    Messagedetail::create(array(
	        'message_text'     => 'Message admin',
	        'message_id'     => 1,
	        'user_id'     => 1,
	        )
	    );

	    Messagedetail::create(array(
	        'message_text'     => 'Message member',
	        'message_id'     => 1,
	        'user_id'     => 2,
	        )
	    );

	    Messagedetail::create(array(
	        'message_text'     => 'Message admin',
	        'message_id'     => 2,
	        'user_id'     => 1,
	        )
	    );

	    Messagedetail::create(array(
	        'message_text'     => 'Message member',
	        'message_id'     => 2,
	        'user_id'     => 2,
	        )
	    );
    }
}
