 @extends('layouts.app') 
 @section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-4">
            <form action={{ route( 'categories.store') }} method="POST">
                @csrf
                <div class="form-group">
                    <label for="title">Title</label>
                    <input type="text" class="form-control" id="title" name="title">
                </div>
                <div class="form-group">
                    <label for="category">Select category</label>
                    <select class="form-control" id="category" name="category">
                                <option>1</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                                <option>5</option>
                              </select>
                </div>
                <div class="form-group">
                    <label for="exampleFormControlTextarea1">Conntet</label>
                    <textarea class="form-control" id="content" name="content" rows="3"></textarea>
                </div>
                <button type="submit" class="btn btn-success">Create Post</button>
            </form>
        </div>
    </div>
</div>
@endsection