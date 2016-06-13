<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Purchase;

class PurchaseController extends Controller
{
    public function index(){
		$purchase=Purchase::all();
		//dd($purchase);
   		return view("purchase.index",compact("purchase"));
	}
}
