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
		$data = $this->commonData();

		$this->layout->content = View::make('frontend.' . $this->theme . '.pages.products')->with('data', $data);

		return $this->layout;
	}


	public function detail()
	{
		$data = $this->commonData();

		$this->layout->content = View::make('frontend.' . $this->theme . '.pages.detail')->with('data', $data);

		return $this->layout;
	}

	public function cart()
	{
		$data = $this->commonData();

		$this->layout->content = View::make('frontend.' . $this->theme . '.pages.cart')->with('data', $data);

		return $this->layout;
	}

	public function checkout()
	{
		$data = $this->commonData();

		$this->layout->content = View::make('frontend.' . $this->theme . '.pages.checkout')->with('data', $data);

		return $this->layout;
	}

	public function contact()
	{

		$data = $this->commonData();

		$this->layout->content = View::make('frontend.' . $this->theme . '.pages.contact')->with('data', $data);

		return $this->layout;
	}

	public function login()
	{
		$data = $this->commonData();

		$this->layout->content = View::make('frontend.' . $this->theme . '.pages.login')->with('data', $data);

		return $this->layout;
	}

	public function register()
	{
		$data = $this->commonData();

		$this->layout->content = View::make('frontend.' . $this->theme . '.pages.register')->with('data', $data);

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
