<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Http\Request;

class Controller extends BaseController
{
    
    public function index(){
        return view('atskiras.index');
    }

      public function store(Request $request, $post_id = null){

        $data = $request->all();
        
        if(is_null($post_id)){
        $post = new Post;
            }else {
            $post = Post::find($post_id);}
        
        $post->content = $data['content'];
        $post->author = $data['author'];
        $post->category_id = 0;
        $post->save();
        return redirect(route('main'));
    }
    
}
?>