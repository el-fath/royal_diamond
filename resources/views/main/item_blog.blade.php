<div class="blog-item fw-col-md-4">
    <div class="fw-row">
        <div class="image fw-col-sm-5 fw-col-md-12"><a href="{{ url('public/assets/main') }}/blog-post.html"><img src="{{$row->PhotoPath}}" alt="{{$row->title}}"></a></div>
        <div class="fw-col-sm-7 fw-col-md-12">
            <h4><a href="{{ url('public/assets/main') }}/blog-post.html">{{$row->title}}</a></h4>
            <div class="post-date">{{$row->created_at}}</div>
            <p>{{$row->content}}</p>
            <a href="{{ url('public/assets/main') }}/blog-post.html" class="button-style2 gray min">read more</a>
        </div>
    </div>
</div>