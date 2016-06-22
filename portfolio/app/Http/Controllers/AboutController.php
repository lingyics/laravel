<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesResources;

class AboutController extends BaseController
{
    public function showAbout(){
        return view('about');
    }

    public function showSubject($a){
        return $a. ' content';
    }
    public function showDirections()
    {

        return "this different directions";
    }

}