@extends('layouts.app')
@section('content')
  
   
            <div class="card">
                <div class="card-header col-md-12 ">
                    <h3 class="text-center">Cleaning Service</h3>
                </div>
                <div class="card-body">
                    
                    <form action="">
                        <h4 class="text-secondary">Where would you like us to provide service?</h4>
                        <div class="row">
                        <div class="form-group col-md-6">
                            <label for="zipcode">Zipcode or Postal Code</label>
                            <input type="text" name="zipcode" class="form-control">
                        </div>
                        </div>
                        <h4 class="text-secondary">Choose service?</h4>
                        <div class="row">
                            <div class="form-group col-md-4">
                                    <img class="center-block img-responsive rounded-circle service-book mx-auto d-block" src="/img/services/home.jpg">
                                    <p class="text-center">Home Cleaning</p>   
                            </div>
                            <div class="form-group col-md-4">
                                    <img class="center-block img-responsive rounded-circle service-book mx-auto d-block" src="/img/services/car.jpg">
                                    <p class="text-center">Car Wash</p>  
                            </div>
                            <div class="form-group col-md-4">
                                    <img class="center-block img-responsive rounded-circle service-book mx-auto d-block" src="/img/services/cloth.jpg">
                                    <p class="text-center">Laundry Service</p>  
                            </div>
                        </div>
                        <h6 class="text-danger">Please select units or addons?</h6>
                        <div class="row">
                            <div class="form-group col-md-3">
                                <img class="center-block img-responsive service-book mx-auto d-block" src="/img/addon/image_placeholder.png">
                            </div>
                            <div class="form-group col-md-3">
                                    <img class="center-block img-responsive service-book mx-auto d-block" src="/img/addon/image_placeholder.png">
                            </div>
                            <div class="form-group col-md-3">
                                    <img class="center-block img-responsive service-book mx-auto d-block" src="/img/addon/image_placeholder.png">
                            </div>
                            <div class="form-group col-md-3">
                                    <img class="center-block img-responsive service-book mx-auto d-block" src="/img/addon/image_placeholder.png">
                            </div>
                            <div class="form-group col-md-3">
                                    <img class="center-block img-responsive service-book mx-auto d-block" src="/img/addon/image_placeholder.png">
                            </div>
                            <div class="form-group col-md-3">
                                    <img class="center-block img-responsive service-book mx-auto d-block" src="/img/addon/image_placeholder.png">
                            </div>
                            <div class="form-group col-md-3">
                                    <img class="center-block img-responsive service-book mx-auto d-block" src="/img/addon/image_placeholder.png">
                            </div>
                            <div class="form-group col-md-3">
                                    <img class="center-block img-responsive service-book mx-auto d-block" src="/img/addon/image_placeholder.png">
                            </div>
                        </div>
                        <h4 class="text-secondary">How often would you like us provide service?</h4>
                        <div class="row">
                            <div class="form-group col-md-3">
                                <label style="font-size:12px;">Save %10%</label>
                                <input type="text" class="form-control" value="Monthly">
                            </div>
                            <div class="form-group col-md-3">
                                    <label style="font-size:12px;">Save %12.5%</label>
                                    <input type="text" class="form-control" value="Weekly">
                            </div>
                            <div class="form-group col-md-3">
                                    <label style="font-size:12px;">Save %15%</label>
                                    <input type="text" class="form-control" value="Daily">
                            </div>
                            <div class="form-group col-md-3">
                                <label style="font-size:12px;">Zero</label>
                                <input type="text" class="form-control" value="Once">
                            </div>
                        </div>
                    </form>
                </div>
            </div>

       
@endsection

@section('sidebar')
@endsection