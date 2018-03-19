 @extends('layouts.app') 
 @section('content')
   @auth
   <div class="container-fluid">
   <form action={{ route( 'search') }} method="POST" class="form-inline justify-content-center">
    @csrf
<input type="text" class="form-inline" placeholder="type in your request" name="searchword">
  <button class="btn btn-success" type="submit">press to search</button>
   </form>
</div>
   
   <div class="container-fluid"><br>
    <div class="row justify-content-center">
<div class="col-md-9"> 
            @forelse($pages as $page)
            <div class="card text-center mt-3 p-2">
                 <div class="card-header">
                        <a href={{ route('pages.index', ['id' => $page->id])}} > {{ $page->title }} </a>
                        <p>Category ID: {{$page->cat->id}}</p>  <br>
                </div>
                <div class="card-body">
                    {{--
                    <h5 class="card-title">Special title treatment</h5> --}}
                    <p class="card-text">{{ $page->content }}</p>
                </div>
                <div class="card-footer text-muted">
                    {{ $page->created_at }}  <br>
                </div>
            </div>
            @empty
            <p>Posts not found...</p>
            @endforelse
            <br>
             {{ $pages->links() }}
 </div>
   
    <div class="row justify-content-center">
               <div class="col-md-2">
                <h4>Categories</h4>
                @foreach ($categories as $category )
                    {{$category->name}}
                @endforeach
              
</div>
        </div>
  
  
   
</div>
</div>
@else
 <div class="container-fluid">  <br>
    <div class="row justify-content-center">
<div class="col-md-center"> 
                        <h1>UŽSIREGISTRUOKITE!</h1>
                </div>

@endauth
@endsection


