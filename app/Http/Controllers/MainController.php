<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    function sayHi(){
        return "hi world from Controller " ;
    }
    function sayHello($name){
        return "hi world from Controller {$name}";
    }
    function postRequest(Request $request){
        return  $name= $request ->post('name');
        
    }
}
