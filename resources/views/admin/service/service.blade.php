@extends('../admintemplate')
@section('title')
<title>{{$title}}</title>
@endsection
@section('content')
<div class="col-sm-12">
    <!-- Default ordering table start -->
    <div class="card">
        <div class="card-header">
            <h5>Service Master</h5>
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
            <a class="btn btn-primary btn-sm" href="{{ route('service.add') }}">Add</a>
            <div class="dt-responsive table-responsive">
                <table id="order-table" class="table table-striped table-bordered nowrap">
                    <thead>
                        <tr>
                            <th>Icon</th>
                            <th>Title</th>
                            <th>Description</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($service as $val)
                        <tr>
                            <td>Icon</td>
                            <td>{{ $val->title }}</td>
                            <td>{!! Str::limit($val->description, $limit = 70, $end = '...') !!}</td>
                            <td>
                                <form action="{{ route('service.destroy', $val->id) }}" id="delete_data{{ $val->id }}" method="post">
                                    {{ csrf_field() }}
                                    {{ method_field('DELETE') }}
                                    <div class="btn-group " role="group" data-toggle="tooltip">
                                    <a class="btn btn-success btn-mini" href="{{ route('service.show', $val->id) }}">                                        
                                        <i class="fa fa-pencil"></i>
                                    </a>
                                    <button type="button" class="btn btn-danger btn-mini" id="{{ $val->id }}" onClick="hapus(this.id)">
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
                            <th>Icon</th>
                            <th>Title</th>
                            <th>Description</th>
                            <th>Action</th>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>
    </div>
</div>
<script>
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
</script>
@endsection