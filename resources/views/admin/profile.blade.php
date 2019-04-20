@extends('../admintemplate')
@section('title')
<title>{{$title}}</title>
@endsection
@section('content')
<div class="col-sm-12">
<div class="card">
    <div class="card-header">
        <h5>Profile Configuration</h5>
        <!--<span>Add class of <code>.form-control</code> with <code>&lt;input&gt;</code> tag</span>-->
    </div>
    <div class="card-block">
        <form class="form-material" action="{{$action}}" method="POST" id="formProfile" enctype="multipart/form-data">
            {{ csrf_field() }}
            <div class="row">
                <div class="col-sm-4">
                    <div class="form-group form-primary">
                        <input type="text" name="name" id="name" value="{{ $data->name }}" class="form-control" required="">
                        <span class="form-bar"></span>
                        <label class="float-label">Company name</label>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="form-group form-primary">
                        <input type="email" name="email" id="email" value="{{ $data->email }}" class="form-control" required="">
                        <span class="form-bar"></span>
                        <label class="float-label">Email (exa@gmail.com)</label>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="form-group form-primary">
                        <input type="text" name="phone" id="phone" value="{{ $data->phone }}" class="form-control" required="">
                        <span class="form-bar"></span>
                        <label class="float-label">Phone</label>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-4">
                    <div class="form-group form-primary">
                        <input type="text" name="facebook" id="facebook" value="{{ $data->facebook }}" class="form-control" required="">
                        <span class="form-bar"></span>
                        <label class="float-label">Facebook</label>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="form-group form-primary">
                        <input type="text" name="instagram" id="instagram" value="{{ $data->instagram }}" class="form-control" required="">
                        <span class="form-bar"></span>
                        <label class="float-label">Instagram</label>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="form-group form-primary">
                        <input type="text" name="twitter" id="twitter" value="{{ $data->twitter }}" class="form-control" required="">
                        <span class="form-bar"></span>
                        <label class="float-label">Twitter</label>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6">
                    <div class="form-group form-primary">
                        <input type="text" name="start_day" id="start_day" value="{{ $data->start_day }}" class="form-control" required="">
                        <span class="form-bar"></span>
                        <label class="float-label">Start operation day</label>
                    </div>
                    {{-- <select name="start_day" class="form-control">
                        <option value="senin">Senin</option>
                        <option value="selasa">Selasa</option>
                        <option value="rabu">Rabu</option>
                        <option value="kamis">Kamis</option>
                        <option value="jum'at">Jum'at</option>
                        <option value="sabtu">Sabtu</option>
                        <option value="minggu">Minggu</option>
                    </select> --}}
                </div>
                <div class="col-sm-6">
                    <div class="form-group form-primary">
                        <input type="text" name="end_day" id="end_day" value="{{ $data->end_day }}" class="form-control" required="">
                        <span class="form-bar"></span>
                        <label class="float-label">End operation day</label>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6">
                    <div class="form-group form-primary">
                        <input type="time" name="open_time" id="open_time" value="{{ $data->open_time }}" class="form-control" required="">
                        <span class="form-bar"></span>
                        <label class="float-label">Open time</label>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group form-primary">
                        <input type="time" name="close_time" id="close_time" value="{{ $data->close_time }}" class="form-control" required="">
                        <span class="form-bar"></span>
                        <label class="float-label">Close time</label>
                    </div>
                </div>
            </div>
            <div class="form-group form-default">
                <textarea class="form-control" name="address" id="address" required>{{ $data->address }}</textarea>
                <span class="form-bar"></span>
                <label class="float-label">Address</label>
            </div>
            <div class="form-group form-default">
                <label>Description</label>
                <textarea name="desc" id="desc" required="">{{ $data->desc }}</textarea>
            </div>
            <div class="form-group form-default">
                <label>Logo</label>
                {{-- <input type="file" name="photo" id="filer_input"> --}}
                <input type="file" class="form-control" name="photo" id="foto" onchange="readURL(this);">
                <img id="preview" 
                src="{{ url('public/image/profile')."/".$data->logo }}" 
                alt="your image" style=" width: 200px;"/>
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
// function test() {
//     swal("Good job!", "You clicked the button!", "success")
// }
document.getElementById("formProfile").addEventListener("submit", function(e){
    e.preventDefault()
    var formData = new FormData( $("#formProfile")[0])
    for (instance in CKEDITOR.instances) {
        CKEDITOR.instances[instance].updateElement()
    }
    $.ajax({
    url: $("#formProfile").attr('action'),
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
            alert("Gagal Bro")
        },
    })
});
</script>
@endsection