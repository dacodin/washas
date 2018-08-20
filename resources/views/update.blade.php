@extends('layouts.app')
<style>
    #todo{
        display: block;
        width: 80%;
    }
</style>
@section('content')
<div class="row">
    <div class="col-lg-12">
        <form action="{{route('save.todo', ['id'=>$todo->id])}}" method="POST">
            {{csrf_field()}}
            <div class="form-group" id="todo">
                <input type="text" name="todo"  class="form-control" value="{{$todo->todo}}">
            </div>
            <button class="btn btn-success">Save</button>
        </form>
    </div>
</div>


@endsection