<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\DB;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;


    function szavak(){
        $res=DB::select('SELECT * FROM szavaks');
        return $res;
    }
    function szavakTémával(){
       $res= DB::select('SELECT szavaks.id, szavaks.Angol,szavaks.magyar,témas.temanev FROM szavaks
        JOIN témas ON szavaks.temaId=témas.id');
        return $res;
    }

    function Témák(){
        $res=DB::select('SELECT * FROM témas');
        return $res;
    }
}
