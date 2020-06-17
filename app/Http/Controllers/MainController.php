<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;



class MainController extends Controller{

    //metodo
    public function home(){
        return view('main.index', []);
    }

}





 ?>
