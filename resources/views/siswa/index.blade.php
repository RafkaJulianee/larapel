<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Data Siswa</title>
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
  </head>
  <body>
    <div class="container">
      <br><br>
        <h3 style="text-align: center">DATA SISWA</h3>
        <a href="{{route('siswa.create')}}" class="btn btn-primary mb-3">Tambah Siswa</a>
        <table class="table">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">NIS</th>
      <th scope="col">Nama Siswa</th>
      <th scope="col">JK</th>
      <th scope="col">TGL LAHIR</th>
      <th scope="col">Alamat</th>
      <th scope="col">Email</th>
      <th scope="col">NO HP</th>
      <th scope="col">Aksi</th>
    </tr>
  </thead>
  <tbody>
    @foreach($data as $siswa)
  <tr>
  <th scope="row">{{ $loop->iteration}}</th>
  <td>{{ $siswa-> }}</td>
  <td>{{ $kelas->jurusan }}</td>
  <td>
    <a href="{{ route('kelas.edit', $kelas->id) }}" class="btn btn-warning btn-sm">Ubah</a>
    <a href="{{ route('kelas.destroy', $kelas->id) }}" class="btn btn-danger btn-sm">Hapus</a>
  </td>
</tr>


   


    @endforeach
  </tbody>
</table>



    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
  </body>
</html>