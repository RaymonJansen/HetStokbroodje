<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\ContactDetails;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    public function index()
    {
        $view = view('admin.home');

        $view->products = Product::all();
        $view->prod_2 = DB::table('products')->simplePaginate(15);
        $view->categories = Category::all();
        $view->categories = Category::all();
        $view->address = ContactDetails::all()->first();

        return $view;
    }
}
