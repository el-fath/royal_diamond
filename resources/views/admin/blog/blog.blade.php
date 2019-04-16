@extends('../admintemplate')
@section('title')
<title>{{$title}}</title>
@endsection
@section('content')
<div class="col-sm-12">
    <!-- Default ordering table start -->
    <div class="card">
        <div class="card-header">
            <h5>Blog Master</h5>
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
        <a class="btn btn-primary btn-sm" href="{{ route('blog.add') }}">Add</a>
            <div class="dt-responsive table-responsive">
                <table id="order-table" class="table table-striped table-bordered nowrap">
                    <thead>
                        <tr>
                            <th>Title</th>
                            <th>Content</th>
                            <th>view</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($blog as $val)
                        <tr>
                            <td>{{ $val->title }}</td>
                            <td>{{ Str::limit($val->content, $limit = 70, $end = '...') }}</td>
                            <td>{{ $val->view }}</td>
                            <td>
                                <form action="{{ route('blog.destroy', $val->id) }}" method="post">
                                    {{ csrf_field() }}
                                    {{ method_field('DELETE') }}
                                    <div class="btn-group " role="group" data-toggle="tooltip">
                                    <a class="btn btn-success btn-mini" href="{{ route('blog.destroy', $val->id) }}">                                        
                                        <i class="fa fa-pencil"></i>
                                    </a>
                                    <button type="submit" class="btn btn-danger btn-mini"
                                    onclick="return confirm('Yakin ingin menghapus data?')">
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
                            <th>Title</th>
                            <th>Content</th>
                            <th>view</th>
                            <th>Action</th>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection