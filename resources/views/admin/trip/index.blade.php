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
                        <a href="/add-post" class="btn btn-primary">Create Post</a>
                    </div>
                    </div>
                </div>
                </div>
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                        <table class="table">
                            <thead class="text-black">
                                <th scope="col">#</th>
                                <th scope="col"> NIK </th>
                                <th scope="col"> Tujuan </th>
                                <th scope="col"> Suhu </th>
                                <th scope="col"> Alamat </th>
                                <th scope="col"> Action </th>
                            </thead>
                            <tbody>
                                @foreach ( $trips as $t)
                                <tr>
                                  <th scope="row">1</th>
                                    <td> {{ $t->nik }} </td>
                                    <td> {{ $t->tujuan }} </td>
                                    <td> {{ $t->suhu }} </td>
                                    <td> {{ $t->alamat }} </td>               
                                    <td><form method="" action="">
                            <a button type="button" class="btn btn-primary" href="#">Read</button></a>
                                <a button type="button" class="btn btn-warning" href="/edit-post">Edit</button></a>
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
