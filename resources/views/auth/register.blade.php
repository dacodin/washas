
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}" aria-label="{{ __('Register') }}">
                        @csrf
                        <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label for="email">Preferred Email</label>
                                    <input name="email" type="email" class="form-control" placeholder="Enter Email to Login" >
                                </div>
                                <div class="col-md-6 mb-3 ">
                                    <label for="password">Preferred Password</label>
                                    <div class="input-group">
                                     <input type="password" name="password" class="form-control" data-toggle="password">
                                    <div class="input-group-append">
                                      <span class="input-group-text"><i class="fa fa-eye"></i></span>
                                    </div>
                                    </div>
                                </div>
                            </div>
                             <div class="row">
                                <div class="col-md-6 mb-3">
                                        <label for="surname">Surname</label>
                                        <input name="surname" type="text" class="form-control" placeholder="Enter Surname" value="" required>
                                    </div>
                                <div class="col-md-6 mb-3">
                                    <label for="firstname">First Name</label>
                                    <input name="firstname" type="text" class="form-control" placeholder="Enter First Name" value="" required>
                                </div>
                                
                            </div>
                             <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label for="firstname" class="col-md-12 float-left">Phone</label>
                                    <input name="phone" type="tel" class="form-control phone col-md-12" required>
                                </div>
                                 <div class="col-md-6 mb-3">
                                    <label for="address">Street Address</label>
                                    <input name="address" type="text" class="form-control" placeholder="e.g Block 22, Central Street" value="" required>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4 mb-3">
                                    <label for="zipcode">Zip Code</label>
                                    <input name="zipcode" type="text" class="form-control"  placeholder="e.g. 90001"required>
                                </div>
                                 <div class="col-md-4 mb-3">
                                    <label for="city">City</label>
                                    <input name="city" type="text" class="form-control" placeholder="e.g. Lagos" value="" required>
                                </div>
                                <div class="col-md-4 mb-3">
                                    <label for="state">State</label>
                                    <input name="state" type="text" class="form-control" placeholder="e.g. Lagos" value="" required>
                                </div>
                            </div>
                         
                            <hr>
                            <input type="checkbox" name="agreement" id="agreement" required> 
                            <label for="agreement"><span></span>I have read and accepted the <a href="">Terms & Conditions</a> and <a href="">Privacy Policy</a></label>
                            <br>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Submit Registration Form') }}
                                </button>
                            </div>
                        </div>
                        
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

