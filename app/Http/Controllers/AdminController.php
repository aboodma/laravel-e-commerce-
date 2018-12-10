<?php

namespace App\Http\Controllers;

use App\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.index');
    }
    public function ProductAdd()
    {
      $Main_Categories=DB::table('categories')->get();
      $Sub_Categories=DB::table('sub__categories')->get();
      $data=['MainCategories'=>$Main_Categories,'SubCategories'=>$Sub_Categories];
      return view('admin.Product.Add')->with('data',$data);
    }
    public function Product()
    {
      $products=DB::table('products')->get();
      return view('admin.Product.index')->with('products',$products);
    }
    public function CategoryAdd()
    {
      return view('admin.Category.Add');
    }
    public function CategorySubAdd()
    {
      $Main_Categories=DB::table('categories')->get();

      return view('admin.Category.SubAdd')->with('data',$Main_Categories);

    }
    public function Categoies()
    {
      $categories=DB::table('categories')->get();

      return view('admin.Category.index')->with('categories',$categories);

    }
    public function SizeAdd()
    {
      $products=DB::table('products')->get();

      return view('admin.Sizes.Add')->with('products',$products);

    }
    public function Sizes()
    {
      return view('admin.Sizes.index');

    }
    public function ShippingAdd()
    {
      return view('admin.Shipping.Add');

    }
    public function Shipping()
    {
      $shipping=DB::table('shipping_companies')->get();
      return view('admin.Shipping.index')->with('shipping',$shipping);

    }
    public function BannersAdd()
    {
      // code...
    }
    public function Banners()
    {
      // code...
    }
    public function Sliders()
    {
      // code...
    }
    public function SlidersAdd()
    {
      $Sub_Categories=DB::table('sub__categories')->get();


      return view('admin.Home.SliderAdd')->with('categories',$Sub_Categories);
    }
    public function imagesave(Request $request)
    {
        $time = Carbon::now();
        $image = $request->file('file');
        $extension = $image->getClientOriginalExtension();
         $directory = date_format($time, 'Y') . '/' . date_format($time, 'm');
         $filename = str_random(5).date_format($time,'d').rand(1,9).date_format($time,'h').".".$extension;
          $upload_success = $image->storeAs($directory, $filename, 'uploads');
          if ($upload_success) {
      return response()->json($upload_success, 200);
  }
  // Else, return error 400
  else {
      return response()->json('error', 400);
  }
    }
    public function createSlider(Request $request)
    {
      $link=$request->link;
      $file=$request->attached_files;
      if ($link || $file == null) {
      echo "0";
    }else {


      $insert=  DB::table('homepage_sliders')->insert([
          'content'=>$file,
          'link'=>$link
        ]);
    }

    }
    public function ProductCreate(Request $request)
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
     * @param  \App\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function show(Admin $admin)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function edit(Admin $admin)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Admin $admin)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function destroy(Admin $admin)
    {
        //
    }
}
