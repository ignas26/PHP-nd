@extends('layout.main');

@section('title')
titulinis puslapis
@endsection

    @section('sidebar')
    @parent
@endsection
    
@section('content')
    <p>
    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ullam, et quia facere vero veritatis eveniet dignissimos tempora corrupti sapiente aliquid. Reiciendis mollitia alias qui recusandae aspernatur soluta neque porro ea.
    </p>
@endsection

@component('atskiras.danger')
    @slot('title')

    @endslot

@endcomponent

@section('form')
 @csrf
  <form action="" method="get">
    <input type="text" name="input" id="">
    <input type="submit" value="Done">
  </form>
@endsection



@push('scripts')
    <script src="/example.js"></script>
@endpush



