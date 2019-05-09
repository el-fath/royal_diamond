@extends('../template')
@section('title')
    {{$title}}
@endsection
@section('content')

    <!-- Full screen section -->
    <section class="full-screen fw-main-row fixed-height" style="background-color: #ccc; height: 450px; ">
        <div class="fw-container centered-container tac">
            <div class="container tac fw-col-md-5">
                {{--<h2 class="h1"><span class="blue-color">Helping You</span><br>Stay Happy One</h2>--}}
                {{--<p>Check Out Our Services!</p>--}}
                {{--<a href="javascript:void(0);" class="button-style1"><span>CHECK OUT</span></a><a href="javascript:void(0);" class="button-style1 dark"><span>more info</span></a>--}}
            </div>
        </div>
    </section>
    <!-- END Full screen section -->
    <!-- Services ccategory items -->
    <section class="fw-main-row pt40">
        <div class="fw-container">
            <h2 class="heading-decor pb35">{{$title}}</h2>
            <div class="fw-row">
                @foreach($treatment as $row);
                    @include('main.item_treatment')
                @endforeach
            </div>
        </div>
    </section>
    <!-- END Services ccategory items -->
@endsection