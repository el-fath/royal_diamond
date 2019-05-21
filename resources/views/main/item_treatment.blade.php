<div class="fw-col-sm-4">
    <!-- Category item -->
    <div class="category-item" style="background-image: url({{$row->PhotoPathSmall}})">
        <div class="centered-container">
            <a href="{{ url('/treatment/'.$row->url_segment) }}" class="button-style2 white big"><span>{{$row->name}}</span></a>
        </div>
    </div>
    <!-- END Category item -->
</div>