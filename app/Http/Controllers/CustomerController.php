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
      $settings=DB::table('settings')->get();

      $menus=DB::table('categories')->get();
      $submenus=DB::table('sub__categories')->get();
$categories=['menus'=>$menus,'submenu'=>$submenus];
      $sessionLang=Session::get('lang');
      $PageData=['categories'=>$categories,'settings'=>$settings];
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
        //
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
}
