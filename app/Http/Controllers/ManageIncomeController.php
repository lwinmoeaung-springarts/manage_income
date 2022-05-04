<?php

namespace App\Http\Controllers;

use App\Models\WishList;
use App\Models\SaveIncome;
use App\Models\ManageIncome;
use Illuminate\Http\Request;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\DB;

class ManageIncomeController extends Controller
{
    public function index()
    {
        // $permulation=DB::table(('wishes')->crossJoin('colors')
        $result=array();
        $items=array();
        $final_items=array();
        $max_amount=0;
        $temp=array();
        $collections=new Collection();
        $collectionsOne=new Collection();
        $m_wishlists=WishList::all();
        $m_incomes=SaveIncome::all();

        foreach ($m_incomes as $m_income) {
            foreach ($m_wishlists as $m_wishlist) {
                $monthName = $m_income->created_at->format('M');
                if ($m_income->income>=$m_wishlist->price) {
                    $max_amount=$m_income->income;
                    $items[$monthName][$m_wishlist->item]=$m_wishlist->price;
                    $collections=collect($items);
                    // dd($items);


                    // $collections=$collections->map(function ($item, $value) {
                    //     return (collect($item)->crossJoin(collect($item)));
                    // });
                }
            }
            foreach ($collections as $key=>$value) {
                $final_items[$key]=collect($value)->crossJoin(collect($value));
            }
            // $input = json_decode('{"1":["Medium", "Large"],"2":["White", "Blue"]}', true);
            dd(collect($final_items));
            // convert both parts of array to collections,
            // crossJoin all the combinations and
            // join the combinations in strings
        }
        // dd($collections);
        $manageincomes=ManageIncome::paginate(9);
        return view('pages.ManageIncome', compact('manageincomes'));
    }
}
