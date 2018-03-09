@extends('layout.main');

@section('title')
titulinis puslapis
@endsection

    @section('sidebar')
    @parent
@endsection
    
@section('content')

  <div class="jumbotron">
    <div class="container">
        <h1 class="display-3">
            @foreach ($posts as $post)
          {{ $post->content }}
            @endforeach
        </h1>
    </div>
</div>
@endsection


@section('form')
    {{$post_id = null}}
    @isset($post_data->id) 
     {{$post_id = $post_data->id}}
    @endisset
    <form action={{ route('save_data', ['id' => $post_id]) }} method="POST">
     @csrf
        <div class="form-group">
            <br>
            <input type="text" class="form-control form-control-lg"  name="content" aria-describedby="emailHelp" 
            placeholder="palikite atsiliepima" value=@isset($post_data->content) {{ $post_data->content}} @endisset>
            <br>
            <button type="submit" class="btn btn-info" value ="save">palikti</button>
        </div>
    </form>
@endsection



<!--
@push('scripts')
    <script src="/example.js"></script>
@endpush
-->



