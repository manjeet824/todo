@extends('layout')
@section('content')
<div class="container">
	<div class="row"><div class="card" style="width: 100%">
  <div class="card-header">
  {{$todo->name}}
  </div>
  <div class="card-body">
    <h5 class="card-title">{{$todo->name}}</h5>
    <p class="card-text">{{$todo->description}}</p>
    <a href='/{{$todo->id}}/edit' class='btn btn-sm btn-success'>Edit<a>
    <a href='/{{$todo->id}}/delete' class='btn btn-sm btn-danger'>Delete <a>
  </div>
</div></div>

</div>
@endsection('content')