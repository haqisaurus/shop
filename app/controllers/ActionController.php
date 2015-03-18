<?php

class ActionController extends \BaseController {

	
	###################### ACTIONS #############################3
	public function addToCart()
	{
		$productID = Input::get('productID');
		$quantity = Input::get('quantity');
		
		if (Auth::check())
		{
			$orderOld = Order::where('status', 0)->where('user_address_id', Auth::id())->first();
			if ($orderOld) {
				$detail = Orderdetail::where('order_id', $orderOld->id)->where('product_id', $productID)->first();
				if ($detail) {
					$detail->product_id = $productID;
					$detail->quantity = $quantity;
					$detail->save();
				} else {
					$detail = new Orderdetail;
					$detail->product_id = $productID;
					$detail->quantity = $quantity;
					$detail->save();

					$orderOld->detail()->save($detail);
					$orderOld->save();
				}
			} 
			else
			{
				$order = new Order;
				$order->status =  0;
				$order->user_address_id = Auth::id();
				$order->save();

				$detail = new Orderdetail;
				$detail->product_id = $productID;
				$detail->quantity = $quantity;
				$detail->save();

				$order->detail()->save($detail);
			}
		}
		else
		{
			$cartData = array(
							'product_id' => $productID,
							'quantity' => $quantity,
						);

			Session::put('cart_session.' . $productID, $cartData);
			
		}

		return Redirect::to(Session::get('last_url'))->with('cart_message', 'Pesanan anda telah masuk ke keranjang belanja...');
	}

	public function addCartToDB($cartData = array())
	{

		$order = Order::where('status', 0)->where('user_address_id', Auth::id())->first();
		
		if (!$order) {
			$order = new Order;
			$order->status = 0;
			$order->user_address_id = Auth::id();
			$order->save();
		}
		
		if ($cartData) {
			foreach ($cartData as $data) {

				$detail = new Orderdetail;
				$detail->product_id = $data['product_id'];
				$detail->quantity = $data['quantity'];
				$detail->save();

				$order->detail()->save($detail);
			}
		}

	}

	public function removeCart($id)
	{

		Session::forget('cart_session.' . $id);
		Session::flash('cart_message', 'Pesanan anda telah masuk ke keranjang belanja...');
				
		return Redirect::to(Session::get('last_url'));

	}

	public function register()
	{
		$rules = array(
		    'firstname'    => 'required', 
		    'lastname' 	=> 'required',
		    'email' 		=> 'required',
		    'password' 		=> 'required|min:4',
		    'password_confirmation' => 'required|same:password',
		);
				
		$firstName = Input::get('firstname');
		$lastName = Input::get('lastname');
		$email = Input::get('email');
		$password = Input::get('password');
		

		$validator = Validator::make(Input::all(), $rules);
		
		if ($validator->fails()) {

		    return Redirect::to('register')
		        ->withErrors($validator) 
		        ->withInput(Input::except('password', 'password_confirmation')); 
		} else {	

			$user = new User;
			$user->firstname = $firstName;
			$user->lastname = $lastName;
			$user->email = $email;
			$user->password = Hash::make($password);

			$result = $user->save();

			if ($result && Auth::loginUsingId($user->id)) {
				$this->addCartToDB(Session::get('cart_session'));
				return Redirect::to('account'); 
			} else {
				return Redirect::to('register')>withInput(); 
			}
			
		}
	}

	public function updateAccount($id)
	{
		$rules = array(
		    'firstname'    => 'required', 
		    'lastname' 	=> 'required',
		    'email' 		=> 'required',
		);
				
		$firstName = Input::get('firstname');
		$lastName = Input::get('lastname');
		$email = Input::get('email');
		$password = Input::get('password');

		if ($password) {
			$rules['password'] 				= 'required|min:4';
		    $rules['password_confirmation'] = 'required|same:password';
		}
		

		$validator = Validator::make(Input::all(), $rules);
		
		if ($validator->fails()) {

		    return Redirect::to('register')
		        ->withErrors($validator) 
		        ->withInput(Input::except('password', 'password_confirmation')); 
		} else {	

			// upload file logo
			$user = User::find($id);
			$user->firstname = $firstName;
			$user->lastname = $lastName;
			$user->email = $email;
			if ($password) {
				$user->password = Hash::make($password);
			}

			$result = $user->save();

			if ($result) {
				return Redirect::to('account'); 
			} else {
				return Redirect::to('register')>withInput(); 
			}
		}
	}
	
	########################### AUTHENTICATION #############################
	
	public function showLogin()
	{
		
		return View::make('admin.layout.login');
	}

	public function doLogin()
	{
		// validate the info, create rules for the inputs
		$rules = array(
		    'email'    => 'required', // make sure the email is an actual email
		    'password' => 'required|alphaNum|min:3' // password can only be alphanumeric and has to be greater than 3 characters
		);

		// run the validation rules on the inputs from the form
		$validator = Validator::make(Input::all(), $rules);

		// if the validator fails, redirect back to the form
		if ($validator->fails()) {
		    return Redirect::to('login')
		        ->withErrors($validator) // send back all errors to the login form
		        ->withInput(Input::except('password')); // send back the input (not the password) so that we can repopulate the form
		} else {

			// check is not admin

		    $userdata = array(
		        'email'     => Input::get('email'),
		        'password'  => Input::get('password'),
		    );

		    if (Auth::attempt($userdata)) {
				$this->addCartToDB(Session::get('cart_session'));
		        return Redirect::to('account');
		    } else {        
		    	return Redirect::to('login')
		    			->with('msg', 'User and password does not match...')
            			->withInput(Input::except('password')); 	
		    }

		}
	}

	public function showLoginAdmin()
	{
		return View::make('admin.layouts.login');
	}

	public function doLoginAdmin()
	{
		// validate the info, create rules for the inputs
		$rules = array(
		    'email'    => 'required', // make sure the email is an actual email
		    'password' => 'required|alphaNum|min:3' // password can only be alphanumeric and has to be greater than 3 characters
		);

		// run the validation rules on the inputs from the form
		$validator = Validator::make(Input::all(), $rules);

		// if the validator fails, redirect back to the form
		if ($validator->fails()) {
		    return Redirect::to('_login')
		        ->withErrors($validator) // send back all errors to the login form
		        ->withInput(Input::except('password')); // send back the input (not the password) so that we can repopulate the form
		} else {

			// check is not admin

		    $userdata = array(
		    	'role_id' => 1,
		        'email'     => Input::get('email'),
		        'password'  => Input::get('password'),
		    );

		    if (Auth::attempt($userdata)) {
		        return Redirect::to('dashboard');
		    } else {        
		    	return Redirect::to('_login')
		    			->with('msg', 'User not found...')
            			->withInput(Input::except('password')); 	
		    }

		}
	}

	public function doLogout()
	{
		Auth::logout();
		# Arahkan ke route 'index' dengan session 'pesan'.
		return Redirect::to('/');
	}
}