@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card" >
                <div class="card-header">
                    Edit Data
                </div>
                <div class="card-body">
                <form action="" method="post" enctype="multipart/form-data">
                @csrf
                {{ method_field('PUT') }}
                        <div class="form-group"><label for="nama" class="form-control-label">Nama</label><input type="text" name="nama" id="nama" placeholder="nama" class="form-control" value="{{$ujian->nama}}"></div>
                        <div class="form-group"><label for="nama" class="form-control-label">Tipe</label><input type="text" name="tipe" id="tipe" placeholder="tipe" class="form-control" value="{{$ujian->tipe}}"></div>
                        <div class="form-group"><label for="nama" class="form-control-label">Jumlah</label><input type="text" name="jumlah" id="jumlah" placeholder="jumlah" class="form-control" value="{{$ujian->jumlah}}"></div>
                        <div class="form-group"><label for="nama" class="form-control-label">Harga</label><input type="text" name="harga" id="harga" placeholder="harga" class="form-control" value="{{$ujian->harga}}"></div>
                </div>
                <div class="modal-footer">
                    <a href="/" type="button" class="btn btn-secondary" data-dismiss="modal">Batal</a>
                    <button type="submit" class="btn btn-primary">ubah data</button>
                </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
