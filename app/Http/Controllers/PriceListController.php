<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Header;

class PriceListController extends Controller
{
  public function index() {
    $header = Header::find(1);
    return view('pages.pricelist', compact('header'));
  }
}
