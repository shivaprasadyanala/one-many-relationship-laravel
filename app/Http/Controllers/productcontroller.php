<?php

namespace App\Http\Controllers;

use App\Models\category;
use App\Models\product;
use Illuminate\Http\Request;

class productcontroller extends Controller
{
    public function form()
    {
        $category = category::all();
        return view('addproducts', compact('category'));
    }
    public function getproducts()
    {
        $products = product::all();
        $category = category::all();
        return view('products', compact('products', 'category'));
    }
    public function getcatprod($id)
    {
        $category = category::find($id);
        $products = $category->product()->get();
        // dd($products);
        return view('catproducts', compact('products'));
    }
    public function addproduct(Request $request)
    {
        $data = $request->input();
        $c_id = $data['c_id'];
        $category = category::find($c_id);
        $product = new product();
        $product->name = $data['pname'];
        $product->price = $data['price'];
        $product->c_id = $category->id;
        $category->product()->save($product);
        return redirect('products')->with('status', "insert succesfully");
    }
    public function addcategory(Request $request)
    {
        $data = $request->input();
        $category = new category();
        $category->name = $data['cname'];
        $category->save();
        return redirect('products')->with('status', "insert succesfully");
    }
    public function deleteproduct($id)
    {
        $product = product::find($id);
        $product->delete();
        return redirect('products')->with('status', "delete succesfully");
    }
    public function deletecategory($id)
    {
        $category = category::find($id);
        $category->delete();
        return redirect('products')->with('status', "delete succesfully");
    }
    public function editproduct($id)
    {
        $product = product::find($id);
        return view('editproduct', compact('product'));
    }
    public function updateproduct(Request $request, $id)
    {
        $data = $request->input();
        $product = product::find($id);
        $product->name = $data['pname'];
        $product->price = $data['price'];
        $product->save();
        return redirect('products')->with('status', 'delete successfully');
    }
    public function editcategory($id)
    {
        $category = category::find($id);
        return view('editcategory', compact('category'));
    }
    public function updatecategory(Request $request, $id)
    {
        $data = $request->input();
        $category = category::find($id);
        $category->name = $data['cname'];
        $category->save();
        return redirect('products')->with('status', 'delete successfully');
    }
}
