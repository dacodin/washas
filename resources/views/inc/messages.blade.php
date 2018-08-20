@if(count($errors) > 0)
@foreach($errors->all() as $error)
    <br>
    <div class="alert alert-danger col-md-8 text-center">
        {{$error}}
    </div>
@endforeach
@endif

@if(session('success'))
<div class="alert alert-success col-md-8 text-center">
    {{session('success')}}
</div>

@endif

@if(session('error'))
<div class="alert alert-danger col-md-8 text-center">
    {{session('error')}}
</div>

@endif