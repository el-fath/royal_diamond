<!-- Team item -->
<div class="team-item">
    <div class="image"><a href="{{ url('/promo/'.$row->url_segment) }}"><img class="img-responsive" style="height: 368px;object-fit: cover;" src="{{$row->PhotoPathMedium}}" alt="{{$row->title}}"></a></div>
    <div class="name">
        <h4>{{$row->title}}</h4>
        <span style="word-break: break-all">{!! $row->content !!}</span>
    </div>
    {{--<div class="timetable">--}}
       {{--{{$row->ContentSmall}}--}}
    {{--</div>--}}
</div>
<!-- END Team item -->