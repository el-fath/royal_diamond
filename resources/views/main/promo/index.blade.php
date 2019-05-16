@extends('../template')
@section('title')
    {{$title}}
@endsection
@section('content')
    <!-- Blog items -->
    <section class="fw-main-row pt40">
        <div class="fw-container">
            <h2 class="heading-decor pb20">Article</h2>
            <div class="fw-row">
                <!-- Blog item -->
                <div class="blog-item in-row fw-col-xs-12">
                    <div class="fw-row">
                        <div class="image fw-col-sm-4"><a href="blog-post.html"><img src="http://placehold.it/370x270" alt="New investigations"></a></div>
                        <div class="fw-col-sm-8">
                            <h4><a href="blog-post.html">New investigations</a></h4>
                            <div class="post-date">29/07/2016</div>
                            <p>Praesent tincidunt molestie libero mollis porta. Faucibus leo, ac aliquet magna. Vivamus ullamcorper mollis leo, at sagittis mi pellentesque quis.</p>
                            <a href="blog-post.html" class="button-style2 gray min">read more</a>
                        </div>
                    </div>
                </div>
                <!-- END Blog item -->
                <!-- Blog item -->
                <div class="blog-item in-row fw-col-xs-12">
                    <div class="fw-row">
                        <div class="image fw-col-sm-4"><a href="blog-post.html"><img src="http://placehold.it/370x270" alt="Your Health"></a></div>
                        <div class="fw-col-sm-8">
                            <h4><a href="blog-post.html">Your Health</a></h4>
                            <div class="post-date">29/07/2016</div>
                            <p>Praesent tincidunt molestie libero mollis porta. Faucibus leo, ac aliquet magna. Vivamus ullamcorper mollis leo, at sagittis mi pellentesque quis.</p>
                            <a href="blog-post.html" class="button-style2 gray min">read more</a>
                        </div>
                    </div>
                </div>
                <!-- END Blog item -->
                <!-- Blog item -->
                <div class="blog-item in-row fw-col-xs-12">
                    <div class="fw-row">
                        <div class="image fw-col-sm-4"><a href="blog-post.html"><img src="http://placehold.it/370x270" alt="Researches"></a></div>
                        <div class="fw-col-sm-8">
                            <h4><a href="blog-post.html">Researches</a></h4>
                            <div class="post-date">29/07/2016</div>
                            <p>Praesent tincidunt molestie libero mollis porta. Faucibus leo, ac aliquet magna. Vivamus ullamcorper mollis leo, at sagittis mi pellentesque quis.</p>
                            <a href="blog-post.html" class="button-style2 gray min">read more</a>
                        </div>
                    </div>
                </div>
                <!-- END Blog item -->
            </div>
            <!-- Pagination -->
            <div class="pagination">
                <a href="javascript:void(0);" class="active">1</a>
                <a href="javascript:void(0);">2</a>
                <a href="javascript:void(0);">3</a>
                <a href="javascript:void(0);">4</a>
                <a href="javascript:void(0);"><i class="icon-font icon-right-arrow"></i></a>
            </div>
            <!-- END Pagination -->
        </div>
    </section>
    <!-- END Blog items -->
@endsection