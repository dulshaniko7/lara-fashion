<?php

namespace App\Http\Controllers;

use App\Category;
use App\Product;
use Illuminate\Http\Request;

class ProductsController extends Controller {
	/**
	 * Display a listing of the resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function index() {
		//
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function create() {
		//
		$categories = Category::all();

		return view('admin.products.create')->with('categories', $categories);
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param \Illuminate\Http\Request $request
	 * @return \Illuminate\Http\Response
	 */
	public function store(Request $request) {
		//
		$this->validate($request, [
				'name' => 'required'
		]);
		$product = new Product();
		$product->name = $request->name;
		$product->description = $request->description;
		$product->size = $request->size;
		$product->price = $request->price;



		if ($request->hasFile('image')) {
			$file = $request->file('image');
			$extention = $file->getClientOriginalExtension();
			$filename = time() . '.' . $extention;
			$file->move('upload/images/', $filename);
			$product->image = $filename;
		} else {
			return $request;
			$product->image = '';
		}

		$category = Category::findOrFail($request->category_id);

		$category->products()->save($product);

		return redirect()->route('products.create');

	}

	/**
	 * Display the specified resource.
	 *
	 * @param int $id
	 * @return \Illuminate\Http\Response
	 */
	public function show($id) {
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param int $id
	 * @return \Illuminate\Http\Response
	 */
	public function edit($id) {
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param \Illuminate\Http\Request $request
	 * @param int $id
	 * @return \Illuminate\Http\Response
	 */
	public function update(Request $request, $id) {
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param int $id
	 * @return \Illuminate\Http\Response
	 */
	public function destroy($id) {
		//
	}
}
