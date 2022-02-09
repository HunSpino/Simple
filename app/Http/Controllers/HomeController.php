<?php

namespace App\Http\Controllers;

use App\Models\Component;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){

        $nameCount = Component::count();
        $componentCount = Component::count();
        $$componentPrice = Component::sum('price');

        return view('stats',[
            'nameCount'=> $nameCount,
            'componentCount'=> $componentCount,
            'componentPrice'=> $componentPrice
        ]);
    }
}
//$nameCount = Component::count();
