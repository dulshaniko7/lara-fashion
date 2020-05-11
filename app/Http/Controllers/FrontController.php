<?php

namespace App\Http\Controllers;

use App\Category;
use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FrontController extends Controller {
	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */


	/**
	 * Show the application dashboard.
	 *
	 * @return \Illuminate\Contracts\Support\Renderable
	 */

	public function index() {
		return view('front.home');
	}

	public function gents() {

		$products = DB::table('products')->where('category_id', 5)->get();

		return view('front.gents')->with('products', $products);
	}

	public function ladies(){

		$products = DB::table('products')->where('category_id',1)->get();
		return view('front.ladies')->with('products',$products);
	}

	public function item($id) {


		$product = Product::findOrFail($id);

		return view('front.show')->with('product', $product);
	}
}
