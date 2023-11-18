<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
   public function index(){
        return view('web.home.index');
        
    }


    public function choose() 
    {

        return view('web.choose.index');
        
    }


    public function product()
    {
        return view('web.product.index');
    }

    public function profile()
    {

        return view('web.profile.index');
        
    }


}
