    @extends('layouts.app')
    @section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                @forelse($categories as $category) 
                <div class="card text-center mt-5">
                        <div class="card-header">
                                  <a href={{ route('categories.show', ['id' => $category->id])}} > {{ $category->title }} </a>
                        </div>
                        <div class="card-body">
                          {{--  <h5 class="card-title">Special title treatment</h5>  --}}
                          <p class="card-text">{{ $category->content }}</p>
                        </div>
                        <div class="card-footer text-muted">
                          {{ $category->created_at }}
                        </div>
                </div>
                @empty
                    <p>Posts not found...</p>
                @endforelse
            </div>
        </div>
    </div>
    @endsection