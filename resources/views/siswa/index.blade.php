<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Data Siswa</title>
  <link rel="shortcut icon" href="img/image.png" type="image/x-icon">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
  <div class="container mt-5">
    <h3 class="text-center">DATA SISWA</h3>
    <a href="{{ route('siswa.create') }}" class="btn btn-primary mb-3">Tambah Siswa</a>

    <table class="table table-striped">
      <thead>
        <tr>
          <th>No</th>
          <th>NIS</th>
          <th>Nama Siswa</th>
          <th>Kelas</th>
          <th>Jenis Kelamin</th>
          <th>Alamat</th>
          <th>No HP</th>
          <th>Aksi</th>
        </tr>
      </thead>
      <tbody>
        @foreach($data as $siswa)
        <tr>
          <td>{{ $loop->iteration }}</td>
          <td>{{ $siswa->nis }}</td>
          <td>{{ $siswa->nama_siswa }}</td>
          <td>{{ $siswa->kelas->nama_kelas }}</td>
          <td>{{ $siswa->jenis_kelamin }}</td>
          <td>{{ $siswa->alamat }}</td>
          <td>{{ $siswa->no_telepon }}</td>
          <td>
            <a href="{{ route('siswa.edit', $siswa->id) }}" class="btn btn-warning btn-sm">Ubah</a>
            <form action="{{ route('siswa.destroy', $siswa->id) }}" method="POST" class="d-inline">
              @csrf
              @method('DELETE')
              <button class="btn btn-danger btn-sm" onclick="return confirm('Yakin hapus?')">Hapus</button>
            </form>
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
</body>

</html>