@extends('../admintemplate')
@section('title')
<title>Assem</title>
@endsection
@section('content')
<div class="col-sm-12">
    <!-- Default ordering table start -->
    <div class="card">
        <div class="card-header">
            <h5>Default Ordering</h5>
            <!-- <span>Lets say you want to sort the </span> -->
        </div>
        <div class="card-block">
        <button type="button" class="btn btn-primary waves-effect" data-toggle="modal" data-target="#large-Modal">Add</button>
        <div class="modal fade" id="large-Modal" tabindex="-1" role="dialog">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Add Member</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form class="form-material" action="{{ route('adm.store') }}" method="post" enctype="multipart/form-data">
                    <div class="modal-body">
                    {{ csrf_field() }}
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group form-primary">
                                    <input type="text" name="name" class="form-control" required="">
                                    <span class="form-bar"></span>
                                    <label class="float-label">Name</label>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group form-primary">
                                    <input type="text" name="email" class="form-control" required="">
                                    <span class="form-bar"></span>
                                    <label class="float-label">Email (exa@gmail.com)</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-radio">
                            <div class="radio radiofill radio-inline">
                                <label>
                                    <input type="radio" name="gender" value="male">
                                    <i class="helper"></i>Male
                                </label>
                            </div>
                            <div class="radio radiofill radio-inline">
                                <label>
                                    <input type="radio" name="gender" value="female">
                                    <i class="helper"></i>Female
                                </label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group form-primary">
                                    <input type="password" name="password" class="form-control" required="">
                                    <span class="form-bar"></span>
                                    <label class="float-label">Password</label>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group form-primary">
                                    <input type="password" name="confirm-password" class="form-control" required="">
                                    <span class="form-bar"></span>
                                    <label class="float-label">Confirm Password</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group form-default">
                            <textarea class="form-control" name="address"></textarea>
                            <span class="form-bar"></span>
                            <label class="float-label">Address</label>
                        </div>
                        <div class="form-group form-default">
                            <div class="sub-title">Upload photo</div>
                            <!-- <input type="file" name="photo" id="filer_input"> -->
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
                            <th>Photo</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($data as $val)
                        <tr>
                            <td>{{ $val->name }}</td>
                            <td>{{ $val->gender }}</td>
                            <td>{{ $val->address }}</td>
                            <td>{{ $val->photo }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                    <tfoot>
                        <tr>
                            <th>Name</th>
                            <th>Gender</th>
                            <th>Address</th>
                            <th>Photo</th>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>
    </div>
    <!-- Default ordering table end -->
</div>
<script type="text/javascript">
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