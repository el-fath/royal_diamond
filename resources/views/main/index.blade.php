@extends('../template')
@section('title')
    {{$title}}
@endsection
@section('content')

    <!-- Slider main container -->
    <div class="swiper-container">
        <!-- Additional required wrapper -->
        <div class="swiper-wrapper">
            <!-- Slides -->
            @foreach($slide as $row)
                <div class="swiper-slide">
                    <!-- Full screen section -->
                        <section class="full-screen fw-main-row" style="background-image: url({{$row->PhotoPathMedium}});">
                            <div class="fw-container centered-container tar">
                                <div class="container tar fw-col-xs-12 fw-col-sm-6 fw-col-md-5">
                                    <h2 class="h1" data-fancybox="gallery" href="{{ $row->PhotoPathMedium }}"><span class="blue-color">{{$row->title}}</span></h2>
                                    <div style="word-break: break-all;">{!! $row->ContentSmall !!}</div>
                                    <a href="{{ url('/promo/'.$row->url_segment) }}" class="button-style1"><span>CHECK OUT</span></a>
                                </div>
                            </div>
                        </section>
                    <!-- END Full screen section -->
                </div>
            @endforeach
        </div>
        <div class="swiper-pagination"></div>
        <!-- If we need navigation buttons -->
        <div class="swiper-button-prev"></div>
        <div class="swiper-button-next"></div>

        <!-- If we need scrollbar -->
        <div class="swiper-scrollbar"></div>
    </div>




    <script>
        var mySwiper = new Swiper ('.swiper-container', {
            // Optional parameters
            direction: 'horizontal',
            loop: true,
            autoplay: {
                delay: 5000,
            },
            // If we need pagination
            pagination: {
                el: '.swiper-pagination',
            },

            // Navigation arrows
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },

            // And if we need scrollbar
            scrollbar: {
                el: '.swiper-scrollbar',
            },
        })
    </script>

    <!-- Category items -->
    <section class="fw-main-row pt45 pb20">
        <div class="fw-container">
            <h2 class="heading-decor pb20">Latest Treatment</h2>
            <div class="fw-row">
                @foreach($treatment as $row)
                    @include('main.item_treatment')
                @endforeach
            </div>
        </div>
    </section>
    <!-- END Category items -->
    <section class="fw-main-row dark-bg pt20" style="background-color: #ccc">
        <div class="fw-container">
            <h2 class="heading-decor pb20">Promo</h2>
            <!-- Team carousel -->
            <section class="team-carousel">
                @foreach($promo as $row)
                    @include('main.item_promo')
                @endforeach
            </section>
            <!-- END Team carousel -->
        </div>
    </section>
    <section class="fw-main-row pt40 pb40">
        <div class="fw-container">
            <h2 class="heading-decor pb35">Our Services</h2>
            <div class="fw-row">
                @foreach($service as $row)
                    @include('main.item_service')
                @endforeach
            </div>
        </div>
    </section>
    {{--<section class="fw-main-row dark-bg pt35 pb20" style="background-image: url(http://placehold.it/1980x350)">--}}
        {{--<div class="fw-container">--}}
            {{--<div class="fw-row">--}}
                {{--<!-- Icon box style 2 -->--}}
                {{--<div class="fw-col-xs-6 fw-col-sm-6 fw-col-md-3 icon-box2-item">--}}
                    {{--<div class="icon medical-icon med-icon-cardiogram"></div>--}}
                    {{--<span>over</span>--}}
                    {{--<div class="number animateNumber" data-num="180">180</div>--}}
                    {{--<h4>saved hearts</h4>--}}
                {{--</div>--}}
                {{--<!-- END Icon box style 2 -->--}}
                {{--<!-- Icon box style 2 -->--}}
                {{--<div class="fw-col-xs-6 fw-col-sm-6 fw-col-md-3 icon-box2-item">--}}
                    {{--<div class="icon medical-icon med-icon-premolar-2"></div>--}}
                    {{--<span>over</span>--}}
                    {{--<div class="number animateNumber" data-num="2568">2568</div>--}}
                    {{--<h4>saved tooth</h4>--}}
                {{--</div>--}}
                {{--<!-- END Icon box style 2 -->--}}
                {{--<!-- Icon box style 2 -->--}}
                {{--<div class="fw-col-xs-6 fw-col-sm-6 fw-col-md-3 icon-box2-item">--}}
                    {{--<div class="icon medical-icon med-icon-lungs"></div>--}}
                    {{--<span>over</span>--}}
                    {{--<div class="number animateNumber" data-num="112">112</div>--}}
                    {{--<h4>saved lungs</h4>--}}
                {{--</div>--}}
                {{--<!-- END Icon box style 2 -->--}}
                {{--<!-- Icon box style 2 -->--}}
                {{--<div class="fw-col-xs-6 fw-col-sm-6 fw-col-md-3 icon-box2-item">--}}
                    {{--<div class="icon medical-icon med-icon-stomach"></div>--}}
                    {{--<span>over</span>--}}
                    {{--<div class="number animateNumber" data-num="235">235</div>--}}
                    {{--<h4>saved stomaches</h4>--}}
                {{--</div>--}}
                {{--<!-- END Icon box style 2 -->--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</section>--}}
    {{--<section class="fw-main-row dark-bg pt20" style="background-color: #ccc">--}}
        {{--<div class="fw-container">--}}
            {{--<h2 class="heading-decor pb20">Our Teams</h2>--}}
            {{--<!-- Team carousel -->--}}
            {{--<section class="team-carousel">--}}
                {{--@foreach($team as $row)--}}
                    {{--@include('main.item_team')--}}
                {{--@endforeach--}}
            {{--</section>--}}
            {{--<!-- END Team carousel -->--}}
        {{--</div>--}}
    {{--</section>--}}
    <section class="fw-main-row pt40">
        <div class="fw-container">
            <h2 class="heading-decor pb20">Latest from Article</h2>
            <div class="fw-row">
                @foreach($blog as $row)
                    <!-- Blog item -->
                    @include('main.item_blog')
                    <!-- END Blog item -->
                @endforeach
            </div>
        </div>
    </section>
@endsection