<?php

namespace App\Http\Controllers;

use App\Models\SaveIncome;
use Illuminate\Http\Request;

class SaveIncomeController extends Controller
{
    public function index()
    {
        return view('pages.SaveIncome');
    }

    public function insert(Request $request)
    {
        SaveIncome::create([
        'income'=> $request->get('income')
       ]);
        return redirect()->back()->with('status', 'Successfully Added');
    }
}
