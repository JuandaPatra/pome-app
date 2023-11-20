<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;

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

    public function contact(Request $request)
    {
        // return $request;
        $validator = Validator::make(
            $request->all(),
            [
                'name'      => 'required|string|max:100',
                'email'      => 'required|string|email|max:100',
                'message'      => 'required|string|max:1000',

            ]
        );
        if ($validator->fails()) {
            

            return response($validator->messages(), 400);
        }
        DB::beginTransaction();

        try {
            $newMessage = Contact::create([
                'name'      => $request->name,
                'email'      => $request->email,
                'message'      => $request->message,
            ]);
        } catch (\throwable $th) {
            DB::rollBack();
            return response('failed', 400);
        } finally {
            DB::commit();
        }
        return response('success', 200);

    }


}
