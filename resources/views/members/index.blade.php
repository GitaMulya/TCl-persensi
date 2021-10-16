@extends('layout/template')

@section('judul', 'List Member')

@section('container')
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                @if (session('status'))
                    <div id="flash" data-flash="{{ session('status') }}"></div>
                @endif 
                <div class="card">
                 <h5 class="card-title text-center mt-4 fs-4">Tabel Member</h5>
                    <div class="card-header">
                        <div class="d-grid gap-2 d-md-flex">
                            <a class="btn btn-outline-success" data-toggle="modal" data-target="#modal-create">Tambah Data <i class="fas fa-plus ml-2"></i></a>
                            <!-- <a href="/exportmahasiswa" class="btn btn-outline-warning  d-inline" id="btn-export">Eksport<i class="fas fa-file-export ml-2"></i></a>
                            <a class="btn btn-outline-info" data-toggle="modal" data-target="#modal-import">Import<i class="fas fa-file-import ml-2"></i></a>   -->
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="mahasiswatb" class="table table-bordered table-hover table-striped">
                                <thead>
                                    <tr>
                                        <th scope="col">id</th>
                                        <th scope="col">nama</th>
                                        <th scope="col">jenis kelamin</th>
                                        <th scope="col">usia</th>
                                        <th scope="col">aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($data as $member) 
                                        <tr>
                                            <td scope="row">{{ $loop->iteration}}</td>
                                            <td>{{ $member->nama }}</td>
                                            <td>{{ $member->jKelamin}}</td>
                                            <td>{{ $member->umur }}</td>
                                            <td>
                                                <a href="/{{$member->member_id}}/edit" class="btn btn-outline-success btn-sm mr-2">Edit</a>
                                                <a href="/{{$member->member_id}}/delete" class="btn btn-outline-danger btn-sm" id="btn-hapus">Hapus</a>
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
    </div>
</section>
    <div class="modal fade" id="modal-create">
        <div class="modal-dialog">
            <form method="post" action="/" class="modal-content">
                <div class="modal-header">
                <h4 class="modal-title">Tambah Member</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                </div>
                <div class="modal-body">
                    @csrf
                    <div class="row">
                        <div class="col-md-12">
                            <label for="nama">Nama<span style="color: red; display:block; float:right">*</label>
                            <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" placeholder="Masukkan nama Mahasiswa" name="nama" value="{{old('nama')}}">
                            @error('nama')
                            <div class="invalid-feedback">{{$message}}</div>
                            @enderror
                        </div>
                        <div class="col-md-12">
                            <label for="jKelamin">Jenis Kelamin<span style="color: red; display:block; float:right">*</label>
                            <input type="text" class="form-control @error('jKelamin') is-invalid @enderror" id="jKelamin" placeholder="Masukkan jKelamin Mahasiswa" name="jKelamin" value="{{old('jKelamin')}}">
                            @error('jKelamin')
                            <div class="invalid-feedback">{{$message}}</div>
                            @enderror
                        </div>
                        <div class="col-md-12">
                            <label for="umur">umur<span style="color: red; display:block; float:right">*</label>
                            <input type="text" class="form-control @error('umur') is-invalid @enderror" id="umur" placeholder="Masukkan umur Mahasiswa" name="umur" value="{{old('umur')}}">
                            @error('umur')
                            <div class="invalid-feedback">{{$message}}</div>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="modal-footer d-flex justify-content-end">
                <button type="button" class="btn btn-outline-danger" data-dismiss="modal">Batal</button>  
                <button type="submit" class="btn btn-outline-primary">Simpan</button>
                </div>
            </form>
        </div>
    </div>
@endsection
