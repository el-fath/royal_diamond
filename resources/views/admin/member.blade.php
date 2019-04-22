@extends('../admintemplate')
@section('title')
<title>{{$title}}</title>
@endsection
@section('content')
<div class="col-sm-12">
    <!-- Default ordering table start -->
    <div class="card">
        <div class="card-header">
            <h5>Member Master</h5>
            <!-- <span>Lets say you want to sort the </span> -->
        </div>
        <div class="card-block">
        @if (session('alert'))
            <div class="alert alert-success background-success">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <i class="icofont icofont-close-line-circled text-white"></i>
                </button>
                <strong>{{ session('alert') }}</strong>
            </div>
        @endif
        <button type="button" class="btn btn-primary btn-sm waves-effect" data-toggle="modal" data-target="#large-Modal" onclick="add()">Add</button>
        <div class="modal fade" id="large-Modal" tabindex="-1" role="dialog">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title" id="title">Form Member</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form class="form-material" id="form" enctype="multipart/form-data">
                    <div class="modal-body">
                    {{ csrf_field() }}
                        <div class="row">
                            <div class="col-sm-4">
                                <div class="form-group form-primary">
                                    <input type="text" name="name" id="name" class="form-control" required="">
                                    <span class="form-bar"></span>
                                    <label class="float-label">Name</label>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="form-group form-primary">
                                    <input type="text" name="email" id="email" class="form-control" required="">
                                    <span class="form-bar"></span>
                                    <label class="float-label">Email (exa@gmail.com)</label>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="form-group form-primary">
                                    <input type="password" name="password" id="password" class="form-control" required="">
                                    <span class="form-bar"></span>
                                    <label class="float-label">Password</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-radio">
                            <div class="radio radiofill radio-inline">
                                <label>
                                    <input type="radio" name="gender" id="gender-male" value="male">
                                    <i class="helper"></i>Male
                                </label>
                            </div>
                            <div class="radio radiofill radio-inline">
                                <label>
                                    <input type="radio" name="gender" id="gender-female" value="female">
                                    <i class="helper"></i>Female
                                </label>
                            </div>
                        </div>
                        <div class="form-group form-default">
                            <textarea class="form-control" name="address" id="address"></textarea>
                            <span class="form-bar"></span>
                            <label class="float-label">Address</label>
                        </div>
                        <div class="form-group form-default">
                            <div class="sub-title">Upload photo</div>
                            {{-- <input type="file" name="photo" id="filer_input"> --}}
                            <input type="file" class="form-control" name="photo" id="foto" onchange="readURL(this);">
                            <img id="preview" src="https://d3e54v103j8qbb.cloudfront.net/img/image-placeholder.svg" alt="your image" style=" width: 200px;"/>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary waves-effect waves-light ">Save</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>
            <div class="dt-responsive table-responsive">
                <table id="order-table" class="table table-striped table-bordered nowrap">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Gender</th>
                            <th>Address</th>
                            {{-- <th>Photo</th> --}}
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($member as $val)
                        <tr>
                            <td>{{ $val->name }}</td>
                            <td>{{ $val->gender }}</td>
                            <td>{{ $val->address }}</td>
                            {{-- <td>{{ $val->photo }}</td> --}}
                            <td>
                                <form action="{{ route('member.destroy', $val->id) }}" method="post">
                                    {{ csrf_field() }}
                                    {{ method_field('DELETE') }}
                                    <div class="btn-group " role="group" data-toggle="tooltip">
                                    <button type="button" class="btn btn-success btn-mini" id="{{ $val->id }}" onClick="edit(this.id)" data-toggle="modal" data-target="#large-Modal">
                                        <i class="fa fa-pencil"></i>
                                    </button>
                                    <button type="submit" class="btn btn-danger btn-mini" onclick="return confirm('Yakin ingin menghapus data?')">
                                        <i class="fa fa-trash"></i>
                                    </button>
                                    </div>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                    <tfoot>
                        <tr>
                            <th>Name</th>
                            <th>Gender</th>
                            <th>Address</th>
                            {{-- <th>Photo</th> --}}
                            <th>Action</th>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>
    </div>
    <!-- Default ordering table end -->
</div>
<script type="text/javascript">
function edit(id){
    $.ajax({
        url: "{{ URL('admin/member') }}/"+ id,
        type: 'GET',
        success: function(response){
            // console.log(response);
            $('#title').html("Form Edit Member")
            $("#name").val(response.name);
            $("#email").val(response.email);
            $("#password").val(response.password);
            // $("#confirm-password").val(response.password);
            if ( response.gender === "male" ) {
                $("#gender-male").prop("checked", true);                
            }else{
                $("#gender-female").prop("checked", true);
            }
            $("#address").val(response.address);
            $('#preview').attr('src', "{{ url('public/image/member') }}/"+ response.photo);
            $('#form').attr('method', "post");
            $('#form').attr('action', "{{ URL('admin/member') }}/"+ id);
        }
    })
}
function add(){
    $('#title').html("Form Add Member")
    $("#name").val("");
    $("#email").val("");
    $("#password").val("");
    // $("#confirm-password").val("");
    $("#gender-male").prop("checked", false);                
    $("#gender-female").prop("checked", false);
    $("#address").val("");
    $('#preview').attr('src', "https://d3e54v103j8qbb.cloudfront.net/img/image-placeholder.svg");
    $('#form').attr('action', "{{ route('member.store') }}");
    $('#form').attr('method', "post");
}
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