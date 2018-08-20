@if (Auth::guest())

   
    <h5 class="text-secondary"><a href="#" data-toggle="modal" data-target=".bd-Login-modal-lg">{{ __('Login') }}</a> or <a href="#" data-toggle="modal" data-target=".bd-Register-modal-lg">{{ __('Register') }}</a> to process your order</h5>
    
  
@else
<form >
   
        <h5 class="text-secondary">Appointment Details</h5>
        <hr>
        <div>Full name: <strong class="text-primary">{{$user->surname}} {{$user->firstname}}</strong></div>
        <hr>
        <div class="row">
            <div class="col-md-4 mb-3">
                <label for="appointment_zip">Appointment Zip</label>
                <input name="appointment_zip" type="text" class="form-control" value="{{$user->zipcode}}" required>
            </div>
             <div class="col-md-4 mb-3">
                <label for="appointment_city">Appointment City</label>
                <input name="appointment_city" type="text" class="form-control" placeholder="e.g. Lagos" value="{{$user->city}}" required>
            </div>
            <div class="col-md-4 mb-3">
                <label for="appointment_state">Appointment State</label>
                <input name="appointment_state" type="text" class="form-control" placeholder="e.g. Lagos" value="{{$user->state}}" required>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 mb-3">
              <label for="appointment_address">Appointment Address</label>
                <input name="appointment_address" type="text" class="form-control" placeholder="e.g Block 22, Central Street" value="{{$user->address}}" required>
            </div>
        </div>
        <div class="row">
                <div class="col-md-12 mb-3">
                  <label for="state">Special requests ( Notes )</label>
                  <textarea class="form-control" name="request" row="8" col="10"></textarea>
                </div>
            </div>
        <h5 class="text-secondary">Preferred Payment Method</h5>
        <hr>
        <div class="row">
          <div class="col-md-12">
            <input type="radio" name="form" id="local" checked/>
            <label for="local"><span></span>Pay Locally</label>
            <input type="radio" name="form" id="card" />
            <label for="card"><span></span>Pay with Card</label>
          </div>
        </div>
        <hr>
        <input type="checkbox" name="agreement" id="agreement" required> 
        <label for="agreement"><span></span>I have read and accepted the <a href="">Terms & Conditions</a> and <a href="">Privacy Policy</a></label>
        <br>
        <button class="btn btn-dark col-md-12 btn-lg btn-block">Complete Booking</button>
      
  </form>
  @endif

  