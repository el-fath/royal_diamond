@extends('../admintemplate')
@section('title')
<title>{{$title}}</title>
@endsection
@section('content')
<div class="col-sm-12">
<div class="card">
    <div class="card-header">
        <h5>Website Configuration</h5><span>click choose file for change company icon...!</span>
        <!--<span>Add class of <code>.form-control</code> with <code>&lt;input&gt;</code> tag</span>-->
    </div>
    <div class="card-block">
        <form class="form-material" action="{{$action}}" method="POST" id="formConfig" enctype="multipart/form-data">
            {{ csrf_field() }}
            <div class="row">
                <div class="col-sm-6">
                    {{-- <input type="file" name="photo" id="filer_input"> --}}
                    <span class="form-bar"></span>
                    <input type="file" class="form-control" name="photo" id="foto" onchange="readURL(this);">
                    <img id="preview" 
                    src="{{ url('public/image/config')."/".$data->icon }}" 
                    alt="your image" style=" width: 200px;"/>
                </div>
                <div class="col-sm-6">
                    <input type="text" class="form-control" name="web_name" id="web_name" value="{{ $data->web_name }}" required>
                    <span class="form-bar"></span>
                    <label class="float-label">Web name</label>
                </div>
            </div>
            <div class="form-group form-default">
                <input type="text" class="form-control" name="url_olshop" id="url_olshop" value="{{ $data->url_olshop }}">
                <span class="form-bar"></span>
                <label class="float-label">Url online shop</label>
            </div>
            <div class="form-group form-default">
                <label>Description</label>
                <textarea name="desc" id="desc" required="">{{ $data->description }}</textarea>
            </div>
            <div class="form-group form-default">
                <label>Banner Contact Us 1</label>
                <input type="file" class="form-control" name="baner_1" id="baner_1" onchange="readURLbaner_1(this);">
                <img id="preview_baner_1"
                src="{{ url('public/image/config')."/".$data->contact_us_banner_1 }}" 
                alt="your image" style="max-height:300px; width: 700px;"/>
            </div>
            <div class="form-group form-default">
                <label>Banner Contact Us 2</label>
                <input type="file" class="form-control" name="baner_2" id="baner_2" onchange="readURLbaner_2(this);">
                <img id="preview_baner_2"
                src="{{ url('public/image/config')."/".$data->contact_us_banner_2 }}" 
                alt="your image" style="max-height:300px; width: 700px;"/>
            </div>
            <br>
            <div class="form-group form-default">
                <textarea class="form-control" name="meta_keyword" id="meta_keyword">{{ $data->meta_keyword }}</textarea>
                <span class="form-bar"></span>
                <label class="float-label">Meta keyword</label>
            </div>
            <br>
            <div class="form-group form-default">
                <textarea class="form-control" name="meta_desc" id="meta_desc">{{ $data->meta_desc }}</textarea>
                <span class="form-bar"></span>
                <label class="float-label">Meta description</label>
            </div>
            <br>
            <div class="form-group form-default">
                <textarea class="form-control" name="head_script" id="head_script">{{ $data->head_script }}</textarea>
                <span class="form-bar"></span>
                <label class="float-label">Head script</label>
            </div>
            <br>
            <div class="form-group form-default">
                <textarea class="form-control" name="after_body_script" id="after_body_script">{{ $data->after_body_script }}</textarea>
                <span class="form-bar"></span>
                <label class="float-label">After body script</label>
            </div>
            <br>
            <div class="form-group form-default">
                <textarea class="form-control" name="before_body_script" id="before_body_script">{{ $data->before_body_script }}</textarea>
                <span class="form-bar"></span>
                <label class="float-label">Before body script</label>
            </div>
            {{-- <button type="button" onclick="test()">Basic</button> --}}
            <button type="submit" id="submit-btn" class="btn btn-primary waves-effect waves-light ">Save</button>
        </form>
    </div>
</div>
</div>
<script>
CKEDITOR.replace('desc');
function readURL(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function (e) {
            $('#preview').attr('src', e.target.result);
        }

        reader.readAsDataURL(input.files[0]);
    }
}
function readURLbaner_1(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function (e) {
            $('#preview_baner_1').attr('src', e.target.result);
        }

        reader.readAsDataURL(input.files[0]);
    }
}function readURLbaner_2(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function (e) {
            $('#preview_baner_2').attr('src', e.target.result);
        }

        reader.readAsDataURL(input.files[0]);
    }
}
document.getElementById("formConfig").addEventListener("submit", function(e){
    e.preventDefault()
    var formData = new FormData( $("#formConfig")[0])
    for (instance in CKEDITOR.instances) {
        CKEDITOR.instances[instance].updateElement()
    }
    $.ajax({
    url: $("#formConfig").attr('action'),
        method:'POST',
        data:new FormData(this),
        contentType: false,
        processData: false,
        dataType: 'json',
        success:function(data){
            // console.log(data);
            if (data.Code == 'Error') {
                swal("error!", data.Message, "error")
            }else{
                swal({
                    title: "Succes",
                    text: data.Message,
                    type: "success"
                })
            }
        },
        error:function(data){
            alert("Gagal Menyimpan")
        },
    })
});
</script>
@endsection