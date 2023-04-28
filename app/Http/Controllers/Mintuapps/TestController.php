<?php

namespace App\Http\Controllers\Mintuapps;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class TestController extends Controller
{

    public function index(){


   // return View::make('test',['name'=>'Mintu Mia','age' => 20]);
      //  return View::make('test',['name'=>'Mintu Mia','age' => 20]);
       // return View('test')->with('name','Mintu Mia');
        if(session('name')){
        return View('test');
        session('name')->forget();
        }else{
            return redirect('test')->with('name','The Quick Brown Fox Jump Over');
        }

    }
    public function test2(){


        // return View::make('test',['name'=>'Mintu Mia','age' => 20]);
        //  return View::make('test',['name'=>'Mintu Mia','age' => 20]);
        // return View('test')->with('name','Mintu Mia');
        return redirect('/test2')->with('name','Mintu Mia');

    }
    //
}
