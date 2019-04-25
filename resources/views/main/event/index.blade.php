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
            {{ $event->links() }}
            <!-- END Pagination -->
        </div>
    </section>
    <!-- END Blog items -->
@endsection