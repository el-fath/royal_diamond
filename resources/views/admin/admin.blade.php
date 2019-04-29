@extends('../admintemplate')
@section('title')
<title>{{$title}}</title>
@endsection
@section('content')
<div class="col-sm-12">
    <!-- Default ordering table start -->
    <div class="card">
        <div class="card-header">
            <h5>Admin Master</h5>
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
                        <h4 class="modal-title" id="title">Form Admin</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form class="form-material" id="form" enctype="multipart/form-data">
                    <div class="modal-body">
                    {{ csrf_field() }}
                        <div class="form-group form-default">
                            <input type="text" name="name" id="name" class="form-control" required="">
                            <span class="form-bar"></span>
                            <label class="float-label">Name</label>
                        </div>
                        <div class="form-group form-default">
                            <input type="text" name="username" id="username" class="form-control" required="">
                            <span class="form-bar"></span>
                            <label class="float-label">Username</label>
                        </div>
                        <div class="form-group form-default">
                            <input type="password" name="password" id="password" class="form-control" required="">
                            <span class="form-bar"></span>
                            <label class="float-label">Password</label>
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
                            <th>Username</th>
                            <th>Role</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($admin as $val)
                        <tr>
                            <td>{{ $val->name }}</td>
                            <td>{{ $val->username }}</td>
                            <td>{{ $val->role }}</td>
                            <td>
                                <form action="{{ route('admin.destroy', $val->id) }}" id="delete_data{{ $val->id }}" method="post">
                                    {{ csrf_field() }}
                                    {{ method_field('DELETE') }}
                                    <div class="btn-group " role="group" data-toggle="tooltip">
                                    <button title="edit data" type="button" class="btn btn-success btn-mini" id="{{ $val->id }}" onClick="edit(this.id)" data-toggle="modal" data-target="#large-Modal">
                                        <i class="fa fa-pencil"></i>
                                    </button>
                                    <button title="reset password" type="button" 
                                        class="btn btn-warning btn-mini" id="{{ $val->id }}" onClick="resetpass(this.id)">
                                        <i class="ti-lock"></i>
                                    </button>
                                    <button title="delete data" type="button" class="btn btn-danger btn-mini" id="{{ $val->id }}" onClick="hapus(this.id)">
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
                            <th>Username</th>
                            <th>Role</th>
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
        url: "{{ URL('admin/admin') }}/"+ id,
        type: 'GET',
        success: function(response){
            console.log(response);
            $('#title').html("Form Edit admin")
            $("#name").val(response.name);
            $("#username").val(response.username);
            // $("#password").val(response.password);
            $("#password").prop('disabled', true);
            $('#form').attr('method', "post");
            $('#form').attr('action', "{{ URL('admin/admin') }}/"+ id);
        }
    })
}
function add(){
    $('#title').html("Form Add admin")
    $("#name").val("");
    $("#username").val("");
    $("#password").val("");
    $("#password").prop("disabled", false);
    $('#form').attr('action', "{{ route('admin.store') }}");
    $('#form').attr('method', "post");
}
function resetpass(id){
    swal({
        title: "Are you sure?",
        text: "Password will be reset by default",
        type: "warning",
        showCancelButton: true,
        confirmButtonColor: "#DD6B55",
        confirmButtonText: "Yes, reset",
        cancelButtonText: "No, cancel",
        closeOnConfirm: false,
        closeOnCancel: false
    },
    function(isConfirm){
        if (isConfirm) {
            swal({
                title: "Okey",
                text: "Password will be reset",
                type: "success",
            },function(){
                window.location = "{{ url('admin/resetpass') }}" + "/admin/" + id ;
            });
            } else {
            swal("Cancelled", "Your data is safe :)", "error");
        }
    });
    return false;
}
function hapus(id){
    swal({
        title: "Are you sure?",
        text: "You will not be able to recover this data...!",
        type: "warning",
        showCancelButton: true,
        confirmButtonColor: "#DD6B55",
        confirmButtonText: "Yes, delete it",
        cancelButtonText: "No, cancel",
        closeOnConfirm: false,
        closeOnCancel: false
    },
    function(isConfirm){
        if (isConfirm) {
            swal({
                title: "Okey",
                text: "Data will be deleted",
                type: "success",
            },function(){
                document.getElementById("delete_data"+id).submit();
            });
            } else {
            swal("Cancelled", "Your data is safe :)", "error");
        }
    });
    return false;
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