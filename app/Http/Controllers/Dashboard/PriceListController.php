<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\PriceList;
use Illuminate\Http\Request;

class PriceListController extends Controller
{
    public function index() {

        $packages = PriceList::all();

        return view('dashboard.pages.pricelist.index', ['packages' => $packages]);
    }

    public function create() {
        return view('dashboard.pages.pricelist.create');
    }

    public function store(Request $request) {
        $request->validate([
            'title' => 'required',
            'price' => 'required',
            'description' => 'required'
        ]);

        PriceList::create($request->all());

        return redirect()->route('dashboard.priselist.index')->with('success', 'New offer created successfully!');
    }

    public function edit(PriceList $offer) {
        return view('dashboard.pages.pricelist.edit', ['offer' => $offer]);
    }

    public function update(Request $request, PriceList $offer) {
        $request->validate([
            'title' => 'required',
            'price' => 'required',
            'description' => 'required'
        ]);

        $offer->update($request->all());

        return redirect()->route('dashboard.priselist.index')->with('success', 'Updated successfully!');
    }

    public function destroy(PriceList $service) {

        $service->delete();

        return redirect()->route('dashboard.priselist.index')->with('delete', 'Deleted successfully!');
    }
}
