@extends('layouts.admin.app')

@section('content')
    <div class="content">
        <div class="row">
          <div class="col-md-4">
            <div class="card card-user">
              <div class="image">
                <img src="{{ asset('admin/assets/img/damir-bosnjak.jpg') }}" alt="...">
              </div>
              <div class="card-body">
                <div class="author">
                  <a href="#">
                    <img class="avatar border-gray" src="{{ asset('admin/assets/img/mike.jpg') }}" alt="...">
                    <h5 class="title">{{ $user->name }}</h5>
                  </a>
                  <p class="description">
                    @chetfaker
                  </p>
                </div>
                <p class="description text-center">
                  "I like the way you work it <br>
                  No diggity <br>
                  I wanna bag it up"
                </p>
              </div>
              <div class="card-footer">
                <hr>
                <div class="button-container">
                  <div class="row">
                    <div class="col-lg-3 col-md-6 col-6 ml-auto">
                      <h5>12<br><small>Files</small></h5>
                    </div>
                    <div class="col-lg-4 col-md-6 col-6 ml-auto mr-auto">
                      <h5>2GB<br><small>Used</small></h5>
                    </div>
                    <div class="col-lg-3 mr-auto">
                      <h5>24,6$<br><small>Spent</small></h5>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-8">
            <div class="card card-user">
              <div class="card-header">
                <h5 class="card-title">Edit Profile</h5>
              </div>
              <div class="card-body">
                <form>
                  <div class="row">
                    <div class="col-md-5 pr-1">
                      <div class="form-group">
                        <label>Nik</label>
                        <input type="text" class="form-control"  placeholder="Company" value="{{ $user->nik }}">
                      </div>
                    </div>
                    <div class="col-md-3 px-1">
                      <div class="form-group">
                        <label>Username</label>
                        <input type="text" class="form-control" placeholder="Username" value="{{ $user->name }}">
                      </div>
                    </div>

                    <div class="col-md-3 px-1">
                        <div class="form-group">
                          <label>Jenis Kelamin</label>
                          <input type="text" class="form-control" placeholder="Username" value="{{ $user->jk }}">
                        </div>
                      </div>

                      <div class="col-md-3 px-1">
                        <div class="form-group">
                          <label>No Telepon</label>
                          <input type="text" class="form-control" placeholder="Username" value="{{ $user->telp }}">
                        </div>
                      </div>

                      <div class="col-md-5 pr-1">
                        <div class="form-group">
                          <label>Email</label>
                          <input type="text" class="form-control"  placeholder="Company" value="{{ $user->email }}">
                        </div>
                      </div>


                  <div class="row">
                    <div class="update ml-3">
                      <button type="submit" class="btn btn-primary btn-round">Update Profile</button>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
@endsection