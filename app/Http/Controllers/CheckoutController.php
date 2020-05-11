<?php

namespace App\Http\Controllers;

use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CheckoutController extends Controller {
	//
	public function step1() {
		if (Auth::check()) {
			return view('front.checkout');
		} else {
			return view('auth.login');
		}
	}

	public function step2() {

		$user = Auth::user();
		$order = $user->orders()->create([
				'total' => Cart::total(),
				'isDelivered' => 0

		]);
		$cartItems = Cart::content();
		foreach ($cartItems as $cartItem) {
			$order->products()->attach($cartItem->id,[
					'qty'=>$cartItem->qty,
				'total'=>$cartItem->price
			]);
		}

		return "Order Completed";
	}


}
