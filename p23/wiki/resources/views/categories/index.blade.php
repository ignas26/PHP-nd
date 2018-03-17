 @extends('layouts.app') 
 @section('content')
<table class="table">
    <thead>
        <tr>
            <th scope="col">Id ir Name</th>
            <th scope="col">Position</th>
            <th scope="col">Created_at</th>
        </tr>
    </thead>
    <tbody>
        @forelse($categories as $category)
        <tr>
            <td> {{ $category->id }} {{ $category->name }} </td>
            <td>{{$category->position}}</td>
            <td>{{$category->created_at}}</td>
        </tr>
        @empty
        <p>Category not found</p>
        @endforelse
    </tbody>
</table>
<br>
 {{ $categories->links() }}
@endsection
