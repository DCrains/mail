<?php
namespace App\Http\Controllers;

use Newsletter;
use Illuminate\Http\Request;

class NewsLetterController extends Controller
{



    public function store(Request $request){
        if(! Newsletter::isSubscribed($request->email)){
           
            Newsletter::subscribePending($request->email);
           
            return redirect('/login')->with('succes','Проверьте свой Email для следующего шага');
        }
return redirect('/login')->with('failure','извините вы уже подписаны');
    }
}
