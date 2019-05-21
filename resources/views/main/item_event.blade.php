<div class="blog-item in-row fw-col-xs-12">
    <div class="fw-row">
        <div class="image fw-col-sm-4"><a href="{{ url('/event/'.$row->url_segment) }}"><img src="{{$row->PhotoPathMedium}}" alt="New investigations"></a></div>
        <div class="fw-col-sm-8">
            <h4><a href="blog-post.html">{{$row->title}}</a></h4>
            <div class="post-date">{{$row->created_at}}</div>
            {!! $row->ContentSmall !!}
            <a href="{{ url('/event/'.$row->url_segment) }}" class="button-style2 gray min">read more</a>
        </div>
    </div>
</div>