<!-- Team item -->
<div class="team-item">
    <div class="image"><a href="{{ url('/team/'.$row->url_segment) }}"><img class="img-responsive" style="max-height: 368px;" src="{{$row->PhotoPath}}" alt="{{$row->title}}"></a></div>
    <div class="name">
        <h4>{{$row->name}}</h4>
        <span>{{$row->position}}</span>
    </div>
    <div class="timetable">
       {{$row->ContentSmall}}
    </div>
    <a href="{{ url('/team/'.$row->url_segment) }}" class="button-style2"><span>read profile</span></a>
</div>
<!-- END Team item -->