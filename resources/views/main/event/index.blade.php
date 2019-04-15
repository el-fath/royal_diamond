@extends('../template')
@section('title')
    {{$title}}
@endsection
@section('content')
    <!-- Blog items -->
    <section class="fw-main-row pt40">
        <div class="fw-container">
            <h2 class="heading-decor pb20">Blog</h2>
            <div class="fw-row">
                <!-- Blog item -->
                @foreach($event as $row)
                    @include('main.item_event')
                @endforeach

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