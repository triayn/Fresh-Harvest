@extends('layout.main')

@section('content')
<div class="content-body">
    <div class="container-fluid">
        <!-- <div class="page-titles">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0)">Pengguna</a></li>
                <li class="breadcrumb-item active"><a href="javascript:void(0)">Admin</a></li>
            </ol>
        </div> -->
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Data Admin</h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="example3" class="display table-responsive-lg">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama</th>
                                        <th>Email</th>
                                        <th>Alamat</th>
                                        <th>Action</th>
                                    </tr>
                                    @php $i = 1; @endphp
                                    @foreach ($data as $d)
                                    <tr>
                                        <td>{{ $i++ }}</td>
                                        <td>{{ $d->nama }}</td>
                                        <td>{{ $d->email }}</td>
                                        <td>{{ $d->alamat }}</td>
                                        <td>
                                            <div class="d-flex">
                                            <a href="#" class="btn btn-success shadow btn-xs sharp me-1"><i class="fa fa-eye"></i></a>
                                                <a href="#" class="btn btn-primary shadow btn-xs sharp me-1"><i class="fas fa-pencil-alt"></i></a>
                                                <a href="#" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a>
                                            </div>
                                        </td>
                                    </tr>
                                    @endforeach
                                </thead>
                                <tbody>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection



<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <table border="1">
            <tr>
                <td>Nama</td>
                <td>Email</td>
            </tr>
            @foreach ($data as $d)
                <tr>
                    <td>{{ $d->nama }}</td>
                    <td>{{ $d->email }}</td>
                </tr>
            @endforeach
        </table>
    </div>
</body>
</html> -->