<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Anam\Phpcart\Cart;
use Illuminate\Support\Facades\DB;

class CartController extends Controller
{




    public function AddCart($product_id,$quantity,$price,$name,$size,$sizeid)
    {



    $session_currency= Session::get('session_currency');
      $pr=(int)$price;
      $cart = new Cart();

        $cart->add([
            'id'       => $sizeid,
            'product_id'=>$product_id,
            'name'     => $name,
            'quantity' => 1 ,
            'price'    => $pr,
            'size'     => $size,
            'currency' =>$session_currency
        ]);



    }
    public function show()
    {
       $cart = new Cart();
       $cart2=$cart->getItems();
      $sessionLang=Session::get('lang');
      $settings=DB::table('settings')->get();
      $menus=DB::table('categories')->get();
      $submenus=DB::table('sub__categories')->get();
      $categories=['menus'=>$menus,'submenu'=>$submenus];
      $payments=DB::table('payment_types')->get();
      $shipping=DB::table('shipping_companies')->get();
      $PageData=['categories'=>$categories,'settings'=>$settings,'cart'=>$cart2,'payments'=>$payments,'shipping'=>$shipping];
      switch ($sessionLang) {
        case 'en':
        return view('cart.index')->with('PageData',$PageData);
          break;
          case 'ar':
            return view('cart.index_ar')->with('PageData',$PageData);
            break;
            case 'du':
              return view('cart.index_du')->with('PageData',$PageData);
              break;

        default:
        return view('cart.index')->with('PageData',$PageData);
          break;
      }


    }
    public function flash()
    {
      $cart = new Cart();

       return $cart->clear();
    }


    public function ship($id)
    {
      $price=DB::table('shipping_companies')->where('id',$id)->get();
      $session_currency=Session::get('session_currency');

      switch ($session_currency) {
        case '$':
        return $price[0]->price_dolar;

          break;
          case '€':
          return $price[0]->price_euro;

            break;
            case 'kr':
            return $price[0]->price_kron;

              break;

        default:
        return $price[0]->price_dolar;

          break;
      }

    }
}
