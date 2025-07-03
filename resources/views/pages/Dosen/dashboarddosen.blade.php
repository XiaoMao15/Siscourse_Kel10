<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Dashboard Dosen</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-4">
    <h1>Dashboard Dosen</h1>

    <!-- Form Upload -->
    <form action="{{ route('tugas.store') }}" method="POST" enctype="multipart/form-data" class="mb-4">
        @csrf
        <div class="mb-2">
            <input type="text" name="judul" class="form-control" placeholder="Judul Tugas" required>
        </div>
        <div class="mb-2">
            <textarea name="deskripsi" class="form-control" placeholder="Deskripsi" required></textarea>
        </div>
        <div class="mb-2">
            <input type="text" name="kategori" class="form-control" placeholder="Kategori" required>
        </div>
        <div class="mb-2">
            <input type="file" name="file" class="form-control">
        </div>
        <button type="submit" class="btn btn-primary">Upload Tugas</button>
    </form>

    <!-- Notifikasi -->
    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <!-- Daftar Tugas -->
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Judul</th>
                <th>Deskripsi</th>
                <th>Kategori</th>
                <th>File</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($tugas as $t)
                <tr>
                    <td>{{ $t->judul }}</td>
                    <td>{{ $t->deskripsi }}</td>
                    <td>{{ $t->kategori }}</td>
                    <td>
                        @if($t->file)
                            <a href="{{ asset('storage/'.$t->file) }}" target="_blank">Lihat File</a>
                        @else
                            Tidak ada file
                        @endif
                    </td>
                    <td>
                        <a href="{{ route('tugas.edit', $t->id) }}" class="btn btn-warning btn-sm">Edit</a>
                        <form action="{{ route('tugas.destroy', $t->id) }}" method="POST" style="display:inline-block">
                            @csrf
                            @method('DELETE')
                            <button onclick="return confirm('Hapus tugas ini?')" class="btn btn-danger btn-sm">Hapus</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
</body>
</html>
