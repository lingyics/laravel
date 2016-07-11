<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesResources;
use Illuminate\Support\Facades\Schema;

class AboutController extends BaseController
{
    public function showAbout(){

/*
        Schema::create('art',function($t){
            $t->increments('id');
            $t->string('artist')->unique();
            $t->string('title',500);
            $t->text('description');
            $t->date('created');
            $t->date('exhibit_date');
            $t->timestamps();
        });


*/
        /*
        Schema::table('art',function($c){
            $c->boolean('alumni');
            $c->dropColumn('exhibit_date');
        });
*/
       /*
       Schema::dropIfExists('art');
        */



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