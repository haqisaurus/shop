<?php

class PagesController extends \BaseController {

	private $theme = "theme2";
	protected $layout = 'frontend.theme2.layouts.master';

	public function __construct() {
		Session::flash('last_url', Request::url());
   	}

	public function index()
	{
		$data = $this->commonData();
		$data['new_products'] =  Product::orderBy('id', 'DESC')->paginate(6);
		$data['featured_product'] = Product::where('featured', 1)->orderBy('id', 'DESC')->get();

		$this->layout->content = View::make('frontend.' . $this->theme . '.pages.home')->with('data', $data);

		return $this->layout;
	}

	public function product()
	{
		$data = $this->commonData();
		$data['new_products'] =  Product::orderBy('id', 'DESC')->paginate(1);

		$this->layout->content = View::make('frontend.' . $this->theme . '.pages.products')->with('data', $data);

		return $this->layout;
	}


	public function detail($id = null)
	{
		$data = $this->commonData();
		$data['product_detail'] = Product::find($id);
		$data['product_in_category'] = Product::where('category_id', $data['product_detail']->category_id)->orderBy('id', 'DESC')->get();

		$this->layout->content = View::make('frontend.' . $this->theme . '.pages.detail')->with('data', $data);

		return $this->layout;
	}

	public function cart()
	{
		$data = $this->commonData();

		$total = 0;
		$data['data_checkout'] = array();

		foreach (Session::get('cart_session') as $key => $value) {
			$product = Product::find($value['product_id']);


			$product['cart_quantity'] = $value['quantity'];
			$data['data_checkout'][] = $product;

			$total = $total + ($product->price * $value['quantity']);
		}

		$data['total'] = "Rp " . number_format($total,2,',','.');				
				
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

	public function account()
	{
		$data = $this->commonData();
		$data['user'] = User::find(Auth::id());

		$this->layout->content = View::make('frontend.' . $this->theme . '.pages.account')->with('data', $data);

		return $this->layout;
	}

	private function commonData()
	{
		$data['products'] = Product::orderBy('id', 'DESC');
		$data['categories'] = Category::all();
		$data['suppliers'] = Supplier::all();
		$data['random_product'] = Product::where('stock', '>', 0)->where('price_promo', '>', 0)->orderByRaw("RAND()")->first();
		$this->layout->cart = Session::get('cart_session');
		return $data;
	}

}
