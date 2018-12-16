<?php

namespace App\Http\Controllers;

use App\Customer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
class CustomerController extends Controller
{



  public function wishremove($id)
  {
    session()->pull('wish', $id);
  }
    public function wish($id)
    {
      $wish = session('wish');
      if ($wish != null ) {
        $wish = session('wish');
        // return $id;
        // $new_wish = array_push($wish,$id);
        Session::push('wish',$id);
        return $wish;
      }elseif ($wish == null) {
        Session::put('wish',[]);
        Session::push('wish',$id);

        return $wish;
      }
    }
    public function wishlist()
    {
      $wish = session('wish');
      $settings=DB::table('settings')->get();

      $menus=DB::table('categories')->get();
      $submenus=DB::table('sub__categories')->get();
$categories=['menus'=>$menus,'submenu'=>$submenus];
      $sessionLang=Session::get('lang');
      if($wish != null){
      $products=DB::table('products')->whereIn('id',$wish)->get();
      $productImages=DB::table('product_images')->whereIn('product_id',$wish)->groupBy('product_id')->get();
      $PageData=['categories'=>$categories,'settings'=>$settings,'wish'=>$wish,'products'=>$products,'productImages'=>$productImages];
}else{
  $PageData=['categories'=>$categories,'settings'=>$settings];
}


      switch ($sessionLang) {
        case 'en':
          return view('Customer.wish')->with('PageData',$PageData);
          break;
          case 'ar':
            return view('Customer.wish_ar')->with('PageData',$PageData);
            break;
            case 'du':
            // return   $PageData;
              return view('Customer.wish_du')->with('PageData',$PageData);
              break;

        default:
        return view('Customer.wish')->with('PageData',$PageData);

          break;
      }
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $customer_id=session('customer_id');

      $settings=DB::table('settings')->get();

      $menus=DB::table('categories')->get();
      $submenus=DB::table('sub__categories')->get();
$categories=['menus'=>$menus,'submenu'=>$submenus];
      $sessionLang=Session::get('lang');
      if ($customer_id != null) {
        $message=1;
        $PageData=['categories'=>$categories,'settings'=>$settings,'message'=>$message];
      }else {
      $PageData=['categories'=>$categories,'settings'=>$settings];
      }

      switch ($sessionLang) {
        case 'en':
          return view('Customer.index')->with('PageData',$PageData);
          break;
          case 'ar':
            return view('Customer.index_ar')->with('PageData',$PageData);
            break;
            case 'du':
              return view('Customer.index_du')->with('PageData',$PageData);
              break;

        default:
        return view('Customer.index')->with('PageData',$PageData);

          break;
      }



    }
    public function Register ()
    {
      $settings=DB::table('settings')->get();

      $menus=DB::table('categories')->get();
      $submenus=DB::table('sub__categories')->get();
      $countries=DB::table('countries')->get();

$categories=['menus'=>$menus,'submenu'=>$submenus];
      $sessionLang=Session::get('lang');
      $PageData=['categories'=>$categories,'settings'=>$settings,'countries'=>$countries];

      switch ($sessionLang) {
        case 'en':
          return view('Customer.register')->with('PageData',$PageData);
          break;
          case 'ar':
            return view('Customer.register_ar')->with('PageData',$PageData);
            break;
            case 'du':
              return view('Customer.register_du')->with('PageData',$PageData);
              break;

        default:
        return view('Customer.register')->with('PageData',$PageData);

          break;
      }

    }

