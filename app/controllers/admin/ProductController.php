<?php

class ProductController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//
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
		//
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

	public function listCategory()
	{
		return View::make('admin.pages.list-category');
	}

	public function addCategory()
	{
		return View::make('admin.pages.form-category');
	}

	public function addCategoryProgress()
	{
		$rules = array(
		    'name'    => 'required', 
		    'desctiption' => 'alpha_dash',
		    'parent' => 'required',
		);

		$validator = Validator::make(Input::all(), $rules);

		if ($validator->fails()) {
		    return Redirect::to('add-category')
		        ->withErrors($validator) 
		        ->withInput(); 
		} else {
			$parent = Category::find(Input::get('parent'));

			$category = new Category;
			$category->name = Input::get('name');
			$category->description = Input::get('desctiption') ? Input::get('desctiption') : '';
			$category->parent_id = Input::get('parent');

			$result = $category->save();

			if ($result) {
				return Redirect::to('add-category')->with('result', array('status' => 'alert-success', 'message' => 'input success' ));
			} else {
				return Redirect::to('add-category')>withInput()->with('result', array('status' => 'alert-danger', 'message' => 'input success' ));; 
			}
			
		}
	}
}
