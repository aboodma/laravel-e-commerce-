<?php

namespace App\Http\Controllers;

use App\Customer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
class CustomerController extends Controller
{

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
      `name`, `phone`, `address1`, `address2`, `company`, `postcode`, `country_id`, `city`, `email`, `email_verified_at`, `password`,
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
    public function update(Request $request, Customer $customer)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function destroy(Customer $customer)
    {
        //
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
