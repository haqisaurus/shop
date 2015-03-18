<?php

class UserController extends \BaseController {

	protected $layout = 'admin.layouts.master';

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$listData['users'] = User::orderBy('id', 'DESC')->paginate(10);

		$this->layout->content = View::make('admin.pages.user.index')->with('listData', $listData);;
		$this->layout->popup = View::make('admin.pages.user.popup')->render();

		return $this->layout;
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		$roles = Role::orderBy('id', 'DESC')->get();
		$options = array();

		foreach ($roles as $key => $value) {
			$options[$value->id] = $value->level;
		}

		return View::make('admin.pages.user.create', compact('options'));
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$rules = array(
		    'firstname'    	=> 'required', 
		    'lastname' 		=> 'required',
		    'email' 		=> 'required',
		    'password' 		=> 'required',
		    'photo' 		=> '',
		    'role_id'		=> 'required',
		);

		$firstName = Input::get('firstname');
		$lastName = Input::get('lastname');
		$email = Input::get('email');
		$password = Input::file('password');
		$photo = Input::file('photo');
		$roleId = Input::get('role_id');

		$validator = Validator::make(Input::all(), $rules);
		
		if ($validator->fails()) {

		    return Redirect::to('user/create')
		        ->withErrors($validator) 
		        ->withInput(); 
		} else {	

			// upload file logo
			$user = new User;
			$user->firstname = $firstName;
			$user->lastname = $lastName;
			$user->email = $email;
			$user->password = Hash::make($password);
			$user->role_id = $roleId;

			if (Input::hasFile('photo'))
			{
				$filename = str_random(12) . '.' . $photo->getClientOriginalExtension();
				$uploadResult = $photo->move('uploads/user-photo', $filename);
				$user->photo = $uploadResult->getPathName();
			}
			else
			{
				$user->photo = 'uploads/default/100x100.gif';
			}
			

			$result = $user->save();

			if ($result) {
				return Redirect::to('user')->with('result', array('status' => 'alert-success', 'message' => 'Input success' ));
			} else {
				return Redirect::to('user/create')>withInput(); 
			}
			
		}

	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$user = User::find($id);

		$this->layout->content = View::make('admin.pages.user.view')->with('user', $user);;
		$this->layout->popup = View::make('admin.pages.user.popup')->render();

		return $this->layout;
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$options = array();
		$roles = Role::orderBy('id', 'DESC')->get();

		foreach ($roles as $key => $value) {
			$options[$value->id] = $value->level;
		}
		$editData['user'] = User::find($id);
		$editData['options'] = $options;

		return View::make('admin.pages.user.edit')
			->with('editData', $editData);
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$rules = array(
		    'firstname'    	=> 'required', 
		    'lastname' 		=> 'required',
		    'email' 		=> 'required',
		    'password' 		=> '',
		    'photo' 		=> '',
		    'role' 			=> 'required',
		);

		$firstName = Input::get('firstname');
		$lastName = Input::get('lastname');
		$email = Input::get('email');
		$password = Input::file('password');
		$photo = Input::file('photo');
		$roleId = Input::get('role_id');
		
		$validator = Validator::make(Input::all(), $rules);
		
		if ($validator->fails()) {

		    return Redirect::to('user/' . $id . '/edit')
		        ->withErrors($validator) 
		        ->withInput(); 
		} else {

			$user = User::find($id);
			$user->firstname = $firstName;
			$user->lastname = $lastName;
			$user->email = $email;
			$user->role_id = $roleId;

			if ($password) {
				$user->password = Hash::make($password);
			}

			if (Input::hasFile('photo'))
			{
				$filename = str_random(12) . '.' . $photo->getClientOriginalExtension();
				$uploadResult = $photo->move('uploads/user-photo', $filename);
				$user->path = $uploadResult->getPathName();
			}

			$result = $user->save();

			if ($result) {
				return Redirect::to('user')->with('result', array('status' => 'alert-success', 'message' => 'Update success' ));
			} else {
				return Redirect::to('user/' . $id . '/edit')>withInput(); 
			}
		}
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$user = User::find($id);
        $result = $user->delete();

        // redirect
        if ($result) {
        	return Redirect::to('user')
        		->with('result', array('status' => 'alert-success', 'message' => 'Successfully deleted the user!' ));
		} else {
			return Redirect::to('user')
        		->with('result', array('status' => 'alert-success', 'message' => 'Failed to delete!' ));
		}
	}



	public function search()
	{
		$q = Input::get('query');
		$categories = User::orderBy('id', 'DESC')->where('firstname', 'like', "$q%")->paginate(10);
		$listData['users'] = $categories;
		$listData['query'] = $q;

		$this->layout->content = View::make('admin.pages.user.index')->with('listData', $listData);
		$this->layout->popup = View::make('admin.pages.user.popup')->render();

		return $this->layout;	
	}

	// AJAX FUNCTIONS 
	public function destroyAll()
	{
		$ids = Input::get('id');
		
		foreach ($ids as $key => $id) {
			$user = User::find($id);
	        $result = $user->delete();
		}

        if ($result) {
        	echo json_encode(array('status' => TRUE, 'message' => 'Successfully deleted the user!' ));
		} else {
			echo json_encode(array('status' => FALSE, 'message' => 'Failed to delete!' ));
		}
	}
	// END : AJAX FUNCTIONS 

}
