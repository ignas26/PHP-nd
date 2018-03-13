 @extends('layouts.app') 
 @section('content')
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
   <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-4">
            <form action={{ route( 'categories.store') }} method="POST">
                @csrf
                <div class="form-group">
                    <label for="title">enter your id</label>
                    <input type="text" class="form-control" id="id" name="id">
                </div>
<div class="form-group">
        <label for="name">Enter name</label>
        <input type="text" class="form-control" id="name" name="name">
      </div>
      <div class="form-group">
        <label for="position">Enter Position</label>
        <input type="number" class="form-control" id="position" name="position">
</div>
                <button type="submit" class="btn btn-success">Create Post</button>
            </form>
        </div>
    </div>
</div>
@endsection