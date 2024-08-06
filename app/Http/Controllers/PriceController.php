<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Header;
use App\Models\PriceList;

class PriceController extends Controller
{
  public function index() {
    $header = Header::find(1);
    
    $priceList = PriceList::all();

    return view('pages.pricelist', compact('header', 'priceList'));
  }
}
