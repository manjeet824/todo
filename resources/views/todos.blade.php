@extends('layout')

@section('content')
<div class='container'>
<div class="row">
	<div class="card-header text-center m-5" style="width: 100%;">
    <h1>Todo List</h1>
</div>
	<div class="card" style=" width: 100%;">
  <ul class="list-group list-group-flush">
@foreach($todos as $todo)
    <li class="list-group-item">{{$todo->name}} <a href='/{{$todo->id}}'  class="btn float-right  btn-sm btn-primary m-2">View</a>
 <a href='/{{$todo->id}}/delete' class='btn btn-sm btn-danger m-2 float-right'>Delete <a>

@if(!$todo->completed)
                  <a href="/{{ $todo->id }}/complete" style="color: white;" class="btn float-right  btn-sm btn-warning m-2">Complete</a>
                @endif
  @endforeach 
  </li>  
  </ul>
</div>
</div>
</div>
@endsection('content')