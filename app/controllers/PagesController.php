<?php

class PagesController extends \BaseController {

	private $theme = "theme2";
	protected $layout = 'frontend.theme2.layouts.master';

	public function index()
	{
		$data = $this->commonData();
		$data['new_product'] =  Product::orderBy('id', 'DESC')->paginate(6);
		$data['featured_product'] = Product::orderBy('id', 'DESC')->paginate(2);

		$this->layout->content = View::make('frontend.' . $this->theme . '.pages.home')->with('data', $data);

		return $this->layout;
	}

	public function product()
	{
		$this->layout->content = View::make('frontend.' . $this->theme . '.pages.products');

		return $this->layout;
	}


	public function detail()
	{
		$this->layout->content = View::make('frontend.' . $this->theme . '.pages.detail');

		return $this->layout;
	}

	public function cart()
	{
		$this->layout->content = View::make('frontend.' . $this->theme . '.pages.cart');

		return $this->layout;
	}

	public function checkout()
	{
		$this->layout->content = View::make('frontend.' . $this->theme . '.pages.checkout');

		return $this->layout;
	}

	public function contact()
	{
		$this->layout->content = View::make('frontend.' . $this->theme . '.pages.contact');

		return $this->layout;
	}

	public function login()
	{
		$this->layout->content = View::make('frontend.' . $this->theme . '.pages.login');

		return $this->layout;
	}

	public function register()
	{
		$this->layout->content = View::make('frontend.' . $this->theme . '.pages.register');

		return $this->layout;
	}

	private function commonData()
	{
		$data['products'] = Product::orderBy('id', 'DESC')->paginate(10);
		$data['categories'] = Category::all();
		$data['suppliers'] = Supplier::all();

		return $data;
	}
}
