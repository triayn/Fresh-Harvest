@extends('layout.main')

@section('content')
<div class="content-body">
    <!-- row -->
    <div class="container-fluid">
        <div class="row">
            <div class="col-xl-9 col-xxl-8 col-lg-12">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="card profile-card">
                            <div class="card-header flex-wrap border-0 pb-0">
                                <h3 class="fs-24 text-black font-w600 me-auto mb-2 pe-3">Detail Profil</h3>
                            </div>
                            <div class="card-body">
                                <div class="mb-5">
                                    <div class="row">
                                        <div class="col-xl-12 col-sm-6">
                                            <div class="form-group">
                                                <label>Alamat</label>
                                                <input type="text" class="form-control" value="{{ $data->alamat }}">
                                            </div>
                                        </div>
                                        <div class="col-xl-12 col-sm-6">
                                            <div class="form-group">
                                                <label>Jenis Kelamin</label>
                                                <input type="text" class="form-control" value="{{ $data->jenis_kelamin }}">
                                            </div>
                                        </div>
                                        <div class="col-xl-12 col-sm-6">
                                            <div class="form-group">
                                                <label>Tempat Lahir</label>
                                                <input type="text" class="form-control" value="{{ $data->tempat_lahir }}">
                                            </div>
                                        </div>
                                        <div class="col-xl-12 col-sm-6">
                                            <div class="form-group">
                                                <label>Tanggal Lahir</label>
                                                <input type="text" class="form-control" value="{{ $data->tanggal_lahir }}">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-xxl-4 col-lg-12">
                <div class="row">
                    <div class="col-xl-12 col-lg-6">
                        <div class="card  flex-lg-column flex-md-row ">
                            <div class="card-body card-body  text-center border-bottom profile-bx">
                                <div class="profile-image mb-4">
                                    <img src="{{ asset('storage/user/' .$data->image) }}" class="rounded-circle">
                                </div>
                                <h4 class="fs-22 text-black mb-1">{{ $data->nama }}</h4>
                                <p class="mb-4">{{ $data->role }}</p>
                            </div>
                            <div class="card-body  activity-card">
                                <div class="d-flex mb-3 align-items-center">
                                    <a class="contact-icon me-3" href="#"><i class="fa fa-phone" aria-hidden="true"></i></a>
                                    <span class="text-black">{{ $data->no_telpon }}</span>
                                </div>
                                <div class="d-flex mb-3 align-items-center">
                                    <a class="contact-icon me-3" href="#"><i class="las la-envelope"></i></a>
                                    <span class="text-black">{{ $data->email }}</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection