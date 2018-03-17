@extends('layouts.app') 
@section('content')

  <div class="container-fluid">  <br>
    <div class="row justify-content-center">
<div class="col-md-center"> 
                        <h1>admin control panel</h1>
                </div>
   
   <div class="container-fluid">
    <div class='row'>
        <table class='table'>
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Title</th>
                    <th>Content</th>
                    <th>Category</th>         
                </tr>
            </thead>
            <tbody>
                @foreach ($pages as $page)
                <tr>
                    <td> {{ $page->id }} </td>
                    <td> {{ $page->title }} </td>
                    <td> {{ $page->content }} </td>
                    <td> {{ $page->category }} </td>          
                @endforeach    
                </tr>
            </tbody>
        </table>
    </div>

</div>

@endsection
