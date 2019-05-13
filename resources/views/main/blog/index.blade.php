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

                @foreach($blog as $row)
                    <!-- Blog item -->
                    @include('main.item_blog')
                    <!-- END Blog item -->
                @endforeach
            </div>
            <!-- Pagination -->
            <div class="fw-row">
            {{ $blog->links() }}
            </div>
            <!-- END Pagination -->
        </div>
    </section>
    <!-- END Blog items -->
@endsection