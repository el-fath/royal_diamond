@extends('../template')
@section('title')
    {{$title}}
@endsection
@section('content')
    <!-- Blog items -->
    <br>
    <section class="fw-main-row pt40">
        <div class="fw-container">
            <h2 class="heading-decor pb20">{{$member->name}}</h2>
            <div class="panel panel-primary">
                <div class="panel panel-body">
                    <form action="{{ route('member.doprofile') }}" method="post" enctype="multipart/form-data" id="formmember">
                        <div class="form-group">
                            <label for="pwd">Password:</label>
                            <input type="password" class="form-control" id="pwd" name="Password">
                        </div>
                        <div class="form-group">
                            <label for="confpwd">Confirm Password:</label>
                            <input type="password" class="form-control" id="confpwd" name="Password">
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- END Blog items -->
@endsection

<script>


    $("#formmember").submit(function(e){
        e.preventDefault();

        var formData = new FormData( $("#formmember")[0] );

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $.ajax({
            type: "POST",
            url: $("#formmember").attr('action'),
            processData: false,
            contentType: false,
            dataType : 'json',
            encode  : true,
            data:  		new FormData(this),
            beforeSend: function(){
                blockMessage($('#formmember'),'Please Wait','#fff');
            }
        }).done(function(data){
            $('#formmember').unblock();
            sweetAlert({
                    title: 	((data.Code!=200) ? "Opps!" : 'Success'),
                    text: 	((data.Code!=200) ?  data.Data : 'Success'),
                    type: 	((data.Code!=200) ? "error" : "success"),
                },
                function(){

                });
        })
            .fail(function() {
                $('#formmember').unblock();
                sweetAlert({
                        title: 	"Opss!",
                        text: 	"Ada Yang Salah! , Silahkan Coba Lagi Nanti",
                        type: 	"error",
                    },
                    function(){
                    });
            })
    });
</script>