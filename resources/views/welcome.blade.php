@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card" >
                <div class="card-header">Data -
                    <div class="text-right">
                        <a href="cetak" class="btn btn-primary"> cetak data</a>
                        <button type="button" class="btn btn-success" data-toggle="modal" data-target="#exampleModalCenter">+ tambah data</button>                    </div>
                </div> 
                <div class="card-body">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col" class="text-center">No</th>
                            <th scope="col" class="text-center">Nama</th>
                            <th scope="col" class="text-center">Foto</th>
                            <th scope="col" class="text-center">NPM</th>
                            <th scope="col" class="text-center">Kelas</th>
                            <th scope="col" class="text-center">Semester</th>
                            <th scope="col" class="text-center">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach( $ujian as $u)
                        <tr>
                            <td class="text-center">{{$loop->iteration}}</td>
                            <td class="text-center">{{$u->nama}}</td>
                            <td class="text-center"><img src="img/ujian/{{$u->foto}}" width="40" class="rounded-circle" alt="Cinque Terre"></td>
                            <td class="text-center">{{$u->NPM}}</td>
                            <td class="text-center">{{$u->kelas}}</td>
                            <td class="text-center">{{$u->semester}}</td>
                            <td class="text-center">
                                <a class="btn btn-info" href="edit/{{$u->id}}">Edit</a>
                                <a class="btn btn-danger" href="hapus/{{$u->id}}">Hapus</a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                tes aja
                </div>
            </div>
        </div>
    </div>
</div>
<!-- modal -->
<!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Tambah Data</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form action="" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}
            <div class="form-group"><label for="nama" class="form-control-label">Nama</label><input type="text" name="nama" id="nama" placeholder="nama" class="form-control"></div>
            <div class="form-group"><label for="nama" class="form-control-label">NPM</label><input type="text" name="NPM" id="NPM" placeholder="NPM" class="form-control"></div>
            <div class="form-group"><label for="nama" class="form-control-label">Foto</label><input type="file" name="foto" id="foto" placeholder="foto" class="form-control"></div>
            <div class="form-group"><label for="nama" class="form-control-label">kelas</label><input type="number" name="kelas" id="kelas" placeholder="kelas" class="form-control"></div>
            <div class="form-group"><label for="nama" class="form-control-label">Semester</label><input type="number" name="semester" id="semester" placeholder="semester" class="form-control"></div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
      </div>
    </div>
  </div>
</div>
@endsection
