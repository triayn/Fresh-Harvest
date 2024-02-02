@extends('layout.main')

@section('content')
<div class="content-body">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Data Admin</h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="display table-responsive-md dataTable" id="dataUser">
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
                                        <td class="text-center">{{ $i++ }}</td>
                                        <td>{{ $d->nama }}</td>
                                        <td>{{ $d->email }}</td>
                                        <td>{{ $d->alamat }}</td>
                                        <td>
                                            <div class="d-flex">
                                                <a href="{{ route('pengguna.show', $d->id) }}" class="btn btn-success shadow btn-xs sharp me-1"><i class="fa fa-eye"></i></a>
                                                <a href="{{ route('pengguna.edit', $d->id) }}" class="btn btn-primary shadow btn-xs sharp me-1"><i class="fas fa-pencil-alt"></i></a>
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

@section('script')
    <script>
        $(document).ready(function() {
            $('#dataUser').DataTable({})
        })
    </script>
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