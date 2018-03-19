<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Page;
use App\Category;
use Illuminate\Contracts\Auth\Access\Gate;
//use Illuminate\Support\Facades\DB;


class PagesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::orderBy('position')->get();
        $pages = Page::paginate(4);
        return view('pages.index', ['pages' => $pages, 'categories' => $categories]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       $cats=Category::all();
       return view('pages.create',[
            'categories' => $cats ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
    
                $validatedData = $request->validate([
            'title' => 'required',
            'content' => 'required',
        ]);
    
    $page = new Page;
    $page->title = $request->input('title');
    $page->content = $request->input('content');
    $page->category = $request->input('category');
    $page->user = Auth::id();
    $page->save();
    $request->session()->flash('message', 'Pranesimas sukurtas');
    return redirect(route('pages.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
    
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
     public function search(Request $request)
    {
    
    $this->middleware('auth');
    $this->authorize('search', Page::class);
         $categories = Category::orderBy('position')->get();
         if($request->has('searchword')) {
         $result = $request->input('searchword');
         $pages=Page::where('title', 'LIKE', '%'.$result.'%')->paginate(4);
            }
         
         return view('pages.index', ['pages' => $pages, 'categories' => $categories]);
    }
    
    
        public function __construct(){
          $this->middleware('auth', ['except' => ['index','show']]);
      }
    
}