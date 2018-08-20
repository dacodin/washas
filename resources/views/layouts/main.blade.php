<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Washas | On Demand</title>
    <link href="{{ asset('css/ws_style.css') }}" rel="stylesheet">
    <!-- Bootstrap CSS -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <!-- Bootstrap font-awesome CDN -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <!-- custom sheet     -->
    <link id="stylesheet" rel="stylesheet" type="text/css" href="{{ asset('css/zInput_default_stylesheet.css') }}">
    <link id="stylesheet" rel="stylesheet" type="text/css" href="{{ asset('css/jquery-radiocharm.css') }}">
    <link id="stylesheet" rel="stylesheet" type="text/css" href="{{ asset('css/datetimepicker.css') }}">
    <link id="stylesheet" rel="stylesheet" type="text/css" href="{{ asset('css/intlTelInput.css') }}">
    <link id="stylesheet" rel="stylesheet" type="text/css" href="{{ asset('css/formProgressBar.css') }}">
    <link id="stylesheet" rel="stylesheet" type="text/css" href="{{ asset('css/side-slider.css') }}">
    <link rel="stylesheet" href="{{asset('css/jquery-ui.css')}}">
    <link rel="stylesheet" href="{{asset('css/jquery.timepicker.min.css')}}">
    <!-- script -->
    <!-- <script src="{{asset('extlibs/fastclick/lib/fastclick.js')}}"></script> -->
    <script src="{{asset('js/jquery-3.3.1.min.js')}}"></script>
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <script src="{{asset('js/ws_script.js')}}"></script>
    <script src="{{asset('js/ws_booking_summary.js')}}"></script>
    <script src="{{asset('js/jquery-ui.js')}}"></script>
    <script src="{{asset('js/jquery.timepicker.min.js')}}"></script>

</head>
<body>
        @include('inc.navbar')
       
        <div class="main container_flex">
            @include('inc.messages')
            <div class="row">
                <div class="col-md-8">
                        @yield('content')
                 </div>
                 @if(Request::is('/'))
                <div class="col-md-4">
                        @include('inc.sidebar')
                 </div>
                 @endif
            </div>
        </div>
   
       @include('inc.footer')
       <!-- custom scripts -->
    <script src="{{asset('js/jquery.side-slider.js')}}"></script>
    {{-- <script src="{{asset('js/sidefollow.js')}}"></script> --}}
    <script src="{{asset('js/zInput.js')}}"></script>
    <script src="{{asset('js/bootstrap-input-spinner.js')}}"></script>
    <script src="{{asset('js/InputSpinner.js')}}"></script>
    <script src="{{asset('js/jquery-radiocharm.js')}}"></script>
    <script src="{{asset('js/datetimepicker.js')}}"></script>
    <script src="{{asset('js/moment-with-locales.min.js')}}"></script>
     <script src="{{asset('js/bootstrap-show-password.js')}}"></script>
     <script src="{{asset('js/intlTelInput.js')}}"></script>
     <script src="{{asset('js/formProgressBar.jquery.js')}}"></script>
     <script src="{{asset('js/ws_sidebar.js')}}"></script>
     {{-- <script src="{{asset('js/payform.js')}}"></script> --}}
     {{-- <script src="{{asset('js/jquery.payform.js')}}"></script> --}}
    

       <!-- end custom scripts -->
       {{-- custom date and time --}}
       
    <script>
            $( function() {
              $( "#datepicker" ).datepicker();
            } );
            </script>
    <script>
        $(document).ready(function(){
            $('input.timepicker').timepicker({ 
                dynamic: true,
                dropdown: true,
                scrollbar: true
            });

        });
    </script>
       <!-- slider -->
        <script type="text/javascript">
            $(".float").sideFollow();
        </script>
        <!-- Custom radio -->
        <script>
            $(function(){


            $("input[name='css_selector']").change(function(){
                $newStyle = $(this).attr("value");
                $('#stylesheet').attr("href", $newStyle);
            });


            });


        </script>


    <script>
        // $(function() {
        //     FastClick.attach(document.body);
        // });

        // $("#affected").zInput();
    </script>
<script>
    $("input[type='number']").InputSpinner()
    $("input.small").InputSpinner({groupClass: "input-group-sm"})
    $("input.large").InputSpinner({groupClass: "input-group-lg"})
</script>
<!--suppress JSUnusedLocalSymbols -->
<script>
    var $changedInput = $("#changedInput")
    var $output = $("#valueOutput")
    $changedInput.on("change", function (event) {
        $output.html($changedInput.val())
    })
    $output.html($changedInput.val())
</script>
<!--suppress JSUnusedLocalSymbols -->
<script>
    var $inputNet = $("#inputNet")
    var $inputGross = $("#inputGross")
    $inputNet.on("change", function (event) {
        $inputGross.val($inputNet.val() * 1.19)
    })
    $inputGross.on("change", function (event) {
        $inputNet.val($inputGross.val() / 1.19)
    })
    $inputGross.val($inputNet.val() * 1.19)
</script>
<!-- other custom checkbox -->
<script>
$(document).ready(function(){
$('.radiocharm').radiocharm();
});
</script>
<!-- Date function -->
  <script type="text/javascript">
            $(document).ready( function () {
                $('#picker').dateTimePicker();
                $('#picker-no-time').dateTimePicker({ showTime: false, dateFormat: 'DD/MM/YYYY'});
            })
    </script>
    <script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-36251023-1']);
  _gaq.push(['_setDomainName', 'jqueryscript.net']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
<!-- show password -->
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-36251023-1']);
  _gaq.push(['_setDomainName', 'jqueryscript.net']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
<!-- tel with flag  -->
<script>
    $(".phone").intlTelInput({
      utilsScript: "{{asset('js/utils.js')}}"
    });
  </script>

      <script>
        var elem = $("#form1").formProgressBar({transitionTime: 500});
    </script>
    <script>
        // var elem = $("#form2").formProgressBar({transitionTime: 500});
    </script>
    <script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-36251023-1']);
  _gaq.push(['_setDomainName', 'jqueryscript.net']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
{{-- side Slide Bar --}}
<script type="text/javascript">
    $(document).ready(function(){
        $('#sideslider').sideSlider();

    });
</script>

</body>
</html>