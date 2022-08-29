@extends('master')

@section('konten')
   


<!DOCTYPE html>
<html>
<head>
    <title> Membuat Pencarian Pada Laravel</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/bootstrap.js"></script>

</head>
    <body>
 
    <div class="container">
        <div class="card">
            <div class="card-body">
                
 
               

                <h2>
                Selamat Datang 
                <b>{{ Auth::user()->name }}</b>, 
                Anda Login sebagai 

                <b>{{ Auth::user()->role }}</b>
            </h2>

 
                <h3>Data Pegawai</h3>

                    


                
 
                <p>Cari Data Pegawai :</p>
 
                <div class="form-group">
                    
                </div>
                <form action="/home/cari" method="GET" class="form-inline">
                    <input class="form-control" type="text" name="cari" placeholder="Cari Pegawai .." value="{{ old('cari') }}">
                    <input class="btn btn-primary ml-3" type="submit" value="CARI">
                </form>
 
                <br/>
 
                <table class="table table-bordered">
                    <tr>
                        <th>id User</th>
                        <th>Nama User</th>
                        <th>Nama</th>
                        <th>Jabatan</th>
                        <th>Umur</th>
                        <th>Alamat</th>
                        <th>Opsi</th>
                    </tr>
                    @foreach($pegawai as $p)
                    <tr>
                        <td>{{ $p->id }}</td>
                        <td>{{ $p->name }}</td>
                        <td>{{ $p->pegawai_nama }}</td>
                        <td>{{ $p->pegawai_jabatan }}</td>
                        <td>{{ $p->pegawai_umur }}</td>
                        <td>{{ $p->pegawai_alamat }}</td>
                        <td>
                            <a class="btn btn-warning btn-sm" href="/home/edit/{{ $p->id }}">Edit</a>
                            <a class="btn btn-danger btn-sm" href="/home/hapus/{{ $p->id }}">Hapus</a>
                        </td>
                    </tr>
                    @endforeach
                </table>
 
               
            </div>
        </div>
    </div>
 
 
</body>
</html>

@endsection