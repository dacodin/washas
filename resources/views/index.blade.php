@extends('layouts.main')
@section('content')
     
<div class="card text-dark bg-light mb-3" >
   <div class="card-header bg-danger text-light">
            <h4 class="text-center">Cleaning Service</h4>
        </div>
        <div class="card-body">
            <h4 class="text-secondary">Choose service?</h4>
            <div class="row">
                @foreach($services as $service)
                <div class="col-sm-4">
                    <div class="mak-check"
                        data-service-id="{{ $service->id }}"
                        data-service-name="{{ $service->name }}"
                        data-service-price="{{ $service->price }}">
                        <span class="head"><i class="cb"></i>{{ $service->name }}</span>
                        <p>₦{{ $service->price }}</p>
                    </div>
                </div>
                @endforeach

                <input type="hidden" name="service" data-name="" value="1">
            </div>


            @include('pages.addon')

            <h4 class="text-secondary">How often would you like us provide service?</h4>
            @include('pages.duration')

            <h4>When would you like us to come?</h4>
            {{-- <div style="width: 250px;">
                    <div id="picker"> </div>
                    <input type="hidden" id="result" value="" />
                </div> --}}
                <div class="row">
                    <div class="form-group">
                       
                        </div>
                </div>
                <style type="text/css">
              
                </style>
                <div class="row">
                        <div class="col-md-6 mb-3">
                                <label>Service Date</label>
                                <input type="text" id="datepicker" class="form-control">
                                <span class="fa fa-calendar fa-lg errspan"></span>
                        </div>
                        <div class="col-md-6 mb-3 ">
                                <label>Service Time</label>
                                <input type="text" class="timepicker form-control" id="timepicker">
                                <span class="fa fa-clock-o fa-lg errspan"></span>
                            
                        </div>
                    </div>
               
            <h4>Your Personal Details</h4>

            @include('pages.detail')
        </div>        
</div>  

@endsection

@section('sidebar')
@endsection
