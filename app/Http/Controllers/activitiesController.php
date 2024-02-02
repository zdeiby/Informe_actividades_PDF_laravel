<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class activitiesController extends Controller
{
    public function activities(){
      $resultado='aaa';
        return view('activitiesView',["variable"=>$resultado]);
    }
}
