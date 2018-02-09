@extends('layouts.main')
@section('title','Blank')
@section('bc')
    <li><a href="#">Sample</a></li>
    <li class="active">Tabel</li>
@endsection
@section('content')
    <div class="box">
        <div class="box-header with-border">
            <h3 class="box-title">Tabel</h3>
            <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
                    <i class="fa fa-minus"></i></button>
                <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
                    <i class="fa fa-times"></i></button>
            </div>
        </div>
        <div class="box-body">
            <form action="#" method="get" >
                <div class="input-group">
                    <input type="text" name="q" class="form-control" placeholder="Search...">
                    <span class="input-group-btn">
                        <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                        </button>
                    </span>
                </div>
            </form>
            <table class="table table-primary">
                <thead>
                <tr>
                    <th>Nama</th>
                    <th>Usia</th>
                    <th>Aksi</th>
                </tr>
                </thead>
                @foreach($people as $data)
                    <tr>
                        <td>{{$data->nama}}</td>
                        <td>{{$data->usia}}</td>
                        <td>
                            <button data-toggle="modal" data-target="#myModal" id="{{$data->id}}" onclick="showDetail(this);" class="btn btn-primary btn-xs"><span class="fa fa-info"></span>&nbsp; Detail</button>
                        </td>
                    </tr>
                @endforeach
            </table>
        </div>
        <div class="box-footer">
            Footer
        </div>
    </div>

    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">Modal title</h4>
                </div>
                <div class="modal-body">
                    <p>Nama : <span id="nama"></span></p>
                    <p>Usia : <span id="usia"></span></p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('js')
    <script>
        function showDetail(button) {
            var custom_id = button.id;
            $.ajax({
                url : "{{route('api.person')}}",
                method : "GET",
                data : {"custom_id" : custom_id},
                success : function (response) {
                    // alert(response);
                    var person = JSON.parse(response);
                    $("#nama").text(person.nama);
                    $("#usia").text(person.usia);

                    $("#myModalLabel").text(person.nama);

                }
            })
        }
    </script>
@endsection