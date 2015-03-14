<?php

class ActionController extends \BaseController {

	
	###################### ACTIONS #############################3
	public function addToCart()
	{
		$productID = Input::get('productID');
		$quantity = Input::get('quantity');
		$cartData = array(
						'product_id' => $productID,
						'quantity' => $quantity,
					);


		if (Session::has('cart_session.' . $productID)) 
		{
			// Session::forget('cart_session.' . $productID);
			Session::put('cart_session.' . $productID, $cartData);
		} 
		else 
		{
			Session::put('cart_session.' . $productID, $cartData);
		}

		Session::flash('cart_message', 'Pesanan anda telah masuk ke keranjang belanja...');
				
		return Redirect::to(Session::get('last_url'));

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

}