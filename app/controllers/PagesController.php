<?php

class PagesController extends \BaseController {


	protected $layout = 'frontend.theme2.layouts.master';

	public function index()
	{
		$this->layout->content = View::make('frontend.theme2.pages.home');

		return $this->layout;
	}

	public function product()
	{
		$this->layout->content = View::make('frontend.theme2.pages.products');

		return $this->layout;
	}


	public function detail()
	{
		$this->layout->content = View::make('frontend.theme2.pages.detail');

		return $this->layout;
	}

	public function cart()
	{
		$this->layout->content = View::make('frontend.theme2.pages.cart');

		return $this->layout;
	}

	public function checkout()
	{
		$this->layout->content = View::make('frontend.theme2.pages.checkout');

		return $this->layout;
	}

	public function contact()
	{
		$this->layout->content = View::make('frontend.theme2.pages.contact');

		return $this->layout;
	}

	public function login()
	{
		$this->layout->content = View::make('frontend.theme2.pages.login');

		return $this->layout;
	}

	public function register()
	{
		$this->layout->content = View::make('frontend.theme2.pages.register');

		return $this->layout;
	}
}
