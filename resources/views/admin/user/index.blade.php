@extends('layouts.admin.app')

@section('content')

<div class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <div class="row ml-3">
                    <h4 class="card-title">{{ $title }}</h4>
                    <div class="d-flex ml-3">
                        <a href="/add-user" class="btn btn-primary">Create User</a>
                    </div>
                    </div>
                </div>
                </div>
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                        <table class="table">
                            <thead class="text-black">
                                <th scope="col-lg-12">NO </th>
                                <th scope="col-lg-12"> NIK </th>
                                <th scope="col-lg-12"> Nama  </th>
                                <th scope="col-lg-12"> Jenis Kelamin</th>
                                <th scope="col-lg-12"> Tanggal Lahir </th>
                                <th scope="col-lg-12"> Alamat</th>
                                <th scope="col-lg-12"> No. Telp </th>
                                <th scope="col-lg-12"> Email </th>
                                <th scope="col-lg-12"> Photo </th>
                                <th scope="col-lg-12"> Action </th>
                            </thead>
                            <tbody>

                            <?php $i = 0;?>
                                @foreach ( $users as $u)

                            <?php $i++ ;?>    
                                <tr>
                                    <td>{{ $i }}</td>
                                    <td> {{ $u->nik }} </td>
                                    <td> {{ $u->name }} </td>
                                    <td> {{ $u->jk }} </td>
                                    <td> {{ $u->tgl_lahir }} </td>
                                    <td> {{ $u->alamat }} </td>
                                    <td> {{ $u->telp }} </td>
                                    <td> {{ $u->email }} </td>
                                    <td> {{ $u->photo }} </td>
                                    <td><form method="" action="">
                            <a button type="button" class="btn btn-primary" href="{{ route('show-user',$u->id) }}">Read</button></a>
                            <a button type="button" class="btn btn-warning" href="{{ route('edit_user',$u->id) }}">Edit</button></a>
                            @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form></td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
