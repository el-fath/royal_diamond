@extends('../admintemplate')
@section('title')
<title>{{$title}}</title>
@endsection
@section('content')
<div class="col-sm-12">
    <!-- Default ordering table start -->
    <div class="card">
        <div class="card-header">
            <h5>Consultations</h5>
            <!-- <span>Lets say you want to sort the </span> -->
        </div>
        <div class="card-block">
            <div class="modal fade" id="large-Modal" tabindex="-1" role="dialog">
                <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title" id="title">Detail Consultation</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <label>Name     : </label> <label id = "name"></label><br>
                            <label>Email    : </label> <label id = "email"></label><br>
                            <label>Phone    : </label> <label id = "phone"></label><br>
                            <label>Comment  : </label> <label id = "comment"></label><br>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-primary waves-effect waves-light" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>
            @if (session('alert'))
            <div class="alert alert-success background-success">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <i class="icofont icofont-close-line-circled text-white"></i>
                </button>
                <strong>{{ session('alert') }}</strong>
            </div>
            @endif
            <div class="dt-responsive table-responsive">
                <table id="order-table" class="table table-striped table-bordered nowrap">
                    <thead>
                        <tr>
                            <th>Email</th>
                            <th>View</th>
                            <th>Call Date</th>
                            <th>Created_at</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($consultation as $val)
                        <tr>
                            <td>{{ $val->email }}</td>
                            <td>{{ $val->view }}</td>
                            <td>{{ date('d-M-Y', strtotime($val->calltime)) }}</td>
                            <td>{{ date('d-M-Y', strtotime($val->created_at)) }}</td>
                            <td>
                                <button type="button" class="btn btn-primary btn-mini" id="{{ $val->id }}" onClick="edit(this.id)" data-toggle="modal" data-target="#large-Modal">
                                    <i class="fa fa-eye"></i>
                                </button>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                    <tfoot>
                        <tr>
                            <th>Email</th>
                            <th>View</th>
                            <th>Call Date</th>
                            <th>Created_at</th>
                            <th>Action</th>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>
    </div>
</div>
<script>
function edit(id){
    $.ajax({
        url: "{{ URL('admin/consultation') }}/"+ id,
        type: 'GET',
        success: function(response){
            console.log(response);
            $("#name").html(response.name);
            $("#email").html(response.email);
            $("#phone").html(response.phone);
            $("#comment").html(response.comment);
        }
    })
}
</script>
@endsection