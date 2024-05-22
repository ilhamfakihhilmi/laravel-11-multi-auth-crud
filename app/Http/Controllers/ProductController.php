<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::orderBy('id', 'desc')->get();
        $total = Product::count();
        return view("admin.product.home", compact(['products', 'total']));
    }

    public function dashboard()
    {
        $products = Product::orderBy('id', 'desc')->get();
        $total = Product::count();
        return view("dashboard", compact(['products', 'total']));
    }

    public function create()
    {
        return view('admin.product.create');
    }

    public function save(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'category' => 'required',
            'price' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $imageName = time() . '.' . $request->image->extension();
        $request->image->move(public_path('images'), $imageName);

        $product = new Product();
        $product->title = $request->title;
        $product->category = $request->category;
        $product->price = $request->price;
        $product->image = 'images/' . $imageName;
        $product->save();

        if ($product) {
            session()->flash('success', 'Product Added Successfully');
            return redirect(route('admin/products'));
        } else {
            session()->flash('error', 'Some Problem Occurred');
            return redirect(route('admin/products/create'));
        }
    }



    public function edit($id)
    {
        $products = Product::findOrFail($id);
        return view('admin.product.update', compact('products'));
    }

    public function delete($id)
    {
        $products = Product::findOrFail($id)->delete();
        if ($products) {
            session()->flash('success', 'Product Delete Successfully');
            return redirect(route('admin/products'));
        } else {
            session()->flash('error', 'Product Not Delete Successfully');
            return redirect(route('admin/products'));
        }
    }

//     public function update(Request $request, $id)
//     {
//         $request->validate([
//             'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
//         ]);
//         $products = Product::findOrFail($id);
//         $title = $request->title;
//         $category = $request->category;
//         $price = $request->price;
//         $image = $request->image;

//         $products->title = $title;
//         $products->category = $category;
//         $products->price = $price;
//         $products->image = '/products' . $image;

//         $data = $products->save();
//         if ($data) {
//             session()->flash('success', 'Product Update Successfully');
//             return redirect(route('admin/products'));
//         } else {
//             session()->flash('error', 'Some problem occure');
//             return redirect(route('admin/products/update'));
//         }
//     }
// }

    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required',
            'category' => 'required',
            'price' => 'required',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $product = Product::findOrFail($id);
        $product->title = $request->title;
        $product->category = $request->category;
        $product->price = $request->price;

        if ($request->hasFile('image')) {
            $imageName = time() . '.' . $request->image->extension();
            $request->image->move(public_path('images'), $imageName);
            $product->image = 'images/' . $imageName;
        }

        $data = $product->save();

        if ($data) {
            session()->flash('success', 'Product Updated Successfully');
            return redirect(route('admin/products'));
        } else {
            session()->flash('error', 'Some problem occurred');
            return redirect(route('admin/products/edit', ['id' => $id]));
        }
    }
}
