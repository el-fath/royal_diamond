@extends('../template')
@section('title')
    {{$title}}
@endsection
@section('content')
    <!-- Blog items -->
    <section class="fw-main-row pt40">
        <div class="fw-container">
            <h2 class="heading-decor pb20">{{$event->title}}</h2>
            <div class="fw-row">
                <div class="fw-col-lg-10 fw-col-lg-offset-1">
                    <a data-fancybox="gallery" href="{{ $event->PhotoPath }}">
                        <img src="{{ $event->PhotoPath }}" alt="{{ $event->title }}" class="img-responsive" style="max-height: 500px;width: 100%;object-fit: cover">
                    </a>
                    <h2 class="pt30 pb10">{{ $event->title }}</h2>
                    <div class="post-content pb30 taj">
                        {!! $event->content !!}
                    </div>
                    {{--<div class="h4 heading-decor">Posted Comments</div>--}}
                    {{--<div class="comment-item">--}}
                    {{--<div class="image"><img src="images/no-photo.jpg" alt="Alexa wrigley" class="retina-img"></div>--}}
                    {{--<div class="text">--}}
                    {{--<h5>Alexa wrigley</h5>--}}
                    {{--<div class="post-date">29/07/2016</div>--}}
                    {{--<div class="post-content">--}}
                    {{--<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec odio. Praesent libero. Sed cursus ante dapibus diam. Nam molestie velit quam, mattis tincidunt ligula tincidunt nec. Fusce accumsan posuere gravida.</p>--}}
                    {{--</div>--}}
                    {{--<a href="javascript:void(0);" class="button-style2 gray min">reply</a>--}}
                    {{--</div>--}}
                    {{--</div>--}}
                    {{--<div class="h4 heading-decor">Leave a Reply</div>--}}
                    {{--<form action="javascript:void(0);" class="form fw-row pb50">--}}
                    {{--<div class="fw-col-sm-6"><input type="text" placeholder="Your Name *" class="style1"></div>--}}
                    {{--<div class="fw-col-sm-6"><input type="text" placeholder="Your Email *" class="style1"></div>--}}
                    {{--<div class="fw-col-md-12">--}}
                    {{--<textarea placeholder="What is the nature of your appointment and who would you like to see? *" class="style1"></textarea>--}}
                    {{--<div class="tac"><button type="submit" class="button-style1"><span>send comment</span></button></div>--}}
                    {{--</div>--}}
                    {{--</form>--}}
                </div>
            </div>
        </div>
    </section>
    <!-- END Blog items -->
@endsection