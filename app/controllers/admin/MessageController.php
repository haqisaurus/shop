<?php

class MessageController extends \BaseController {

	protected $layout = 'admin.layouts.master';
	
	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index($id = 0)
	{
		$data['messages'] = Message::orderBy('id', 'desc')->get();

		if ($id) {
			$data['list'] = Message::find($id)->messageDetailASC;
			$data['activeId'] = $id;
		} else {
			$data['list'] = Message::orderBy('id', 'desc')->first()->messageDetailASC;
		}
		
		
		$this->layout->content = View::make('admin.pages.message.index')->with('data', $data);

		return $this->layout;
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$rules = array(
		    'message_id'    => '', 
		    'message' 		=> 'alpha_dash',
		);

		$messageId = Input::get('message_id');
		$message_text = Input::get('message');

		$validator = Validator::make(Input::all(), $rules);
		
		if ($validator->fails()) {

		    return Redirect::to('message')
		        ->withErrors($validator) 
		        ->withInput(); 
		} else {

			$message = new Messagedetail;
			$message->message_text = $message_text;
			$message->message_id = $messageId;
			$message->user_id = Auth::user()->id;
			

			$result = $message->save();

			if ($result) {
				return Redirect::to('message')->with('result', array('status' => 'alert-success', 'message' => 'Input success' ));
			} else {
				return Redirect::to('message')->withInput(); 
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

	public function getMessageDetail($id)
	{
		

		$this->layout->content = View::make('admin.pages.message.index')->with('data', $data);

		return $this->layout;
	}


}
