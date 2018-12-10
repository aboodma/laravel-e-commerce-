<?php

namespace App\Http\Controllers;

use App\Sub_Category;
use Illuminate\Http\Request;
use App\Product;
use App\ProductImages;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class SubCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

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
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Sub_Category  $sub_Category
     * @return \Illuminate\Http\Response
     */
    public function show(Sub_Category $sub_Category)
    {
        return $sub_Category;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Sub_Category  $sub_Category
     * @return \Illuminate\Http\Response
     */
    public function edit(Sub_Category $sub_Category)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Sub_Category  $sub_Category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Sub_Category $sub_Category)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Sub_Category  $sub_Category
     * @return \Illuminate\Http\Response
     */
    public function destroy(Sub_Category $sub_Category)
    {
        //
    }
    public function single( $sub_Category)
    {
      $settings=DB::table('settings')->get();

      $menus=DB::table('categories')->get();
      $submenus=DB::table('sub__categories')->get();
$categories=['menus'=>$menus,'submenu'=>$submenus];
      $sessionLang=Session::get('lang');

      switch ($sessionLang) {
        case 'en':
        $data=DB::table('products')
        ->join('product_images','products.id','product_images.product_id')
        ->where('sub_category_id',$sub_Category)
        ->select(
        'products.id','products.product_name_ar', 'products.product_slug_ar', 'products.product_name_en','products.product_slug_en','products.product_name_gr','products.product_info_en',
        'products.product_slug_gr','products.price_dolar','products.price_euro','products.price_kron','products.sold_price_dolar','products.sold_price_euro','products.sold_price_kron','products.sub_category_id',
        'product_images.id','product_images.path','product_images.product_id')
        ->groupBy('product_images.product_id')
        ->get();
        $pag=DB::table('products')
        ->join('product_images','products.id','product_images.product_id')
        ->where('sub_category_id',$sub_Category)
        ->select(
        'products.id','products.product_name_ar', 'products.product_slug_ar', 'products.product_name_en','products.product_slug_en','products.product_name_gr','products.product_info_en','products.product_info_gr','products.product_info_ar',
        'products.product_slug_gr','products.price_dolar','products.price_euro','products.price_kron','products.sold_price_dolar','products.sold_price_euro','products.sold_price_kron','products.sub_category_id',
        'product_images.id','product_images.path','product_images.product_id')
        ->groupBy('product_images.product_id')
        ->paginate(3);
        $PageData=['data'=>$data,'categories'=>$categories,'pagination'=>$pag,'settings'=>$settings];
        return view('Category.Category')->with('PageData',$PageData);
          break;

          case 'du':
          $data=DB::table('products')
          ->join('product_images','products.id','product_images.product_id')
          ->where('sub_category_id',$sub_Category)
          ->select(
          'products.id','products.product_name_ar', 'products.product_slug_ar', 'products.product_name_en','products.product_slug_en','products.product_name_gr','products.product_info_en','products.product_info_gr','products.product_info_ar',
          'products.product_slug_gr','products.price_dolar','products.price_euro','products.price_kron','products.sold_price_dolar','products.sold_price_euro','products.sold_price_kron','products.sub_category_id',
          'product_images.id','product_images.path','product_images.product_id')
          ->groupBy('product_images.product_id')
          ->get();
          $pag=DB::table('products')
          ->join('product_images','products.id','product_images.product_id')
          ->where('sub_category_id',$sub_Category)
          ->select(
          'products.id','products.product_name_ar', 'products.product_slug_ar', 'products.product_name_en','products.product_slug_en','products.product_name_gr','products.product_info_en','products.product_info_gr','products.product_info_ar',
          'products.product_slug_gr','products.price_dolar','products.price_euro','products.price_kron','products.sold_price_dolar','products.sold_price_euro','products.sold_price_kron','products.sub_category_id',
          'product_images.id','product_images.path','product_images.product_id')
          ->groupBy('product_images.product_id')
          ->paginate(3);
          $PageData=['data'=>$data,'categories'=>$categories,'pagination'=>$pag,'settings'=>$settings];
          return view('Category.Category_du')->with('PageData',$PageData);
            break;

            case 'ar':
            $data=DB::table('products')
            ->join('product_images','products.id','product_images.product_id')
            ->where('sub_category_id',$sub_Category)
            ->select(
            'products.id','products.product_name_ar', 'products.product_slug_ar', 'products.product_name_en','products.product_slug_en','products.product_name_gr','products.product_info_en','products.product_info_gr','products.product_info_ar',
            'products.product_slug_gr','products.price_dolar','products.price_euro','products.price_kron','products.sold_price_dolar','products.sold_price_euro','products.sold_price_kron','products.sub_category_id',
            'product_images.id','product_images.path','product_images.product_id')
            ->groupBy('product_images.product_id')
            ->get();
            $pag=DB::table('products')
            ->join('product_images','products.id','product_images.product_id')
            ->where('sub_category_id',$sub_Category)
            ->select(
            'products.id','products.product_name_ar', 'products.product_slug_ar', 'products.product_name_en','products.product_slug_en','products.product_name_gr','products.product_info_en','products.product_info_gr','products.product_info_ar',
            'products.product_slug_gr','products.price_dolar','products.price_euro','products.price_kron','products.sold_price_dolar','products.sold_price_euro','products.sold_price_kron','products.sub_category_id',
            'product_images.id','product_images.path','product_images.product_id')
            ->groupBy('product_images.product_id')
            ->paginate(5);
            $PageData=['data'=>$data,'categories'=>$categories,'pagination'=>$pag,'settings'=>$settings];

            return view('Category.Category_ar')->with('PageData',$PageData);
              break;

        default:
        $data=DB::table('products')
        ->join('product_images','products.id','product_images.product_id')
        ->where('sub_category_id',$sub_Category)
        ->select(
        'products.id','products.product_name_ar', 'products.product_slug_ar', 'products.product_name_en','products.product_slug_en','products.product_name_gr','products.product_info_en','products.product_info_gr','products.product_info_ar',
        'products.product_slug_gr','products.price_dolar','products.price_euro','products.price_kron','products.sold_price_dolar','products.sold_price_euro','products.sold_price_kron','products.sub_category_id',
        'product_images.id','product_images.path','product_images.product_id')
        ->groupBy('product_images.product_id')
        ->get();
        $pag=DB::table('products')
        ->join('product_images','products.id','product_images.product_id')
        ->where('sub_category_id',$sub_Category)
        ->select(
        'products.id','products.product_name_ar', 'products.product_slug_ar', 'products.product_name_en','products.product_slug_en','products.product_name_gr','products.product_info_en','products.product_info_gr','products.product_info_ar',
        'products.product_slug_gr','products.price_dolar','products.price_euro','products.price_kron','products.sold_price_dolar','products.sold_price_euro','products.sold_price_kron','products.sub_category_id',
        'product_images.id','product_images.path','product_images.product_id')
        ->groupBy('product_images.product_id')
        ->paginate(3);
        $PageData=['data'=>$data,'categories'=>$categories,'pagination'=>$pag,'settings'=>$settings];

        return view('Category.Category')->with('PageData',$PageData);
          break;
      }

      // $products=Product::where('sub_category_id',$sub_Category)->get();
      // $images=ProductImages::where('product_id',$products['id'])->get();

    }
}
