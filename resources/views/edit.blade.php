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
                        <div class="form-group"><label for="nama" class="form-control-label">NIS</label><input type="text" name="NIS" id="NIS" placeholder="NIS" class="form-control" value="{{$ujian->NIS}}"></div>
                        <div class="form-group"><label for="nama" class="form-control-label">Nama</label><input type="text" name="nama" id="nama" placeholder="nama" class="form-control" value="{{$ujian->nama}}"></div>
                        <div class="form-group"><label for="nama" class="form-control-label">Alamat</label><input type="text" name="alamat" id="alamat" placeholder="alamat" class="form-control" value="{{$ujian->alamat}}"></div>
                        <div class="form-group"><label for="nama" class="form-control-label">Nama Orang Tua</label><input type="text" name="ortu" id="ortu" placeholder="ortu" class="form-control" value="{{$ujian->ortu}}"></div>
                        <div class="form-group"><label for="nama" class="form-control-label">No HP</label><input type="text" name="no_hp" id="no_hp" placeholder="no_hp" class="form-control" value="{{$ujian->no_hp}}"></div>
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
