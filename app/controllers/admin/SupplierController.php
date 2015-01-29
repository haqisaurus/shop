<?php

class SupplierController extends \BaseController {

	protected $layout = 'admin.layouts.master';

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$suppliers = Supplier::orderBy('id', 'DESC')->paginate(2);
		$listData['suppliers'] = $suppliers;
		
		$this->layout->content = View::make('admin.pages.supplier.index')->with('listData', $listData);
		$this->layout->popup = View::make('admin.pages.supplier.popup')->render();

		return $this->layout;
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{

		$categories = Supplier::all();
		$options = array('0' => 'root'); 

		foreach ($categories as $key => $value) {
			$options[$value->id] = $value->name;
		}

		return View::make('admin.pages.supplier.create', compact('options'));
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{

		$rules = array(
		    'name'    		=> 'required', 
		    'description' 	=> 'alpha_dash',
		    'address' 		=> 'required',
		    'logo' 			=> '',
		);

		$name = Input::get('name');
		$description = Input::get('description');
		$address = Input::get('address');
		$logo = Input::file('logo');

		$validator = Validator::make(Input::all(), $rules);
		
		if ($validator->fails()) {

		    return Redirect::to('supplier/create')
		        ->withErrors($validator) 
		        ->withInput(); 
		} else {	

			// upload file logo
			$supplier = new Supplier;
			$supplier->name = $name;
			$supplier->description = $description;
			$supplier->address = $address;

			if (Input::hasFile('logo'))
			{
				$filename = str_random(12) . '.' . $logo->getClientOriginalExtension();
				$uploadResult = Input::file('logo')->move('uploads/supplier-logo', $filename);
				$supplier->path = $uploadResult->getPathName();
			}
			else
			{
				$supplier->path = 'uploads/default/100x100.gif';
			}
			

			$result = $supplier->save();

			if ($result) {
				return Redirect::to('supplier')->with('result', array('status' => 'alert-success', 'message' => 'Input success' ));
			} else {
				return Redirect::to('supplier/create')>withInput(); 
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
		//
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$categories = Supplier::all();
		$editData['supplier'] = Supplier::find($id);

		return View::make('admin.pages.supplier.edit')
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
		    'name'    		=> 'required', 
		    'description' 	=> 'alpha_dash',
		    'address' 		=> 'required',
		    'logo' 			=> '',
		);

		$name = Input::get('name');
		$description = Input::get('description');
		$address = Input::get('address');
		$logo = Input::file('logo');
		
		$validator = Validator::make(Input::all(), $rules);
		
		if ($validator->fails()) {

		    return Redirect::to('supplier/' . $id . '/edit')
		        ->withErrors($validator) 
		        ->withInput(); 
		} else {

			$supplier = Supplier::find($id);
			$supplier->name = $name;
			$supplier->description = $description;
			$supplier->address = $address;

			if (Input::hasFile('logo'))
			{
				$filename = str_random(12) . '.' . $logo->getClientOriginalExtension();
				$uploadResult = Input::file('logo')->move('uploads/supplier-logo', $filename);
				$supplier->path = $uploadResult->getPathName();
			}

			$result = $supplier->save();

			if ($result) {
				return Redirect::to('supplier')->with('result', array('status' => 'alert-success', 'message' => 'Update success' ));
			} else {
				return Redirect::to('supplier/' . $id . '/edit')>withInput(); 
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

		$supplier = Supplier::find($id);
        $result = $supplier->delete();

        // redirect
        if ($result) {
        	return Redirect::to('supplier')
        		->with('result', array('status' => 'alert-success', 'message' => 'Successfully deleted the category!' ));
		} else {
			return Redirect::to('supplier')
        		->with('result', array('status' => 'alert-success', 'message' => 'Failed to delete!' ));
		}
	}


	public function search()
	{
		$q = Input::get('query');
		$categories = Supplier::orderBy('id', 'DESC')->where('name', 'like', "$q%")->paginate(10);
		$listData['suppliers'] = $categories;
		$listData['query'] = $q;

		$this->layout->content = View::make('admin.pages.supplier.index')->with('listData', $listData);
		$this->layout->popup = View::make('admin.pages.supplier.popup')->render();

		return $this->layout;	
	}

	// AJAX FUNCTIONS 
	public function destroyAll()
	{
		$ids = Input::get('id');
		
		foreach ($ids as $key => $id) {
			$supplier = Supplier::find($id);
	        $result = $supplier->delete();
		}

        if ($result) {
        	echo json_encode(array('status' => TRUE, 'message' => 'Successfully deleted the category!' ));
		} else {
			echo json_encode(array('status' => FALSE, 'message' => 'Failed to delete!' ));
		}
	}
	// END : AJAX FUNCTIONS 

}
