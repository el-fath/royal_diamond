@extends('../admintemplate')
@section('title')
<title>{{$title}}</title>
@endsection
@section('content')
<div class="col-sm-12">
<div class="card">
    <div class="card-header">
        <h5>Form {{$title}} Team</h5>
        <!--<span>Add class of <code>.form-control</code> with <code>&lt;input&gt;</code> tag</span>-->
    </div>
    <div class="card-block">
        <form class="form-material" action="{{$action}}" method="POST" enctype="multipart/form-data">
            {{ csrf_field() }}
            <div class="form-group form-default">
                <input type="text" name="name" id="name" class="form-control" value="{{ $title == 'Add' ? "" : $data->name }}" required="">
                <span class="form-bar"></span>
                <label class="float-label">Name</label>
            </div>
            <div class="form-group form-default">
                <input type="text" name="position" id="position" class="form-control" value="{{ $title == 'Add' ? "" : $data->position }}" required="">
                <span class="form-bar"></span>
                <label class="float-label">Position</label>
            </div>
            <div class="form-group form-default">
                <label>Content</label>
                <textarea name="content" id="content" required="">{{ $title == 'Add' ? "" : $data->content }}</textarea>
            </div>
            <div class="form-group form-default">
                <label>photo</label>
                {{-- <input type="file" name="photo" id="filer_input"> --}}
                <input type="file" class="form-control" name="photo" id="foto" onchange="readURL(this);">
                <img id="preview" 
                src="{{ $title == 'Add' ? "https://d3e54v103j8qbb.cloudfront.net/img/image-placeholder.svg" : url('public/image/team')."/".$data->photo }}" 
                alt="your image" style=" width: 200px;"/>
            </div>
            <button type="submit" class="btn btn-primary waves-effect waves-light ">Save</button>
        </form>
    </div>
</div>
</div>
<script>
CKEDITOR.replace('content');
function readURL(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function (e) {
            $('#preview').attr('src', e.target.result);
        }

        reader.readAsDataURL(input.files[0]);
    }
}
</script>
@endsection