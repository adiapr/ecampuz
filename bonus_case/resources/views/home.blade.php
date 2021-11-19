@extends('layouts.app')

@section('content')
@include('sweetalert::alert')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <div class="row">
                        <div class="col-md-12">
                            <h2>Form Instansi | Bonus Case</h2><hr>
                        </div>
                        <div class="col-md 6">
                            <button type="button" class="btn btn-primary pull-right" data-toggle="modal" data-target="#exampleModal">
                                <i class="fa fa-plus"></i> Tambah Data
                            </button>
                        </div>
                        <div class="col-md-6">
                            <form action="{{ route('instansi.search') }}" method="post">
                                @csrf
                                <input type="text" name="cari" class="form-control pull-left" placeholder="Cari...">
                                <p align="right"><button type="submit" class="btn btn-primary pull-right mt-2">Cari Instansi</button></p>
                            </form>
                        </div>
                    </div>
                    <!-- Button trigger modal -->                
                <!-- Modal -->
                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Tambah Data Instansi</h5>
                        </div>
                        <form action="{{ route('instansi.add') }}" method="post">
                            @csrf
                        <div class="modal-body">
                            <div class="form-group">
                                <label for="">Instansi</label>
                                <input type="text" required name="instansi" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="">Deskripsi</label>
                                <textarea name="deskripsi" id="" required class="form-control"></textarea>
                            </div>
                        
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Kembali</button>
                            <button type="submit" class="btn btn-primary">Simpan</button>
                        </div></form>
                        
                    </div>
                    </div>
                </div>
                </div>
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <table class="table table-hover">
                        <thead>
                          <tr>
                            <th scope="col">#</th>
                            <th scope="col">Instansi</th>
                            <th scope="col">Deskripsi</th>
                            <th align="right"><div style="text-align:right">Aksi</div></th>
                          </tr>
                        </thead>
                        <tbody>
                            @foreach ($instansi as $isi)
                            <tr>
                            <th scope="row">{{ $no++ }}</th>
                                <td>{{ $isi->instansi }}</td>
                                <td>{{ $isi->deskripsi}}</td>
                                <td align="right">
                                    <!-- Button trigger modal -->
                                    

                                    <form action="{{ route('instansi.delete', $isi->id) }}" method="post">
                                        {{-- hapus data --}}
                                        @csrf
                                        <button class="btn btn-danger btn-sm" onClick="return confirm('Anda yakin ?')">
                                            <i class="fa fa-trash"></i> Hapus
                                        </button>
                                    
                                    <a class="btn btn-primary" data-toggle="modal" data-target="#exampleModal{{ $isi->id }}">
                                        <i class="fa fa-edit"></i> Edit
                                    </a>
                                    </form>
                                    
                                    <!-- Modal -->
                                    <div class="modal fade" style="text-align: left" id="exampleModal{{ $isi->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Edit Data Instansi</h5>
                                            </div>
                                            <form action="{{ route('instansi.update', $isi->id) }}" method="post">
                                                @csrf
                                            <div class="modal-body">
                                                <div class="form-group">
                                                    <label for="">Instansi</label>
                                                    <input type="text" name="instansi" value="{{ $isi->instansi }}" class="form-control">
                                                </div>
                                                <div class="form-group">
                                                    <label for="">Deskripsi</label>
                                                    <textarea name="deskripsi" id="" class="form-control">{{ $isi->deskripsi }}</textarea>
                                                </div>
                                            
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Kembali</button>
                                                <button type="submit" class="btn btn-primary">Simpan</button>
                                            </div></form>
                                            
                                        </div>
                                        </div>
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
