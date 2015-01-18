<?php

class CategoryController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$categories = Category::orderBy('id', 'DESC')->paginate(5);
		$listData['categories'] = $categories;

		return View::make('admin.pages.category.index')
			->with('listData', $listData);
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
		    'desctiption' 	=> 'alpha_dash',
		    'parent_id' 	=> 'required',
		);

		$validator = Validator::make(Input::all(), $rules);
		
		if ($validator->fails()) {

		    return Redirect::to('categories/create')
		        ->withErrors($validator) 
		        ->withInput(); 
		} else {


			$category = new Category;
			$category->name = Input::get('name');
			$category->description = Input::get('desctiption');
			
			if (!Input::get('parent')) {
				$category->parent_id = Input::get('parent_id');

				$parentLevel = Category::find(Input::get('parent_id'));

				if ($parentLevel) {
					$category->level =  $parentLevel->level + 1;
				}
			}

			$result = $category->save();

			if ($result) {
				return Redirect::to('categories')->with('result', array('status' => 'alert-success', 'message' => 'input success' ));
			} else {
				return Redirect::to('categories/create')>withInput()->with('result', array('status' => 'alert-danger', 'message' => 'input success' ));; 
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
		    'desctiption' 	=> 'alpha_dash',
		    'parent' 		=> 'required',
		);

		$validator = Validator::make(Input::all(), $rules);
		
		if ($validator->fails()) {

		    return Redirect::to('categories/' . $id . '/edit')
		        ->withErrors($validator) 
		        ->withInput(); 
		} else {


			$category = new Category;
			$category->name = Input::get('name');
			$category->description = Input::get('desctiption');
			
			if (!Input::get('parent')) {
				$level = Category::find(Input::get('parent'));
				$category->parent_id = Input::get('parent');
			}

			$result = $category->save();

			if ($result) {
				return Redirect::to('categories')->with('result', array('status' => 'alert-success', 'message' => 'input success' ));
			} else {
				return Redirect::to('categories/' . $id . '/edit')>withInput()->with('result', array('status' => 'alert-danger', 'message' => 'input success' ));; 
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
		//
		$category = Category::find($id);
        $result = $category->delete();

        // redirect
        if ($result) {
        	return Redirect::to('categories')
        		->with('result', array('status' => 'alert-success', 'message' => 'Successfully deleted the category!' ));
		} else {
			return Redirect::to('categories')
        	->with('result', array('status' => 'alert-success', 'message' => 'Failed to delete!' ));
		}
	}


}