    /**
     * Show Customer Profile
     * Show Customer Orders
     * Show Customer Info
     */
    public function profile()
    {
      /* Site Setting & Menus & Customer Info */
      $customer_id=session('customer_id');
      $sessionLang=Session::get('lang');
      $settings=DB::table('settings')->get();
      $menus=DB::table('categories')->get();
      $submenus=DB::table('sub__categories')->get();
      $categories=['menus'=>$menus,'submenu'=>$submenus];
      $sessionLang=Session::get('lang');
      $customerinfo=DB::table('customers')->where('id',$customer_id)->get();
      $PageData=['categories'=>$categories,'settings'=>$settings,'customer'=>$customerinfo];
      /* Site Setting & Menus & Customer Info End Here */

      if ($customer_id) {

        switch ($sessionLang) {
          case 'en':
          return view('Customer.profile')->with('PageData',$PageData);
          // return $PageData;
            break;
            case 'ar':
            return view('Customer.profile_ar')->with('PageData',$PageData);
              break;
              case 'du':
              return view('Customer.profile_du')->with('PageData',$PageData);
                break;

          default:
          return view('Customer.profile')->with('PageData',$PageData);
            break;
        }

      }else {
      return  redirect('/login');
      }

    }


    public function orders()
    {
      $customer_id=session('customer_id');
      if ($customer_id) {
      /* Site Setting & Menus & Customer Info */
      $sessionLang=Session::get('lang');
      $settings=DB::table('settings')->get();
      $menus=DB::table('categories')->get();
      $submenus=DB::table('sub__categories')->get();
      $categories=['menus'=>$menus,'submenu'=>$submenus];
      $sessionLang=Session::get('lang');

      /* Tables orders , order_items , product_images*/
      $data=DB::table('orders')
      ->join('order_items','order_items.order_id','orders.id')
      ->join('product_images','product_images.product_id','order_items.product_id')
      ->join('products','products.id','order_items.product_id')
      ->select(
      'orders.id as order_id', 'orders.customer_id', 'orders.shiping_id', 'orders.payment_id', 'orders.coupon_id', 'orders.is_paied', 'orders.is_complete',
       'orders.is_delete', 'orders.is_canceled', 'orders.note', 'orders.created_at', 'orders.updated_at',
      'order_items.id', 'order_items.order_id', 'order_items.product_id', 'order_items.quantity as order_quan', 'order_items.size_id', 'order_items.currency',
      'products.product_name_ar', 'products.product_slug_ar', 'products.product_name_en', 'products.product_slug_en',
       'products.product_name_gr', 'products.product_slug_gr', 'products.product_info_ar', 'products.product_info_en',
        'products.product_info_gr', 'products.quantity', 'products.price_dolar', 'products.price_euro', 'products.price_kron',
         'products.sold_price_dolar', 'products.sold_price_euro', 'products.sold_price_kron',
      'products.keywords',  'products.main_category_id', 'products.sub_category_id' ,
      'product_images.id', 'product_images.path', 'product_images.product_id')->where('orders.customer_id',$customer_id)->groupBy('order_items.order_id')->get() ;

      $PageData=['categories'=>$categories,'settings'=>$settings,'orders'=>$data];
      /* Site Setting & Menus & Customer Info End Here */



        switch ($sessionLang) {
          case 'en':
          return view('Customer.order')->with('PageData',$PageData);
          // return $PageData;
            break;
            case 'ar':
            return view('Customer.order_ar')->with('PageData',$PageData);
              break;
              case 'du':
              return view('Customer.order_du')->with('PageData',$PageData);
                break;

          default:
          return view('Customer.order')->with('PageData',$PageData);
            break;
        }

      }else {
      return  redirect('/login');
      }

    }
    public function order($id)
    {
      /* Site Setting & Menus & Customer Info */
      $customer_id=session('customer_id');
      if($customer_id){
      $sessionLang=Session::get('lang');
      $settings=DB::table('settings')->get();
      $menus=DB::table('categories')->get();
      $submenus=DB::table('sub__categories')->get();
      $categories=['menus'=>$menus,'submenu'=>$submenus];
      $sessionLang=Session::get('lang');
      $customerinfo=DB::table('customers')->where('id',$customer_id)->get();
      /* Site Setting & Menus & Customer Info End Here */
      /* Get The Single Order Informations  (Products In Order , Customer Address , Payemnt Name ,  Shipping Company , Order Id ) */
      $data = DB::table('orders')
      ->join('order_items','orders.id','order_items.order_id')// Get Order Items Where The Order Id  = Order Id in Order Items
      ->join('products','products.id','order_items.product_id')
      ->select('orders.id as order_id', 'orders.customer_id', 'orders.shiping_id', 'orders.payment_id', 'orders.coupon_id', 'orders.is_paied', 'orders.is_complete',
       'orders.is_delete', 'orders.is_canceled', 'orders.note', 'orders.created_at', 'orders.updated_at',
      'order_items.id', 'order_items.order_id', 'order_items.product_id', 'order_items.quantity as order_quan', 'order_items.size_id', 'order_items.currency',
      'products.product_name_ar', 'products.product_slug_ar', 'products.product_name_en', 'products.product_slug_en',
       'products.product_name_gr', 'products.product_slug_gr', 'products.product_info_ar', 'products.product_info_en',
        'products.product_info_gr', 'products.quantity', 'products.price_dolar', 'products.price_euro', 'products.price_kron',
         'products.sold_price_dolar', 'products.sold_price_euro', 'products.sold_price_kron',
      'products.keywords',  'products.main_category_id', 'products.sub_category_id' )
      ->where('orders.id',$id)->get();
      $shipping=DB::table('shipping_companies')->get();
      $payments=DB::table('payment_types')->get();
      $sizes=DB::table('sizes')->get();
      $PageData=['categories'=>$categories,'settings'=>$settings,'customer'=>$customerinfo,'data'=>$data,'payments'=>$payments,'shipping'=>$shipping,'sizes'=>$sizes];
      switch ($sessionLang) {
        case 'en':
        return view('Customer.single_order')->with('PageData',$PageData);

          break;
          case 'ar':
          return view('Customer.single_order_ar')->with('PageData',$PageData);
            break;
            case 'du':
            return view('Customer.single_order_du')->with('PageData',$PageData);
              break;

        default:
        return view('Customer.single_order')->with('PageData',$PageData);
          break;
      }

   }else{
     return redirect('/login');
   }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

      // _token=qAyqcMrtiq5AFe54bzXuvQDpXJuuYHiBurfJeboq;
      $firstname=$request->firstname;
      $lastname=$request->lastname;
      $email=$request->email;
      $telephone=$request->telephone;
      $fax=$request->fax;
      $company=$request->company;
      $address_1=$request->address_1;
      $address_2=$request->address_2;
      $city=$request->city;
      $postcode=$request->postcode;
      $country_id=$request->country_id;
      $password=$request->password;

      /*
      'name`, `phone`, `address1`, `address2`, `company`, `postcode`, `country_id`, `city`, `email`, `email_verified_at`, `password`,
      */
      $newcustomer=DB::table('customers')->insert([
        'name'=>$firstname,
        'lname'=>$lastname,
        'email'=>$email,
        'phone'=>$telephone,
        'company'=>$company,
        'address1'=>$address_1,
        'address2'=>$address_2,
        'city'=>$city,
        'postcode'=>$postcode,
        'country_id'=>$country_id,
        'password'=>$password,
      ]);
      if ($newcustomer) {
        echo "1";
      }else {
        echo "0";
      }



    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function show(Customer $customer)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function edit(Customer $customer)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
      return $request;

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {

      $flash = session()->forget('customer_id');
      if ($flash) {
        echo "1";
      }else {
        echo "2";
      }

    }
    public function checkLogin()
    {
      $islogin=SESSION::get('islogin');
      if ($islogin==null) {
        echo "Not Login";
      }
      return $islogin;
    }
    public function Login(Request $request)
    {
      $customer=DB::table('customers')->where([
        ['email', '=', $request->email],
        ['password','=',$request->password],
      ])->get();


      $res= $customer->count();

      if ($res = 1 ) {
        foreach ($customer as $key) {
          $id = $key->id;
        }

      SESSION::put('customer_id',$id);
      echo 'this customer id'. session('customer_id');
      }else {
        return 0;
      }
    }




}
