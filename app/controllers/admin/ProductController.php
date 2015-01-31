<?php

class ProductController extends \BaseController {

	protected $layout = 'admin.layouts.master';

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$products = Product::orderBy('id', 'DESC')->paginate(10);
		$listData['products'] = $products;
		
		$this->layout->content = View::make('admin.pages.product.index')->with('listData', $listData);
		$this->layout->popup = View::make('admin.pages.product.popup')->render();

		return $this->layout;
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		$depend['suppliers'] = array();
		$depend['categories'] = array();

		foreach (Supplier::all() as $key => $value) {
			$depend['suppliers'][$value->id] = $value->name;
		}

		foreach (Category::all() as $key => $value) {
			$depend['categories'][$value->id] = $value->name;
		}

		$depend['status'] = array('available', 'out of stock');

		$this->layout->content = View::make('admin.pages.product.create')->with('depend', $depend);
		return $this->layout;

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
		    'status' 		=> 'required',
		    'description' 	=> 'required',
		    'category' 		=> 'required',
		   	'price'			=> 'required',
		    'quantity' 		=> 'required',
		    'supplier' 		=> 'required',
		);

		$name = Input::get('name');
		$status = Input::get('status');
		$description = Input::get('description');
		$category = Input::get('category');
		$price = Input::get('price');
		$quantity = Input::get('quantity');
		$supplier = Input::get('supplier');

		$validator = Validator::make(Input::all(), $rules);
		
		if ($validator->fails()) {

		    return Redirect::to('product/create')
		        ->withErrors($validator) 
		        ->withInput(); 
		} else {	

			// upload file logo
			$product = new Product;
			$product->name = $name;
			$product->description = $description;
			$product->status = $status;
			$product->category_id = $category;
			$product->price = $price;
			$product->quantity = $quantity;
			$product->supplier_id = $supplier;
			$product->user_id = 0;
			// $product->user_id = Auth::user()->id;

			$result = $product->save();

			if ($result) {
				return Redirect::to('product/files/' . $product->id); 
			} else {
				return Redirect::to('product/create')>withInput(); 
			}
			
		}
	}

	public function createFiles($id)
	{
		$this->layout->content = View::make('admin.pages.product.create-media')->with('productId', $id);
		return $this->layout;
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
		$categories = Product::all();
		$editData['product'] = Product::find($id);

		return View::make('admin.pages.product.edit')
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

		    return Redirect::to('product/' . $id . '/edit')
		        ->withErrors($validator) 
		        ->withInput(); 
		} else {

			$product = Product::find($id);
			$product->name = $name;
			$product->description = $description;
			$product->address = $address;

			if (Input::hasFile('logo'))
			{
				$filename = str_random(12) . '.' . $logo->getClientOriginalExtension();
				$uploadResult = Input::file('logo')->move('uploads/product-logo', $filename);
				$product->path = $uploadResult->getPathName();
			}

			$result = $product->save();

			if ($result) {
				return Redirect::to('product')->with('result', array('status' => 'alert-success', 'message' => 'Update success' ));
			} else {
				return Redirect::to('product/' . $id . '/edit')>withInput(); 
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

		$product = Product::find($id);
        $result = $product->delete();

        // redirect
        if ($result) {
        	return Redirect::to('product')
        		->with('result', array('status' => 'alert-success', 'message' => 'Successfully deleted the product!' ));
		} else {
			return Redirect::to('product')
        		->with('result', array('status' => 'alert-danger', 'message' => 'Failed to delete!' ));
		}
	}


	public function search()
	{
		$q = Input::get('query');
		$categories = Product::orderBy('id', 'DESC')->where('name', 'like', "$q%")->paginate(10);
		$listData['products'] = $categories;
		$listData['query'] = $q;

		$this->layout->content = View::make('admin.pages.product.index')->with('listData', $listData);
		$this->layout->popup = View::make('admin.pages.product.popup')->render();

		return $this->layout;	
	}

	// AJAX FUNCTIONS 
	public function destroyAll()
	{
		$ids = Input::get('id');
		
		foreach ($ids as $key => $id) {
			$product = Product::find($id);
	        $result = $product->delete();
		}

        if ($result) {
        	echo json_encode(array('status' => TRUE, 'message' => 'Successfully deleted the category!' ));
		} else {
			echo json_encode(array('status' => FALSE, 'message' => 'Failed to delete!' ));
		}
	}

	public function upload()
	{

		$id = Input::get('data');
		$file = Input::file('product-media');

		if (Input::hasFile('product-media'))
		{
			$filename = str_random(12) . '.' . $file->getClientOriginalExtension();
			$uploadResult = $file->move('uploads/product-media/' . $id, $filename);

			$media = new Media;
			$media->url = $uploadResult->getPathName();
			$media->product_id = $id;
			
			$result = $media->save();

			if ($result) {
				echo json_encode(array('status' => TRUE, 'message' => 'upload success'));
			}
			else
			{
				echo json_encode(array('status' => FALSE, 'message' => 'upload failed'));
			}
		}
		else
		{
			echo json_encode(array('status' => FALSE, 'message' => 'upload failed'));
		}
	}
	// END : AJAX FUNCTIONS 

}
