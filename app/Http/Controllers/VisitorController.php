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

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }
    public function out()
    {
        Session::flush();
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
     * @param  \App\Visitor  $visitor
     * @return \Illuminate\Http\Response
     */
    public function show(Visitor $visitor)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Visitor  $visitor
     * @return \Illuminate\Http\Response
     */
    public function edit(Visitor $visitor)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Visitor  $visitor
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Visitor $visitor)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Visitor  $visitor
     * @return \Illuminate\Http\Response
     */
    public function destroy(Visitor $visitor)
    {
        //
    }
}
