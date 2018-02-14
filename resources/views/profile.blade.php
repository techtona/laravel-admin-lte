@extends('layouts.main')

@section('title','Profile')
@section('bc')
    <li class="active">Profile</li>
@endsection
@section('content')
    <div class="box box-primary">
        <div class="box-header with-border">
            <h3 class="box-title">Update</h3>
        </div>
        <form role="form" method="post" action="{{route('profile.update')}}">
            {!! csrf_field() !!}
            <div class="box-body">
                <div class="text-center">
                    <img style="width: 200px; height: 200px" src="{{asset('images/user.jpg')}}" alt="Profile" class="img-circle">
                </div>
                <div class="row">
                    <div class="col-md-4 col-md-offset-5">
                        <div class="form-group">
                            <label>File</label>
                            <input type="file" name="foto_profile">
                            <p class="help-block">Example block-level help text here.</p>
                        </div>
                    </div>
                </div>
                <div class="form-group{{ $errors->has('nama_lengkap') ? ' has-error' : '' }}">
                    <label>Nama Lengkap</label>
                    <input type="text" class="form-control" name="nama_lengkap" placeholder="Nama Lengkap" value="{{old('nama_lengkap')}}">
                    @if ($errors->has('nama_lengkap'))
                        <span class="help-block"><strong>{{ $errors->first('nama_lengkap') }}</strong></span>
                    @endif
                </div>
                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                    <label>Email</label>
                    <input type="text" class="form-control" name="email" placeholder="Email" value="{{old('email')}}">
                    @if ($errors->has('email'))
                        <span class="help-block"><strong>{{ $errors->first('email') }}</strong></span>
                    @endif
                </div>
                <div class="form-group{{ $errors->has('tempat_lahir') ? ' has-error' : '' }}">
                    <label>Tempat Lahir</label>
                    <input type="text" class="form-control" name="tempat_lahir" placeholder="Tempat Lahir" value="{{old('tempat_lahir')}}">
                    @if ($errors->has('tempat_lahir'))
                        <span class="help-block"><strong>{{ $errors->first('tempat_lahir') }}</strong></span>
                    @endif
                </div>
                <div class="form-group{{ $errors->has('tanggal_lahir') ? ' has-error' : '' }}">
                    <label>Tanggal Lahir</label>
                    <input type="text" class="form-control" name="tanggal_lahir" placeholder="Tanggal Lahir" value="{{old('tanggal_lahir')}}">
                    @if ($errors->has('tanggal_lahir'))
                        <span class="help-block"><strong>{{ $errors->first('tanggal_lahir') }}</strong></span>
                    @endif
                </div>
                <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                    <label>Password</label>
                    <input type="text" class="form-control" name="password" placeholder="Password" value="{{old('password')}}">
                    @if ($errors->has('password'))
                        <span class="help-block"><strong>{{ $errors->first('password') }}</strong></span>
                    @endif
                </div>
                <div class="form-group{{ $errors->has('konfirmasi_password') ? ' has-error' : '' }}">
                    <label>Konfirmasi Password</label>
                    <input type="text" class="form-control" name="konfirmasi_password" placeholder="Konfirmasi Password" value="{{old('konfirmasi_password')}}">
                    @if ($errors->has('konfirmasi_password'))
                        <span class="help-block"><strong>{{ $errors->first('konfirmasi_password') }}</strong></span>
                    @endif
                </div>
                <div class="form-group{{ $errors->has('password_baru') ? ' has-error' : '' }}">
                    <label>Password Baru</label>
                    <input type="text" class="form-control" name="password_baru" placeholder="Password Baru" value="{{old('password_baru')}}">
                    @if ($errors->has('password_baru'))
                        <span class="help-block"><strong>{{ $errors->first('password_baru') }}</strong></span>
                    @endif
                </div>


                <div class="checkbox">
                    <label>
                        <input type="checkbox"> Check me out
                    </label>
                </div>
            </div>
            <!-- /.box-body -->

            <div class="box-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>
    </div>
@endsection