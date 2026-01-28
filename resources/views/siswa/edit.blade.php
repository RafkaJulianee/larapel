<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Edit Siswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
  </head>
  <body>
    <div class="container mt-5">
        <h3 class="text-center">Edit Data Siswa</h3>
        
        <form action="{{ route('siswa.update', $siswa->id) }}" method="POST">
            @csrf
            @method('PUT') <div class="mb-3">
              <label for="kelas_id" class="form-label">Kelas</label>
              <select class="form-control" id="kelas_id" name="kelas_id" required>
                @foreach($kelas as $k)
                  <option value="{{ $k->id }}" {{ $k->id == $siswa->kelas_id ? 'selected' : '' }}>
                    {{ $k->nama_kelas }}
                  </option>
                @endforeach
              </select>
            </div>

            <div class="mb-3">
              <label for="nis" class="form-label">NIS</label>
              <input type="number" class="form-control" id="nis" name="nis" value="{{ $siswa->nis }}" required>
            </div>

            <div class="mb-3">
              <label for="nama_siswa" class="form-label">Nama Siswa</label>
              <input type="text" class="form-control" id="nama_siswa" name="nama_siswa" value="{{ $siswa->nama_siswa }}" required>
            </div>

            <div class="mb-3">
              <label class="form-label">Jenis Kelamin</label><br>
              <input type="radio" name="jenis_kelamin" value="L" {{ $siswa->jenis_kelamin == 'L' ? 'checked' : '' }}> Laki-laki
              <input type="radio" name="jenis_kelamin" value="P" {{ $siswa->jenis_kelamin == 'P' ? 'checked' : '' }}> Perempuan
            </div>

            <div class="mb-3">
              <label for="tanggal_lahir" class="form-label">Tanggal Lahir</label>
              <input type="date" class="form-control" id="tanggal_lahir" name="tanggal_lahir" value="{{ $siswa->tanggal_lahir }}" required>
            </div>

            <div class="mb-3">
              <label for="alamat" class="form-label">Alamat</label>
              <textarea class="form-control" id="alamat" name="alamat" required>{{ $siswa->alamat }}</textarea>
            </div>

            <div class="mb-3">
              <label for="email" class="form-label">Email</label>
              <input type="email" class="form-control" id="email" name="email" value="{{ $siswa->email }}" required>
            </div>

            <div class="mb-3">
              <label for="no_telepon" class="form-label">No Telepon</label>
              <input type="text" class="form-control" id="no_telepon" name="no_telepon" value="{{ $siswa->no_telepon }}" required>
            </div>

            <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
            <a href="{{ route('siswa.index') }}" class="btn btn-secondary">Batal</a>
          </form>
    </div>
  </body>
</html>