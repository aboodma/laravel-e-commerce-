<?php

namespace App\Http\Controllers;

use App\Visitor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;

class VisitorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
      // SELECT c1.id, c1.name_ar, c2.id, c2.name_ar FROM categories c1 LEFT JOIN sub__categories c2 ON c2.category_id = c1.id
      $menus=DB::table('categories')->get();
      $submenus=DB::table('sub__categories')->get();
$categories=['menus'=>$menus,'submenu'=>$submenus];
// return $categories['submenu'];die();
      $ip=$request->ip();
       $ipp=$request->server('SERVER_PORT');
       session()->regenerate();
       $sessionId=Session::get('id');
       if (isset($sessionId)) {
        $visitors= DB::table('visitors')->where('id', $sessionId)->first();
         $VisitorLang=$visitors->session_lang;
         Session::put('lang', $VisitorLang);
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
           return view('Home.index')->with('categories',$categories);
           break;
           case 'ar':
            return view('Home.index_ar')->with('categories',$categories);
             break;
             case 'du':
               return view('Home.index_du')->with('menus',$menus);
               break;

         default:
           return view('Home.index');
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
        $sessionLang=Session::get('lang');
        switch ($sessionLang) {
          case 'en':
            return view('Home.index');
            break;
            case 'ar':
             return view('Home.index_ar');
              break;
              case 'du':
                return view('Home.index_du');
                break;

          default:
            return view('Home.index');
            break;
        }
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
        switch ($request->lang) {
          case 'en':
            return view('Home.index');
            break;
            case 'ar':
             return view('Home.index_ar');
              break;
              case 'du':
                return view('Home.index_du');
                break;

          default:
            return view('Home.index');
            break;
        }
    }


    public function out()
    {
        Session::flush();
    }



}
