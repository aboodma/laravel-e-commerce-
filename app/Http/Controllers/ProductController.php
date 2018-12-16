<?php

namespace App\Http\Controllers;

use App\Product;
use App\Size;
use App\ProductImages;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        return $request;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {



        //        $productData = DB::table('products')->get();
        //      $productData = DB::table('products')->where('product_id', '1');

        //return $productData;
        return $product;



    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        //
    }


    public function single( $product)
    {
      $sessionLang=Session::get('lang');
      $session_currency=Session::get('session_currency');
        switch ($sessionLang) {
          case 'en':
          $productdata=Product::where('product_slug_en',$product)->get();
          $sizes=Size::where('product_id',$productdata[0]['id'])->get();
          $images=ProductImages::where('product_id',$productdata[0]['id'])->get();
          $menus=DB::table('categories')->get();
          $submenus=DB::table('sub__categories')->get();
          $settings=DB::table('settings')->get();

    $categories=['menus'=>$menus,'submenu'=>$submenus];

    $data=['productd'=>$productdata,'sizes'=>$sizes,'images'=>$images,'menus'=>$menus,'submenus'=>$submenus,'settings'=>$settings];

    // return $productdata;
          return view('SingleProduct.single_product')->with('data',$data);
            break;
            case 'ar':
            $productdata=Product::where('product_slug_ar',$product)->get();
            $sizes=Size::where('product_id',$productdata[0]['id'])->get();
            $images=ProductImages::where('product_id',$productdata[0]['id'])->get();
            $menus=DB::table('categories')->get();
            $submenus=DB::table('sub__categories')->get();
            $settings=DB::table('settings')->get();

      $categories=['menus'=>$menus,'submenu'=>$submenus];
      $data=['productd'=>$productdata,'sizes'=>$sizes,'images'=>$images,'menus'=>$menus,'submenus'=>$submenus,'settings'=>$settings];
            return view('SingleProduct.single_product_ar')->with('data',$data);
              break;
              case 'du':
              $productdata=Product::where('product_slug_gr',$product)->get();
              $sizes=Size::where('product_id',$productdata[0]['id'])->get();
              $images=ProductImages::where('product_id',$productdata[0]['id'])->get();
              $menus=DB::table('categories')->get();
              $submenus=DB::table('sub__categories')->get();
              $settings=DB::table('settings')->get();

        $categories=['menus'=>$menus,'submenu'=>$submenus];
        $data=['productd'=>$productdata,'sizes'=>$sizes,'images'=>$images,'menus'=>$menus,'submenus'=>$submenus,'settings'=>$settings];
              return view('SingleProduct.single_product_du')->with('data',$data);
                break;

          default:
          $productdata=Product::where('product_slug_en',$product)->get();
          $sizes=Size::where('product_id',$productdata[0]['id'])->get();
          $images=ProductImages::where('product_id',$productdata[0]['id'])->get();
          $menus=DB::table('categories')->get();
          $submenus=DB::table('sub__categories')->get();
          $settings=DB::table('settings')->get();

    $categories=['menus'=>$menus,'submenu'=>$submenus];
    $data=['productd'=>$productdata,'sizes'=>$sizes,'images'=>$images,'menus'=>$menus,'submenus'=>$submenus,'settings'=>$settings];
    // return $productdata;

          return view('SingleProduct.single_product')->with('data',$data);
            break;
        }



    }
}
