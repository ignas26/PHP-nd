 @extends('layouts.app') 
 @section('content')
   <div class="container-fluid">  <br>
    <div class="row justify-content-center">
<div class="col-md-9"> 
            @forelse($pages as $page)
            <div class="card text-center mt-3 p-2">
                 <div class="card-header">
                        <a href={{ route('pages.show', ['id' => $page->id])}} > {{ $page->title }} </a>
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

@endsection


