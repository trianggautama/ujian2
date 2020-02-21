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
                        <div class="form-group"><label for="nama" class="form-control-label">NPM</label><input type="text" name="NPM" id="NPM" placeholder="NPM" class="form-control" value="{{$ujian->NPM}}"></div>
                        <div class="form-group"><label for="nama" class="form-control-label">Foto</label><input type="file" name="foto" id="foto" placeholder="foto" class="form-control" value="{{$ujian->foto}}"></div>
                        <div class="form-group"><label for="nama" class="form-control-label">kelas</label><input type="number" name="kelas" id="kelas" placeholder="kelas" class="form-control" value="{{$ujian->kelas}}"></div>
                        <div class="form-group"><label for="nama" class="form-control-label">Semester</label><input type="number" name="semester" id="semester" placeholder="semester" class="form-control" value="{{$ujian->semester}}"></div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">ubah data</button>
                </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
