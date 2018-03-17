<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Page;

class AdminController extends Controller

{
 public function index(){
        $pages = Page::all();
     
        return view('admin.index',[
            'pages'=>$pages
        ]);
    }
}
