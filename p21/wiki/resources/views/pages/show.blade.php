 @extends('layouts.app') 
 @section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">

            <div class="card text-center mt-5">
                <div class="card-header">
                    {{ $page->title }}
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

        </div>
    </div>
</div>
@endsection
