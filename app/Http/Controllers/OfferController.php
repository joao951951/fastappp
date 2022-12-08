<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Offer;

class OfferController extends Controller
{
    public function index(){
        $offers = Offer::all();
        return view('dashboard', compact(['offers']));
    }

    public function add(){
        return view('offer.register');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'descri' => 'required',
            'value' => 'required',
        ]);
        
        Offer::create($request->post());

        return redirect()->route('dashboard');
    }

    public function destroy(Offer $offer){
        $offer->delete();
        return redirect()->route('dashboard');
    }
}
