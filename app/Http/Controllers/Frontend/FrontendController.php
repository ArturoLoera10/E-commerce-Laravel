<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\Category;
use App\Models\Rating;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index()
    {
        $featured_products = Product::where('trending', '1')->take(15)->get();
        $trending_category = Category::where('popular', '1')->take(15)->get();
        return view('frontend.index', compact('featured_products', 'trending_category'));
    }

    public function category()
    {
        $category = Category::where('status', '0')->get();
        return view('frontend.category', compact('category'));
    }

    public function viewcategory($slug)
    {
        if(Category::where('slug', $slug)->exists())
        {
            $category = Category::where('slug', $slug)->first();
            $products = Product::where('cate_id', $category->id)->where('status', '0')->get();
            return view('frontend.products.index', compact('category', 'products'));
        }else{
            return redirect('/')->with('status',"Slug doesnot exists");
        }
    }

    public function viewproduct($slug)
    {
        if(Product::where('slug', $slug)->exists())
        {
            $products = Product::where('slug', $slug)->first();
            return view('frontend.products.view', compact('products'));
        }
        else{
            return redirect('/')->with('status', "The link was broken");
        }
    }

    public function productview($cate_slug, $prod_slug)
    {
        if(Category::where('slug', $cate_slug)->exists())
        {
            if(Product::where('slug', $prod_slug)->exists())
            {
                $products = Product::where('slug', $prod_slug)->first();
                $val = Rating::where('prod_id', $products->id)->get();
                return view('frontend.products.view', compact('products', 'val'));
            }
            else{
                return redirect('/')->with('status', "The link was broken");
            }
        }
        else{
            return redirect('/')->with('status', "No such category found");
        }
    }
}
