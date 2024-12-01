@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-xl-12">
            <div class="card">
                <div class="card-header">
                    <h5>List Siswa</h5>
                </div>
                <div class="card-body table-border-style">
                    <div class="d-flex justify-content-end mb-3">
                        <button class="btn btn-icon btn-light-primary">
                            <i class="bi bi-box-arrow-in-down"></i>
                        </button>

                        <button class="btn btn-icon btn-light-primary mx-2">
                            <i class="bi bi-upload"></i>
                        </button>

                        <a class="btn btn-icon btn-light-primary" data-bs-toggle="tooltip" data-bs-placement="top"
                            title="Tambah Data">
                            <i class="bi bi-plus-lg py-2"></i>
                        </a>
                    </div>

                    @if (session()->has('success'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            {{ session('success') }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="close"></button>
                        </div>
                    @endif

                    <div class="table-responsive">
                        <table class="table" id="pc-dt-simple">
                            <thead>
                                <tr>
                                    <th>Nama Akun</th>
                                    <th>Role</th>
                                    <th>Kode Kelas</th>
                                    <th>No Ruangan</th>
                                    <th>Nama Lengkap</th>
                                    <th>Email</th>
                                    <th>NIM</th>
                                    <th class="text-center">Tanggal Lahir</th>
                                    <th class="text-center">Jenis Kelamin</th>
                                    <th>Agama</th>
                                    <th>No Watshapp</th>
                                    <th>Tentang Saya</th>
                                    <th class="text-center">Status</th>
                                    <th class="text-center">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($list_siswa as $list)
                                    <tr>
                                        <td>{{ $list->user->nama_akun }}</td>
                                        <td>{{ $list->user->role }}</td>
                                        <td>{{ $list->kelas->kode_kelas }}</td>
                                        <td>{{ $list->kelas->no_ruangan }}</td>
                                        <td>{{ $list->nama_lengkap }}</td>
                                        <td>{{ $list->email }}</td>
                                        <td>{{ $list->nim }}</td>
                                        <td>{{ $list->tanggal_lahir }}</td>
                                        <td>{{ $list->jenis_kelamin }}</td>
                                        <td>{{ $list->agama }}</td>
                                        <td>{{ $list->no_wathsapp }}</td>
                                        <td>{{ $list->tentang_saya }}</td>
                                        <td>{{ $list->status }}</td>
                                        <td class="">
                                            <div class="d-flex justify-content-center">
                                                <button class="btn mx-1 btn-icon btn-light-warning" data-bs-toggle="tooltip"
                                                    data-bs-placement="top" title="Ubah">
                                                    <i class="bi bi-pencil-square"></i>
                                                </button>

                                                <button class="btn btn-icon btn-light-primary" data-bs-toggle="tooltip"
                                                    data-bs-placement="top" title="Lihat">
                                                    <i class="ti ti-eye f-18"></i>
                                                </button>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
