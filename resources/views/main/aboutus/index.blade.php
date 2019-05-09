@extends('../template')
@section('title')
    {{$title}}
@endsection
@section('content')
    <!-- Full screen section -->
    <section class="full-screen fw-main-row" style="background-image: url({{$profile->PhotoPath}});background-position: center;background-size: 500px;">
        <div class="fw-container centered-container tal">
            <div class="container tal">

            </div>
        </div>
    </section>
    <!-- END Full screen section -->
    <section class="fw-main-row pt40 pb50">
        <div class="fw-container">
            <h2 class="heading-decor">About us</h2>
            <div class="fw-row">
                {{--<div class="fw-col-md-6">--}}
                    {{--<img src="{{$profile->PhotoPath}}" style="max-height: 300px;" alt="People">--}}
                {{--</div>--}}
                <div class="fw-col-md-12 content" style="word-wrap: break-word">
                    {!! $profile->desc !!}
                </div>
            </div>
        </div>
    </section>
    <section class="fw-main-row dark-bg pt40" style="background-image: url(http://placehold.it/1980x800)">
        <div class="fw-container">
            <h2 class="heading-decor pb20">Our Team</h2>
            <!-- Team carousel -->
            <section class="team-carousel">
                @foreach($team as $row)
                    @include('main.item_team')
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
    {{--<section class="fw-main-row dark-bg pt35 pb20" style="background-image: url(http://placehold.it/1980x500)">--}}
        {{--<div class="fw-container">--}}
            {{--<div class="fw-row">--}}
                {{--<!-- Icon box style 2 -->--}}
                {{--<div class="fw-col-xs-6 fw-col-md-3 icon-box2-item">--}}
                    {{--<div class="icon medical-icon med-icon-cardiogram"></div>--}}
                    {{--<span>over</span>--}}
                    {{--<div class="number animateNumber" data-num="180">180</div>--}}
                    {{--<h4>saved hearts</h4>--}}
                {{--</div>--}}
                {{--<!-- END Icon box style 2 -->--}}
                {{--<!-- Icon box style 2 -->--}}
                {{--<div class="fw-col-xs-6 fw-col-md-3 icon-box2-item">--}}
                    {{--<div class="icon medical-icon med-icon-premolar-2"></div>--}}
                    {{--<span>over</span>--}}
                    {{--<div class="number animateNumber" data-num="2568">2568</div>--}}
                    {{--<h4>saved tooth</h4>--}}
                {{--</div>--}}
                {{--<!-- END Icon box style 2 -->--}}
                {{--<!-- Icon box style 2 -->--}}
                {{--<div class="fw-col-xs-6 fw-col-md-3 icon-box2-item">--}}
                    {{--<div class="icon medical-icon med-icon-lungs"></div>--}}
                    {{--<span>over</span>--}}
                    {{--<div class="number animateNumber" data-num="112">112</div>--}}
                    {{--<h4>saved lungs</h4>--}}
                {{--</div>--}}
                {{--<!-- END Icon box style 2 -->--}}
                {{--<!-- Icon box style 2 -->--}}
                {{--<div class="fw-col-xs-6 fw-col-md-3 icon-box2-item">--}}
                    {{--<div class="icon medical-icon med-icon-stomach"></div>--}}
                    {{--<span>over</span>--}}
                    {{--<div class="number animateNumber" data-num="235">235</div>--}}
                    {{--<h4>saved stomaches</h4>--}}
                {{--</div>--}}
                {{--<!-- END Icon box style 2 -->--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</section>--}}
@endsection