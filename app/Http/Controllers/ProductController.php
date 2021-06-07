<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Symfony\Component\Console\Input\Input;
use Symfony\Component\HttpFoundation\Session\Session;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        $view = view('products.create');

        $view->categories = Category::all();

        return $view;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'description' => 'required',
            'price' => 'required',
            'category'=>'required'
        ]);

        $product = new Product();

        $product->name = $request->name;
        $product->caption = $request->caption;
        $product->description = $request->description;
        $product->price = $request->price;
        $product->image_path = "";
        $product->category_id = $request->category;

        $product->save();

        return redirect('admin/home');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        $view = view('products.edit');

        $view->product = Product::findOrFail($id);

        $view->categories = Category::pluck('name', 'id');
        $view->categories = $view->categories->toArray();

        return $view;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param int $id
     * @param Request $request
     * @throws \Illuminate\Validation\ValidationException
     */
    public function update($id, Request $request)
    {
        $product = Product::findOrFail($id);

        $this->validate($request, [
            'name' => 'required',
            'description' => 'required',
            'price' => 'required',
            'category_id' => 'required'
        ]);

        $product->name = $request->name;
        $product->caption = ($request->caption) ? $request->caption : "";
        $product->description = $request->description;
        $product->price = $request->price;
        $product->image_path = "";
        $product->category_id = $request->category_id;

        $product->save();

        return redirect('admin/home');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        $product = Product::findOrFail($id);

        $product->delete();

        return redirect('admin/home');
    }
}
