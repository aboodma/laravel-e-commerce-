<?php

namespace App\Http\Controllers;

use App\Visitor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;
use App\Product;

class VisitorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {

      $menus=DB::table('categories')->get();
      $submenus=DB::table('sub__categories')->get();
      $settings=DB::table('settings')->get();
      $banners=DB::table('homepage_images')->get();
      $sliders=DB::table('homepage_sliders')->get();
      $products=DB::table('homepage_products')
      ->join('products','products.id','homepage_products.product_id')
      ->join('product_images','product_images.product_id','homepage_products.product_id')
      ->select('homepage_products.product_id','products.id','products.product_name_ar','products.product_name_ar',
      'products.product_name_en','products.product_name_gr','products.product_slug_ar','products.product_slug_en',
      'products.product_slug_gr','products.price_dolar','products.price_euro','products.price_kron','product_images.path'
      ,'product_images.product_id' )->groupBy('homepage_products.product_id')->get();
$data=['menus'=>$menus,'submenu'=>$submenus,'banners'=>$banners,'sliders'=>$sliders,'products'=>$products,'settings'=>$settings];
// return $categories['submenu'];die();
      $ip=$request->ip();
       $ipp=$request->server('SERVER_PORT');
       session()->regenerate();
       $sessionId=Session::get('id');
       if (isset($sessionId)) {
        $visitors= DB::table('visitors')->where('id', $sessionId)->first();
        $VisitorLang=$visitors->session_lang;
         $VisitorCurrency=$visitors->session_currency;
         Session::put('lang', $VisitorLang);
         Session::put('session_currency', $VisitorCurrency);

         $sessionLang=Session::get('lang');


       }else {
        $visitors=DB::table('visitors')->orderBy('id', 'desc')->first();

        if (empty($visitors)) {
          $LastId='0';
        }else{$LastId=$visitors->id;}



         $id = DB::table('visitors')->insertGetId( ['session_lang'=>'en','session_currency'=>'$']);
         Session::put('id', $id);

       }
       if (!isset($sessionLang)) {
         $sessionLang='en';
       }

       switch ($sessionLang) {
         case 'en':
           return view('Home.index')->with('data',$data);
           break;
           case 'ar':

             return view('Home.index_ar')->with('data',$data);
             break;
             case 'du':
               return view('Home.index_du')->with('data',$data);
               break;

         default:
           return view('Home.index')->with('data',$data);
           break;
       }

    }
    public function ChangeCurrency(Request $request)
    {
      $session_currency=Session::get('session_currency');
      if (isset($session_currency)) {
      Session::forget('session_currency');
      }

      $sessionId=Session::get('id');
        DB::table('visitors')->where('id',$sessionId)->update(['session_currency'=>$request->currency]);
        Session::put('session_currency', $request->currency);
        $session_currency=Session::get('session_currency');
        return $session_currency;
    }
    public function ChangeLang(Request $request)
    {
      $session_currency=Session::get('session_lang');
      if (isset($session_currency)) {
      Session::forget('session_lang');
      }

      $sessionId=Session::get('id');
        DB::table('visitors')->where('id',$sessionId)->update(['session_lang'=>$request->lang]);
        Session::put('session_lang', $request->lang);
        $sessionLang=Session::get('lang');
        return $sessionLang;
    }


    public function out()
    {
        Session::flush();
    }
    public function search(Request $request)
    {
      $sessionLang=Session::get('lang');

      switch ($sessionLang) {
        case 'en':

        $productsearch=DB::table('products')
        ->join('product_images','products.id','product_images.product_id')
        ->where('product_name_en', 'LIKE', '%'.$request->search.'%')
        ->select(
        'products.id','products.product_name_ar', 'products.product_slug_ar', 'products.product_name_en','products.product_slug_en','products.product_name_gr','products.product_info_en','products.product_info_gr','products.product_info_ar',
        'products.product_slug_gr','products.price_dolar','products.price_euro','products.price_kron','products.sold_price_dolar','products.sold_price_euro','products.sold_price_kron','products.sub_category_id',
        'product_images.id','product_images.path','product_images.product_id')
        ->groupBy('product_images.product_id')->get();
        return $productsearch;

          break;
          case 'ar':
          $productsearch=DB::table('products')
          ->join('product_images','products.id','product_images.product_id')
          ->where('product_name_ar', 'LIKE', '%'.$request->search.'%')
          ->select(
          'products.id','products.product_name_ar', 'products.product_slug_ar', 'products.product_name_en','products.product_slug_en','products.product_name_gr','products.product_info_en','products.product_info_gr','products.product_info_ar',
          'products.product_slug_gr','products.price_dolar','products.price_euro','products.price_kron','products.sold_price_dolar','products.sold_price_euro','products.sold_price_kron','products.sub_category_id',
          'product_images.id','product_images.path','product_images.product_id')
          ->groupBy('product_images.product_id')->get();

          return $productsearch;

            break;
            case 'du':
            $productsearch=DB::table('products')
            ->join('product_images','products.id','product_images.product_id')
            ->where('product_name_gr', 'LIKE', '%'.$request->search.'%')
            ->select(
            'products.id','products.product_name_ar', 'products.product_slug_ar', 'products.product_name_en','products.product_slug_en','products.product_name_gr','products.product_info_en','products.product_info_gr','products.product_info_ar',
            'products.product_slug_gr','products.price_dolar','products.price_euro','products.price_kron','products.sold_price_dolar','products.sold_price_euro','products.sold_price_kron','products.sub_category_id',
            'product_images.id','product_images.path','product_images.product_id')
            ->groupBy('product_images.product_id')->get();

            return $productsearch;

              break;

        default:
        $productsearch=DB::table('products')
        ->join('product_images','products.id','product_images.product_id')
        ->where('product_name_en', 'LIKE', '%'.$request->search.'%')
        ->select(
        'products.id','products.product_name_ar', 'products.product_slug_ar', 'products.product_name_en','products.product_slug_en','products.product_name_gr','products.product_info_en','products.product_info_gr','products.product_info_ar',
        'products.product_slug_gr','products.price_dolar','products.price_euro','products.price_kron','products.sold_price_dolar','products.sold_price_euro','products.sold_price_kron','products.sub_category_id',
        'product_images.id','product_images.path','product_images.product_id')
        ->groupBy('product_images.product_id')->get();
        return $productsearch;

          break;
      }
    }



}
