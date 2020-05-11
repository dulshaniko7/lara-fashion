<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    //

	protected $fillable = ['qty','total'];

	public function user(){
		return $this->belongsTo(User::class);
	}

	public function products(){
		return $this->belongsToMany(Product::class)->withPivot('qty','total');
	}


}
