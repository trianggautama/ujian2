<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        body{
            font-family:sans-serif;
        }
        table{
        border-collapse: collapse;
        width:100%;
      }
         table, th, td{
        border: 1px solid #708090;
      }
      th{
        background-color: darkslategray;
        text-align: center;
        color: aliceblue;
      }
      td{
        text-align: left;
        margin-left: 10px !important;
      }
      br{
          margin-bottom: 5px !important;
      }
     .judul{
         text-align: center;
     }
     .header{
         margin-bottom: 0px;
         text-align: center;
         height: 150px;
         padding: 0px;
     }
     .pemko{
         width:150px;
     }
     .logo{
         float: left;
         margin-right: 0px;
         width: 15%;
         padding:0px;
         text-align: right;
     }
     .headtext{
         float:right;
         margin-left: 0px;
         width: 75%;
         padding-left:0px;
         padding-right:10%;
     }
     hr{
         margin-top: 10%;
         height: 4px;
         background-color: black;
         width:100%;
     }
     .ttd{
         margin-left:70%;
         text-align: center;
         text-transform: uppercase;
     }
     .text-right{
         text-align:right;
     }
     .isi{
         padding:10px;
     }
    </style>
</head>
<body>
    <div class="header">
            <div class="logo">
                    <img  class="pemko" src="images/logo_pemprov.png">
            </div>
            <div class="headtext">
                <h4 style="margin:0px;">ujian</h4>
            </div>
            <br>
    </div>
    <hr style="margin-top:1px;">
    <div class="container">
        <div class="isi">
            <h2 style="text-align:center;">DATA LABORATORIUM</h2>
            <table class="table">
                        <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Nama</th>
                            <th scope="col">Foto</th>
                            <th scope="col">NPM</th>
                            <th scope="col">Kelas</th>
                            <th scope="col">Semester</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach( $ujian as $u)
                        <tr>
                            <td>{{$loop->iteration}}</td>
                            <td>{{$u->nama}}</td>
                            <td><img src="img/ujian/{{$u->foto}}" width="40" class="rounded-circle" alt="Cinque Terre"></td>
                            <td>{{$u->NPM}}</td>
                            <td>{{$u->kelas}}</td>
                            <td>{{$u->semester}}</td>
                        </tr>
                        @endforeach
                        </tbody>
                    </table>
                      <br>
                      <br>
                      <table style="border:none;">
                      <tr style="border:none;">
                      <td style="width:70%; border:none;"></td>
                      <td style="text-align:center; border:none;">
                      <h5> <p>Banjarbaru, {{ $tgl }}</p></h5>
                        <h6>Mengetahui</h6>
                        <h5>Kepala Balai Pengujian dan Sertifikasi Mutu Barang</h5>
                        <br>
                        <br>
                        <h5 style="text-decoration:underline;">Drs.Anang Aliansyah</h5>
                        <h5>NIP. 19580726 1984 03 1 007</h5>
                      </td>
                      </tr>
                      </table>
                    </div>
             </div>
         </body>
</html>