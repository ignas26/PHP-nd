    @extends('layout.main');
        @section('title', 'wiki')
   
    
    @section('sidebar')
    @parent
    <p>turi matytis sidebar</p>
@endsection
    
@section('content')
    <div class="alert alert-success">sveiki atvyke</div> 
@endsection

@component('atskiras.danger')
    @slot('title')
    uzdrausta
    @endslot
    negalima pasiekti turinio
@endcomponent

@section('atskiras')
  <form action="" method="get">
    @csrf
    <input type="text" name="input" id="">
    <input type="submit" value="Done">
  </form>
@endsection


<!--
@push('scripts')
    <script src="/example.js"></script>
@endpush
-->


