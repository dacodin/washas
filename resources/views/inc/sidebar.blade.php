 <!-- Dynamic section -->
 <style>
   td{
     color: white;
   }
  
 </style>
 <div class="sideslider" id="sideslider" style="margin-left: -265px;">
    <div class="sideslider-tab"> Booking </div>
    <a href="#">
        <div id="sideslider-smartbutton">
            <div id="sideslider-text">
                <span class="header">Booking Summary</span>
              </div>
              <div class="card-footer" style="font-size:0.8rem;">
                <table class="table table-borderless">
                  <tbody>
                    <tr id="serviceContainer">
                    </tr>
                    <tr id="date">
                        {{-- <td>Date</td>
                      <td align="right">25-09-2018</td> --}}
                    </tr>
                    <tr id="time">
                        {{-- <td>Time</td>
                      <td align="right">12:45 PM</td> --}}
                    </tr>
                    <tr id="durationContainer">
                      </tr>
                      <tr>
                          <td>Your Cart Items</td>
                        </tr>
                    <tr id="serviceAddon">
                    </tr>
                    <tr>
                      <td>Discount</td>
                      <td align="right">Once</td>
                    </tr>
                    <tr>
                      <td>Total</td>
                      <td align="right">N2000</td>
                    </tr>
                  </tbody>
                </table>
            </div>
            <div class="sideclear"></div>
        </div>

    </a>
    <div class="sideslider-close sideslider-close_en">Close&nbsp;</div>

</div> 


<div class="card text-white bg-dark  mb-3">

        <div class="card-body">
            <video width="250" height="200" controls class="responsive">
              <source src="{{asset('video/intro.mp4')}}" type="video/mp4">
              Your browser does not support HTML5 video.
            </video>
        </div>
</div>
<div class="card text-white bg-danger mb-3" id="summary">
   <div class="card-header">
                <img class="img-responsive rounded-circle service-img mx-auto d-block" src="/img/services/car.jpg">
            <h4 class="text-center">Car Wash</h4>
        </div>
        <div class="card-body">
            <p>Schedule for a complete auto wash from the convenience of your smartphones, and a verified car washer will arrive at your desired location to provide an exclusive and personalized car washing service.</p>
        </div>
</div>
<div class="card text-white bg-success mb-3">
     <div class="card-header">
                    <img class="center-block img-responsive rounded-circle service-img mx-auto d-block" src="/img/services/cloth.jpg">
                <h4 class="text-center">Laundry Service</h4>
            </div>
            <div class="card-body">
                <p>Washas picks up laundry from your preferred location, get them washed and dry cleaned according to indicated preferences and deliver them back to the your doorstep in a 24-48 hours turnaround delivery time.</p>
            </div>
</div>

<div class="card text-white bg-dark mb-3">
   <div class="card-header">
                <img class="img-responsive rounded-circle service-img mx-auto d-block" src="/img/services/car.jpg">
            <h4 class="text-center">House Cleaning</h4>
        </div>
        <div class="card-body">
             <p>Book for a professionally verified home cleaner who will appear at your stated location to get your homes thoroughly cleaned based on the your specification, leaving your home fresh and sparkling.</p>
        </div>
</div>