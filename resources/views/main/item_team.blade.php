<!-- Team item -->
<div class="team-item">
    <div class="image"><a href="{{ url('public/assets/main') }}/doctor-personal-page.html"><img class="img-responsive" style="max-height: 368px;" src="{{$row->PhotoPath}}" alt="{{$row->title}}"></a></div>
    <div class="name">
        <h4>{{$row->name}}</h4>
        <span>{{$row->position}}</span>
    </div>
    <div class="timetable">
       {{$row->content}}
    </div>
    <a href="{{ url('public/assets/main') }}/doctor-personal-page.html" class="button-style2"><span>read profile</span></a>
</div>
<!-- END Team item -->