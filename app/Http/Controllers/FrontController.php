<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;
use App\Models\CartN;
use App\Http\Controllers\Controller;

class FrontController extends Controller
{
    public function __construct(Request $request){
		$this->cart = new CartN();
    }

    // view one category
    public function category($slug)
    {
        $categorylist = Category::all();
        $category="";
        foreach($categorylist as $cat){
            if($cat->slug==$slug){
                $category=$cat;
            }
        }
        $productlist = Product::where('category_id', '=', $category->id)->paginate(4);

        $breadlist=array();
        $breadlist[0]=array("Home","home",null,"0");
        $breadlist[1]=array($category->name,"category",null,"1");

        $data=array();
        $data['breadlist']=$breadlist;
        $data['categorylist']=$categorylist;
        $data['cat']=$category;
        $data['productlist']=$productlist;
        $data['cartcount']=$this->cart->count();
        $data['sidebar']="shop";

        return view('front.category')->with($data);
    }

    function category_pagination(Request $request)
    {
     if($request->ajax())
     {
        $data = array();
        $data['productlist'] = Product::where('category_id', '=', '1')->paginate(4);
        return view('front.category_pagination')->with($data)->render();
     }
    }

    // view index
    public function index()
    {
        $categorylist = Category::all();
        $productlist = Product::orderBy('id', 'desc')->take(4)->get();

        $data=array();
        $data['categorylist']=$categorylist;
        $data['productlist']=$productlist;
        $data['cartcount']=$this->cart->count();
        $data['fullwidth']=true;

        return view('front.index')->with($data);
    }

    // view shop
    public function shop()
    {
        $categorylist = Category::all();

        $breadlist=array();
        $breadlist[0]=array("Home","home",null,"0");
        $breadlist[1]=array("Shop","shop",null,"1");

        $productlist = Product::orderBy('id', 'desc')->take(10)->get();

        $data=array();
        $data['breadlist']=$breadlist;
        $data['categorylist']=$categorylist;
        $data['productlist']=$productlist;
        $data['cartcount']=$this->cart->count();
        $data['sidebar']="shop";

        return view('front.shop')->with($data);
    }

    // view one product
    public function product($slug)
    {
        $categorylist = Category::all();
        $product = Product::where('slug', '=', $slug)->firstOrFail();

        $category = "";
        foreach($categorylist as $cat){
            if($cat->id==$product->category_id){
                $category=$cat;
            }
        }

        $breadlist=array();
        $breadlist[0]=array("Home","home",null,"0");
        $breadlist[1]=array($category->name,"category",["slug" => $category->slug],"0");
        $breadlist[2]=array("Product Item","product",null,"1");

        $data=array();
        $data['breadlist']=$breadlist;
        $data['categorylist']=$categorylist;
        $data['cat']=$category;
        $data['product']=$product;
        $data['cartcount']=$this->cart->count();
        $data['fullwidth']=true;
        
        return view('front.product')->with($data);
    }

    // view about
    public function about()
    {
        $breadlist=array();
        $breadlist[0]=array("Home","home",null,"0");
        $breadlist[1]=array("About us","about",null,"1");

        $data=array();
        $data['breadlist']=$breadlist;
        $data['fullwidth']=true;
        $data['cartcount']=$this->cart->count();

        return view('front.about')->with($data);
    }

    // view faq
    public function faq()
    {
        $breadlist=array();
        $breadlist[0]=array("Home","home",null,"0");
        $breadlist[1]=array("Faq","faq",null,"1");

        $data=array();
        $data['breadlist']=$breadlist;
        $data['fullwidth']=true;
        $data['cartcount']=$this->cart->count();

        return view('front.faq')->with($data);
    }

    // view faq
    public function contact()
    {
        $breadlist=array();
        $breadlist[0]=array("Home","home",null,"0");
        $breadlist[1]=array("Contact Us","contact",null,"1");

        $data=array();
        $data['breadlist']=$breadlist;
        $data['fullwidth']=true;
        $data['cartcount']=$this->cart->count();

        return view('front.contact')->with($data);
    }
}