@extends('layouts.app')
<style>
    #todo{
        display: block;
        width: 200px;
    }
</style>
@section('content')
<div class="row">
    <div class="col-lg-8 col-lg-offset-3">
        <form action="{{route('create.todo')}}" method="POST">
            {{csrf_field()}}
            <div class="form-group mx-auto" id="todo">
                    <input type="text" name="todo"  class="form-control-lg" placeholder="Create a new todo">
            </div>
        </form>
    </div>
</div>
    <hr>
<div class="content">
    <div class="title m-b-md">
        @foreach($todos as $todo)
        {{$todo->todo}} | {{$todo->created_at}} <a href="{{route('todo.delete',['id'=>$todo->i])}}" class="btn btn-danger">X</a>
        <a href="{{route('todo.update',['id'=>$todo->id])}}" class="btn btn-primary">Update</a>
        <hr>
        @endforeach
    </div>

</div>

@endsection