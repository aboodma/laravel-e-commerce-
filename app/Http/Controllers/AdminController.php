<?php

namespace App\Http\Controllers;

use App\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use Illuminate\Support\Facades\Session;


class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

     public function login()
     {
       return view('admin.login');
     }
     public function logg(Request $request)
     {
       $user=DB::table('users')->where(['email'=>$request->email,'password'=>$request->password])->get();
       SESSION::put('is_login','1');
       echo "1";

     }
    public function index()
    {

        return view('admin.index');
    }

    public function Settings()
    {
          $settings = DB::table('settings')->get();
          return view('admin.settings')->with('data',$settings);
    }
    public function updateS(Request $request)
    {
      $site_name_en=$request->site_name_en;
       $site_name_gr=$request->site_name_gr;
        $site_name_ar=$request->site_name_ar;
         $logo=$request->logo;
          $keywords_ar=$request->keywords_ar;
           $keywords_gr=$request->keywords_gr;
            $keywords_en=$request->keywords_en;
             $description_ar=$request->description_ar;
              $description_gr=$request->description_gr;
               $description_en=$request->description_en;
                $adress_ar=$request->adress_ar;
                 $adress_gr=$request->adress_gr;
                  $adress_en=$request->adress_en;
                   $mail=$request->mail;
                    $phone=$request->phone;
                     $facebook=$request->facebook;
                      $instagram=$request->instagram;
      $update=DB::table('settings')->update([
      'site_name_en'=>$site_name_en,
       'site_name_gr'=>$site_name_gr,
        'site_name_ar'=>$site_name_ar,
          'keywords_ar'=>$keywords_ar,
           'keywords_gr'=>$keywords_gr,
            'keywords_en'=>$keywords_en,
             'description_ar'=>$description_ar,
              'description_gr'=>$description_gr,
               'description_en'=>$description_en,
                'adress_ar'=>$adress_ar,
                 'adress_gr'=>$adress_gr,
                  'adress_en'=>$adress_en,
                   'mail'=>$mail,
                    'phone'=>$phone,
                     'facebook'=>$facebook,
                      'instagram'=>$instagram,



      ]);
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
    public function subCat()
    {
      $categories=DB::table('categories')->get();
      $sub_cate=DB::table('sub__categories')->get();

      $data=['categories'=>$categories,'subs'=>$sub_cate];
      return view('admin.Category.indexsub')->with('data',$data);
      // return $categories;

    }
    public function subCategoryEdit($id)
    {
      $data=DB::table('sub__categories')->where('id',$id)->get();
      return view('admin.Category.Editsub')->with('data',$data);
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
    public function shipAdd(Request $request)
    {
      $namr_ar=$request->name_ar;
      $namr=$request->name;
      $namr_gr=$request->name_gr;
      $price_dolar=$request->price_dolar;
      $price_euro=$request->price_euro;
      $price_kron=$request->price_kron;

      $ship=DB::table('shipping_companies')->insert([
        'name_ar'=>$namr_ar,
        'name_gr'=>$namr_gr,
        'name'=>$namr,
        'price_euro'=>$price_euro,
        'price_dolar'=>$price_dolar,
        'price_kron'=>$price_kron,
        'code'=>'0',
      ]);
    }
    public function Shipping()
    {
      $shipping=DB::table('shipping_companies')->get();
      return view('admin.Shipping.index')->with('shipping',$shipping);

    }
    public function ShippingEdit($id)
    {

      $shipping=DB::table('shipping_companies')->where('id',$id)->get();
      return view('admin.Shipping.Edit')->with('data',$shipping);

    }
    public function shipupdate(Request $request)
    {

      $id=$request->id;
      $namr_ar=$request->name_ar;
      $namr=$request->name;
      $namr_gr=$request->name_gr;
      $price_dolar=$request->price_dolar;
      $price_euro=$request->price_euro;
      $price_kron=$request->price_kron;
      DB::table('shipping_companies')->where('id',$id)->update([
        'name_ar'=>$namr_ar,
        'name_gr'=>$namr_gr,
        'name'=>$namr,
        'price_euro'=>$price_euro,
        'price_dolar'=>$price_dolar,
        'price_kron'=>$price_kron
      ]);
    }
    public function BannersAdd()
    {

    }
    public function Banners()
    {

    }
    public function orders()
    {
      $order = DB::table('orders')
      ->join('customers','orders.customer_id','customers.id')
      ->join('shipping_companies','orders.shiping_id','shipping_companies.id')
      ->join('payment_types','orders.payment_id','payment_types.id')
      ->select( 'orders.id', 'orders.customer_id', 'orders.shiping_id', 'orders.payment_id', 'orders.coupon_id',
      'orders.is_paied', 'orders.is_complete', 'orders.is_delete', 'orders.is_canceled', 'orders.note',
         'payment_types.id as payid','payment_types.name as payname', 'payment_types.code as paycode',
              'customers.id as custid', 'customers.name as custname', 'customers.lname as custlname',
              'shipping_companies.id as shid', 'shipping_companies.name as shname', 'shipping_companies.code as shcode', 'shipping_companies.price_dolar', 'shipping_companies.price_euro',
               'shipping_companies.price_kron', 'shipping_companies.name_ar', 'shipping_companies.name_gr' )->get();
               return view('admin.Order.index')->with('data',$order);

    }
    public function orderCancel($id)
    {
      $status = DB::table('orders')->where('id',$id)->update(['is_canceled'=>'1']);
    }
    public function ordercomplete($id)
    {
      $status = DB::table('orders')->where('id',$id)->update(['is_complete'=>'1']);
    }
    public function orderdelete($id)
    {
      $status = DB::table('orders')->where('id',$id)->update(['is_delete'=>'1']);
    }
    public function Sliders()
    {
      $sliders=DB::table('homepage_sliders')->get();
      return view('admin.Home.slider')->with('sliders',$sliders);
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
          $insert=DB::table('homepage_sliders')->insert([
            'content'=>'assets/images/'.$directory.'/'.$filename,
            'link'=>'nolink']);
            $id = DB::getPdo()->lastInsertId();
              return $id;
    // return response()->json($upload_success, 200);
}
// Else, return error 400
else {
    return response()->json('error', 400);
}
    }

    public function productImage(Request $request)
    {
        $time = Carbon::now();
        $image = $request->file('file');
        $extension = $image->getClientOriginalExtension();
         $directory = date_format($time, 'Y') . '/' . date_format($time, 'm');
         $filename = str_random(5).date_format($time,'d').rand(1,9).date_format($time,'h').".".$extension;
          $upload_success = $image->storeAs($directory, $filename, 'uploads');
          if ($upload_success) {
            $insert=DB::table('product_images')->insert([
              'path'=>'assets/images/'.$directory.'/'.$filename,
              'product_id'=>$request->product_id
            ]);
      return response()->json($upload_success, 200);
  }
  // Else, return error 400
  else {
      return response()->json('error', 400);
  }
    }

    public function categoryinsert(Request $request)
    {
      $nameAr=$request->name_ar;
      $nameGr=$request->name_gr;
      $nameEn=$request->name_en;
      $infoAr=$request->info_ar;
      $infoGr=$request->info_gr;
      $infoEn=$request->info_en;
      $slugAr=str_replace(' ', '_', $nameAr);
      $slugEn=str_replace(' ', '_', $nameEn);
      $slugGr=str_replace(' ', '_', $nameGr);
      DB::table('categories')->insert([
        'name_ar'=>$nameAr,
        'name_en'=>$nameEn,
        'name_gr'=>$nameGr,
        'slug_ar'=>$slugAr,
        'slug_en'=>$slugEn,
        'slug_gr'=>$slugGr,
        'info_ar'=>$infoAr,
        'info_en'=>$infoEn,
        'info_gr'=>$infoGr,
        'path'=>"no Path"
      ]);
      $id = DB::getPdo()->lastInsertId();
      return $id;
    }
    public function categoryImage(Request $request)
    {
      $id=$request->categoryid;
        $time = Carbon::now();
        $image = $request->file('file');
        $extension = $image->getClientOriginalExtension();
         $directory = date_format($time, 'Y') . '/' . date_format($time, 'm');
         $filename = str_random(5).date_format($time,'d').rand(1,9).date_format($time,'h').".".$extension;
          $upload_success = $image->storeAs($directory, $filename, 'uploads');
          if ($upload_success) {
            $insert=DB::table('categories')->where('id',$id)->update(['path'=>'assets/images/'.$directory.'/'.$filename]);
      return response()->json($upload_success, 200);
  }
  // Else, return error 400
  else {
      return response()->json('error', 400);
  }
    }
    public function productSizes(Request $request)
    {
      $sizeN = $request->sizename;
      $sizeC = $request->sizecount;
      $id= $request->product_ids;
      $sizes=['sizename'=>$sizeN,'sizecount'=>$sizeC];
      foreach (array_combine($sizeC, $sizeN) as $count => $name) {
        DB::table('sizes')->insert(['size_name'=>$name,'count'=>$count,'product_id'=>$id]);
      }

    }
    public function createSlider(Request $request)
    {
      $id = $request->id;
      $link=$request->link;
    $update=DB::table('homepage_sliders')->where('id',$id)->update(['link'=>$link]);







    }
    public function ProductEdit($id)
    {
      $Main_Categories=DB::table('categories')->get();
      $Sub_Categories=DB::table('sub__categories')->get();
      $products=DB::table('products')->where('id',$id)->get();
      $images=DB::table('product_images')->where('product_id',$id)->get();
      $data=['MainCategories'=>$Main_Categories,'SubCategories'=>$Sub_Categories,'products'=>$products,'images'=>$images];
      return view('admin.Product.Edit')->with('data',$data);
    }


    public function ProductCreate(Request $request)
    {
      $nameAr=$request->name_ar;
      $nameEn=$request->name_en;
      $nameDu=$request->name_gr;
      $slugAr=str_replace(' ', '_', $nameAr);
      $slugEn=str_replace(' ', '_', $nameEn);
      $slugDu=str_replace(' ', '_', $nameDu);
      $infoAr=$request->desc_ar;
      $infoEn=$request->desc_en;
      $infoDu=$request->desc_gr;
      $quantity="0";
      $priceDolar=$request->price_dolar;
      $priceEuro=$request->price_euro;
      $priceKron=$request->price_kron;
      $soldDolar=$request->sold_price_dolar;
      $soldEuro=$request->sold_price_euro;
      $soldKron=$request->sold_price_kron;
      $mainCat=$request->category;
      $subCat=$request->subCategory;

      $insert = DB::select("INSERT INTO
        `products` (`id`, `product_name_ar`, `product_slug_ar`, `product_name_en`, `product_slug_en`, `product_name_gr`, `product_slug_gr`,
           `product_info_ar`, `product_info_en`, `product_info_gr`, `quantity`, `price_dolar`, `price_euro`, `price_kron`, `sold_price_dolar`,
            `sold_price_euro`, `sold_price_kron`, `keywords`, `created_at`, `updated_at`, `main_category_id`, `sub_category_id`)
         VALUES (NULL, '$nameAr', '$slugAr', '$nameEn', '$slugEn', '$nameDu', '$slugDu', '$infoAr', '$infoEn', '$infoDu', '$quantity',
       '$priceDolar', '$priceEuro', '$priceKron', '$soldDolar', '$soldEuro', '$soldKron', '', NULL, NULL, '$mainCat', '$subCat')");

      $id = DB::getPdo()->lastInsertId();
      return $id;


    }



    public function subcategoryinsert(Request $request)
    {
      $nameAr=$request->name_ar;
      $nameGr=$request->name_gr;
      $nameEn=$request->name_en;
      $infoAr=$request->info_ar;
      $infoGr=$request->info_gr;
      $infoEn=$request->info_en;
      $slugAr=str_replace(' ', '_', $nameAr);
      $slugEn=str_replace(' ', '_', $nameEn);
      $slugGr=str_replace(' ', '_', $nameGr);
      $select=$request->select;
      DB::table('sub__categories')->insert([
        'name_ar'=>$nameAr,
        'name_en'=>$nameEn,
        'name_gr'=>$nameGr,
        'slug_ar'=>$slugAr,
        'slug_en'=>$slugEn,
        'slug_gr'=>$slugGr,
        'info_ar'=>$infoAr,
        'info_en'=>$infoEn,
        'info_gr'=>$infoGr,
        'category_id'=>$select,
        'path'=>"no Path"
      ]);
      $id = DB::getPdo()->lastInsertId();
      return $id;
    }
    public function subcategoryImage(Request $request)
    {
      $id=$request->categoryid;
        $time = Carbon::now();
        $image = $request->file('file');
        $extension = $image->getClientOriginalExtension();
         $directory = date_format($time, 'Y') . '/' . date_format($time, 'm');
         $filename = str_random(5).date_format($time,'d').rand(1,9).date_format($time,'h').".".$extension;
          $upload_success = $image->storeAs($directory, $filename, 'uploads');
          if ($upload_success) {
            $insert=DB::table('sub__categories')->where('id',$id)->update(['path'=>'assets/images/'.$directory.'/'.$filename]);
      return response()->json($upload_success, 200);
  }
  // Else, return error 400
  else {
      return response()->json('error', 400);
  }
    }


    public function CategoryEdit($id)
    {
      $category = DB::table('categories')->where('id',$id)->get();


      return view('admin.Category.Edit')->with('data',$category);
    }
    public function categoryupdate(Request $request)
    {
      $id=$request->id;
      $nameAr=$request->name_ar;
      $nameGr=$request->name_gr;
      $nameEn=$request->name_en;
      $infoAr=$request->info_ar;
      $infoGr=$request->info_gr;
      $infoEn=$request->info_en;
      $slugAr=str_replace(' ', '_', $nameAr);
      $slugEn=str_replace(' ', '_', $nameEn);
      $slugGr=str_replace(' ', '_', $nameGr);
      DB::table('categories')->where('id',$id)->update([
        'name_ar'=>$nameAr,
        'name_en'=>$nameEn,
        'name_gr'=>$nameGr,
        'slug_ar'=>$slugAr,
        'slug_en'=>$slugEn,
        'slug_gr'=>$slugGr,
        'info_ar'=>$infoAr,
        'info_en'=>$infoEn,
        'info_gr'=>$infoGr,
        'path'=>"no Path"
      ]);
      $id = DB::getPdo()->lastInsertId();
      return $id;
    }
    public function subcategoryupdate(Request $request)
    {
      $id=$request->id;
      $nameAr=$request->name_ar;
      $nameGr=$request->name_gr;
      $nameEn=$request->name_en;
      $infoAr=$request->info_ar;
      $infoGr=$request->info_gr;
      $infoEn=$request->info_en;
      $slugAr=str_replace(' ', '_', $nameAr);
      $slugEn=str_replace(' ', '_', $nameEn);
      $slugGr=str_replace(' ', '_', $nameGr);
      DB::table('sub__categories')->where('id',$id)->update([
        'name_ar'=>$nameAr,
        'name_en'=>$nameEn,
        'name_gr'=>$nameGr,
        'slug_ar'=>$slugAr,
        'slug_en'=>$slugEn,
        'slug_gr'=>$slugGr,
        'info_ar'=>$infoAr,
        'info_en'=>$infoEn,
        'info_gr'=>$infoGr,
        'path'=>"no Path"
      ]);
      $id = DB::getPdo()->lastInsertId();
      return $id;
    }

    public function coupons()
    {
      $coupons=DB::table('coupons')->get();
      return view('admin.Coupons.index')->with('coupons',$coupons);
    }
    public function couponsAdd()
    {
      return view('admin.Coupons.insert');
    }
    public function couponsaddpost(Request $request)
    {
      $code=$request->code;
      $sold_value=$request->sold_value;
      $count=$request->count;
      $insert = DB::table('coupons')->insert([
        'code'=>$code,
        'sold_value'=>$sold_value,
        'count'=>$count,
      ]);

    }

      public function couponsedit($id)
      {
        $coupons=DB::table('coupons')->where('id',$id)->get();
        return view('admin.Coupons.edit')->with('coupons',$coupons);
      }
      public function couponsupdate(Request $request)
      {
        $code=$request->code;
        $sold_value=$request->sold_value;
        $count=$request->count;
        $id=$request->id;
        $update = DB::table('coupons')->where('id',$id)->update([
          'code'=>$code,
          'sold_value'=>$sold_value,
          'count'=>$count,
        ]);
      }



}
