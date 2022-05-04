<?php

namespace App\Http\Controllers;

use App\Models\WishList;
use Illuminate\Http\Request;

class WishListController extends Controller
{
    public function index()
    {
        $wishlists=WishList::paginate(9);
        return view('pages.WishList', compact('wishlists'));
    }

    public function store(Request $request)
    {
        WishList::create([
        'item'=> $request->get('item'),
        'price'=>$request->get('price')
       ]);
        return redirect()->back()->with('status', 'Successfully Added');
    }
}
