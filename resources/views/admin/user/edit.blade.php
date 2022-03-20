@extends('layouts.admin.app')

@section('content')
<div class="content">
<div class="card">
<div class="card-header">
                    <div class="row ml-3">
                    <h4 class="card-title">{{ $title }}</h4>
                    </div>
  </div>
  </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <form method="post"action="{{ $route }}">
                @csrf
                    @method('put')
                 
                    <div class="form-row">
                    <div class="form-group col-md-6 ">
                        <label for="nik">NIK</label>
                        <input type="text" class="form-control" id="nik" placeholder="NIK" name="nik" value="{{ $user->nik }}">
                    </div>

                        <div class="form-group  col-md-6">
                            <label for="pob">Nama Lengkap</label>
                            <input type="text" class="form-control" id="name" placeholder="Nama Lengkap" name="name" value="{{ $user->name }}">
                        </div>

                        <div class="form-group  col-md-6">
                        <label for="gender">Jenis Kelamin</label>
                        <select class="form-control" id="gender" name="jk" value="">
                            <option value="Laki-laki">Laki-laki</option>
                            <option value="Perempuan">Perempuan</option>
                        </select>
                      </div>
                      <div class="form-group  col-md-6">
                        <label for="alamat">Tempat Tinggal</label>
                        <input type="text" class="form-control" id="alamat" placeholder="Alamat" name="alamat" value="{{ $user->alamat }}">
                      </div>

                      <div class="form-group  col-md-6">
                        <label for="telp">Tanggal Lahir</label>
                        <input type="date" class="form-control" id="tgl_lahir" placeholder="Tanggal Lahir" name="tgl_lahir" value="{{ $user->tgl_lahir }}">
                      </div>


                      <div class="form-group  col-md-6">
                        <label for="telp">Nomer Telpon</label>
                        <input type="text" class="form-control" id="telp" placeholder="Telp" name="telp" value="{{ $user->tlp }}">
                      </div>

                      <div class="form-group col-md-6">
                        <label for="photo">Foto</label>
                        <input type="file" class="form-control" id="photo" placeholder="Foto" name="photo" value="{{ $user->photo }}">
                      </div>

                       <div class="form-group  col-md-6">
                          <label for="email">Email</label>
                          <input type="email" class="form-control" id="email" placeholder="Email" name="email" value="{{ $user->email }}">
                        </div>

                        <div class="form-group  col-md-6">
                            <label for="email">Password</label>
                            <input type="password" class="form-control" id="password" placeholder="Email" name="password"  value="{{ $user->password }}" >
                          </div>
                    </div>

                        <button type="submit" class="btn btn-primary" >Ubah  Data</button>
                  </form>
            </div>
        </div>
    
    </div>
@endsection