<div class="blog-item fw-col-md-4">
    <div class="fw-row">
        <div class="image fw-col-sm-5 fw-col-md-12"><a href="{{ url('/blog/'.$row->url_segment) }}"><img src="{{$row->PhotoPathSmall}}" alt="{{$row->title}}"></a></div>
        <div class="fw-col-sm-7 fw-col-md-12">
            <h4><a href="{{ url('public/assets/main') }}/blog-post.html">{{$row->title}}</a></h4>
            <div class="post-date">{{$row->created_at}}</div>
            <div style="word-break: break-all;">{!! $row->ContentSmall !!}</div>
            <a href="{{ url('/blog/'.$row->url_segment) }}" class="button-style2 gray min">read more</a>
        </div>
    </div>
</div>