@extends('../template')
@section('title')
    {{$title}}
@endsection
@section('content')
    <!-- Full screen section -->
    <section class="full-screen fw-main-row fixed-height" style="background-image: url(http://placehold.it/1980x450);height:450px;">
        <div class="fw-container centered-container tac">
            <div class="container tac">

            </div>
        </div>
    </section>
    <!-- END Full screen section -->
    <section class="fw-main-row pt40 pb30">
        <div class="fw-container">
            <h2 class="heading-decor">Contacts</h2>
            <div class="fw-row pt10">
                <div class="fw-col-xs-12 fw-col-sm-4 contact-col">
                    <div class="icon icon-font icon-placeholder-1"></div>
                    <p>{{$profile->address}}</p>
                </div>
                <div class="fw-col-xs-12 fw-col-sm-4 contact-col">
                    <div class="icon icon-font icon-telephone-1"></div>
                    <p><a href="tel:{{$profile->phone}}">{{$profile->phone}}</a></p>
                </div>
                <div class="fw-col-xs-12 fw-col-sm-4 contact-col">
                    <div class="icon icon-font icon-envelope"></div>
                    <p><a href="mailto:{{$profile->email}}">{{$profile->email}}</a></p>
                </div>
            </div>
        </div>
    </section>
    <!-- Working Hours -->
    <section class="fw-main-row pt40 pb50" style="background-image: url(http://placehold.it/1980x900)">
        <div class="fw-container" style="text-align: center">
            <h2 class="heading-decor pb20">Working Hours</h2>
            <!-- Week days -->
            <div class="fw-row seven-cols pt20 pb40">
                <h3>{{$profile->OpenCloseTime}}</h3>
            </div>
            <!-- END Week days -->
        </div>
    </section>
    <!-- END Working Hours -->
    <!-- Feedback form -->
    <form action="{{$action}}" method="post" id="formconsult">
        <section class="fw-main-row pt30 pb45">
            <div class="fw-container">
                <h2 class="heading-decor pb20">Request a Consultation</h2>
                <form action="javascript:void(0);" class="form fw-row">
                    <div class="fw-col-sm-6 fw-col-md-3"><input type="text" name="Name" placeholder="Your Name *" class="style1"></div>
                    <div class="fw-col-sm-6 fw-col-md-3"><input type="text" name="Phone" placeholder="Phone number *" class="style1"></div>
                    <div class="fw-col-sm-6 fw-col-md-3"><input type="text" name="Email" placeholder="Your Email *" class="style1"></div>
                    <div class="fw-col-sm-6 fw-col-md-3"><input type="text" name="DateTime" id="datetimepicker1" placeholder="Date & Time for call" class="style1"></div>
                    <div class="fw-col-md-12">
                        <textarea placeholder="What is the nature of your appointment and who would you like to see? *" name="Comment" class="style1"></textarea>
                        <div class="tac"><button type="submit" class="button-style1"><span>send request</span></button></div>
                    </div>
                </form>
            </div>
        </section>
    </form>
    <!-- END Feedback form -->
    <!-- Map -->
    <div class="fw-main-row">
        <div id="map" style="height: 395px; width: 100%;"></div>
    </div>
    <!-- END Map -->
    <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&amp;key=AIzaSyBqnMfRjGOw09DMXjrd5vbTgiRHRntQ7N0&amp;sensor=false"></script>
    <script>

        $("#formconsult").submit(function(e){
            e.preventDefault();

            var formData = new FormData( $("#formconsult")[0] );

            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            $.ajax({
                    type: "POST",
                    url: $("#formconsult").attr('action'),
                    processData: false,
                    contentType: false,
                    dataType : 'json',
                    encode  : true,
                    data:  		new FormData(this),
                    beforeSend: function(){
                        blockMessage($('#formconsult'),'Please Wait','#fff');
                    }
                }).done(function(data){
                        $('#formconsult').unblock();
                        sweetAlert({
                                title: 	((data.Code!=200) ? "Opps!" : 'Success'),
                                text: 	((data.Code!=200) ?  data.Data : 'Success'),
                                type: 	((data.Code!=200) ? "error" : "success"),
                            },
                            function(){
                                location.reload();
                            });
                    })
                    .fail(function() {
                        $('#formconsult').unblock();
                        sweetAlert({
                                title: 	"Opss!",
                                text: 	"Ada Yang Salah! , Silahkan Coba Lagi Nanti",
                                type: 	"error",
                            },
                            function(){
                            });
                    })
        });

        $(function () {
            $('#datetimepicker1').datetimepicker({
                locale: 'id'
            });
        });

        function initialize() {
            var myLatlng = new google.maps.LatLng(37.319836, -122.045168);
            var mapOptions = {
                zoom: 16,
                center: myLatlng,
                disableDefaultUI: true,
                scrollwheel: false,
                mapTypeId: google.maps.MapTypeId.ROADMAP
            }
            var map = new google.maps.Map(document.getElementById("map"), mapOptions);

            var myLatLng = new google.maps.LatLng(37.319836, -122.045168);
            var beachMarker = new google.maps.Marker({
                position: myLatLng,
                map: map
            });
            google.maps.event.addDomListener(window, "resize", function() {
                var center = map.getCenter();
                google.maps.event.trigger(map, "resize");
                map.setCenter(center);
            });
        }
        google.maps.event.addDomListener(window, 'load', initialize);
    </script>
@endsection