<?php

class CategoryController extends \BaseController {

	protected $layout = 'admin.layouts.master';

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$categories = Category::orderBy('id', 'DESC')->paginate(10);
		$listData['categories'] = $categories;
		
		$this->layout->content = View::make('admin.pages.category.index')->with('listData', $listData);
		$this->layout->popup = View::make('admin.pages.category.popup')->render();

		return $this->layout;
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{

		$categories = Category::all();
		$options = array('0' => 'root'); 

		foreach ($categories as $key => $value) {
			$options[$value->id] = $value->name;
		}

		return View::make('admin.pages.category.create', compact('options'));
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
		    'parent_id' 	=> 'required',
		);

		$name = Input::get('name');
		$description = Input::get('description');
		$parentId = Input::get('parent_id');

		$validator = Validator::make(Input::all(), $rules);
		
		if ($validator->fails()) {

		    return Redirect::to('category/create')
		        ->withErrors($validator) 
		        ->withInput(); 
		} else {


			$category = new Category;
			$category->name = $name;
			$category->description = $description;
			
			if (!$parentId) {
				
				$category->parent_id = $parentId;

				$parentLevel = Category::find($parentId);

				if ($parentLevel) {
					$category->level =  $parentLevel->level + 1;
				}
			}

			$result = $category->save();

			if ($result) {
				return Redirect::to('category')->with('result', array('status' => 'alert-success', 'message' => 'Input success' ));
			} else {
				return Redirect::to('category/create')>withInput(); 
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
		$categories = Category::all();
		$options = array('0' => 'root'); 

		foreach ($categories as $key => $value) {
			$options[$value->id] = $value->name;
		}


		$editData['category'] = Category::find($id);
		$editData['options'] = $options;

		return View::make('admin.pages.category.edit')
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
		    'parent_id'		=> 'required',
		);

		$name = Input::get('name');
		$description = Input::get('description');
		$parentId = Input::get('parent_id');
		
		$validator = Validator::make(Input::all(), $rules);
		
		if ($validator->fails()) {

		    return Redirect::to('category/' . $id . '/edit')
		        ->withErrors($validator) 
		        ->withInput(); 
		} else {

			$category = Category::find($id);
			$category->name = $name;
			$category->description = $description;
			
			
			$parentLevel = Category::find($parentId);
			
			$category->parent_id = $parentId;

			if ($parentLevel) {
				$category->level =  $parentLevel->level + 1;
			}


			$result = $category->save();

			if ($result) {
				return Redirect::to('category')->with('result', array('status' => 'alert-success', 'message' => 'Update success' ));
			} else {
				return Redirect::to('category/' . $id . '/edit')>withInput(); 
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

		$category = Category::find($id);
        $result = $category->delete();

        // redirect
        if ($result) {
        	return Redirect::to('category')
        		->with('result', array('status' => 'alert-success', 'message' => 'Successfully deleted the category!' ));
		} else {
			return Redirect::to('category')
        		->with('result', array('status' => 'alert-success', 'message' => 'Failed to delete!' ));
		}
	}


	public function search()
	{
		$q = Input::get('query');
		$categories = Category::orderBy('id', 'DESC')->where('name', 'like', "$q%")->paginate(10);
		$listData['categories'] = $categories;
		$listData['query'] = $q;

		$this->layout->content = View::make('admin.pages.category.index')->with('listData', $listData);
		$this->layout->popup = View::make('admin.pages.category.popup')->render();

		return $this->layout;	
	}

	// AJAX FUNCTIONS 
	public function destroyAll()
	{
		$ids = Input::get('id');
		
		foreach ($ids as $key => $id) {
			$category = Category::find($id);
	        $result = $category->delete();
		}

        if ($result) {
        	echo json_encode(array('status' => TRUE, 'message' => 'Successfully deleted the category!' ));
		} else {
			echo json_encode(array('status' => FALSE, 'message' => 'Failed to delete!' ));
		}
	}
	// END : AJAX FUNCTIONS 

}
