<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Http\Request;
use App\Postp19;

class Controller extends BaseController
{
    
    public function index(){
         
        $posts = Postp19::all();
        return view('atskiras.index', 
                    ['posts' => $posts]);}

        public function store(Request $request) {
        $data = $request->all();
        
       
        $post = new Postp19;
        $post->content = $data['content'];
        $post->save();
        return redirect(route('main'));
    }
    
}
?>
