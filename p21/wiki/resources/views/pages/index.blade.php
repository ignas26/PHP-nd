 @extends('layouts.app') 
 @section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            @forelse($pages as $page)
            <div class="card text-center mt-5">
                <div class="card-header">
                        <a href={{ route('pages.show', ['id' => $page->id])}} > {{ $page->title }} </a>
                </div>
                <div class="card-body">
                    {{--
                    <h5 class="card-title">Special title treatment</h5> --}}
                    <p class="card-text">{{ $page->content }}</p>
                </div>
                <div class="card-footer text-muted">
                    {{ $page->created_at }}
                </div>
            </div>
            @empty
            <p>Posts not found...</p>
            @endforelse
        </div>
    </div>
</div>
@endsection
