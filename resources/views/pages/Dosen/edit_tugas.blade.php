<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Edit Tugas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-4">
    <h2>Edit Tugas</h2>

    <form action="{{ route('tugas.update', $tugas->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="mb-2">
            <label>Judul</label>
            <input type="text" name="judul" class="form-control" value="{{ $tugas->judul }}" required>
        </div>

        <div class="mb-2">
            <label>Deskripsi</label>
            <textarea name="deskripsi" class="form-control" required>{{ $tugas->deskripsi }}</textarea>
        </div>

        <div class="mb-2">
            <label>Deadline</label>
            <input type="date" name="deadline" class="form-control" value="{{ $tugas->deadline }}" required>
        </div>

        <div class="mb-2">
            <label>File (opsional)</label>
            <input type="file" name="file" class="form-control">
            @if($tugas->file)
                <small>File saat ini: <a href="{{ asset('storage/'.$tugas->file) }}" target="_blank">Lihat File</a></small>
            @endif
        </div>

        <button type="submit" class="btn btn-success">Simpan Perubahan</button>
        <a href="{{ route('tugas.index') }}" class="btn btn-secondary">Batal</a>
    </form>
</div>
</body>
</html>
<?php
// This file is used to edit the assignment details in the Dosen dashboard.