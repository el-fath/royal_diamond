@extends('../admintemplate')
@section('title')
<title>{{$title}}</title>
@endsection
@section('content')
<div class="col-sm-12">
<div class="card">
    <div class="card-header">
        <h5>Form {{$title}} Service</h5>
        <!--<span>Add class of <code>.form-control</code> with <code>&lt;input&gt;</code> tag</span>-->
    </div>
    <div class="card-block">
        <form class="form-material" action="{{$action}}" method="POST" enctype="multipart/form-data">
            {{ csrf_field() }}
            <div class="form-group form-default">
                <input type="text" name="icon" id="icon" class="form-control" value="{{ $title == 'Add' ? "" : $data->icon }}" required="">
                <span class="form-bar"></span>
                <label class="float-label">icon</label>
            </div>
            <div class="form-group form-default">
                <input type="text" name="title" id="title" class="form-control" value="{{ $title == 'Add' ? "" : $data->title }}" required="">
                <span class="form-bar"></span>
                <label class="float-label">Title</label>
            </div>
            <div class="form-group form-default">
                <label>Description</label>
                <textarea name="description" id="description" required="">{{ $title == 'Add' ? "" : $data->description }}</textarea>
            </div>
            <button type="submit" class="btn btn-primary waves-effect waves-light ">Save</button>
        </form>
    </div>
</div>
</div>
<script>
CKEDITOR.replace('description');
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