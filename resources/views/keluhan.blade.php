<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Keluhan</title>
    <link rel="icon" type="image/x-icon" href="/path/to/favicon.ico">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-1CmrxMRARb6aLqgBO7xZ8b0G8b0G8b0G8b0G8b0G8b0G8b0G8b0G8b0G8b0" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body style="background-color: #f8f9fa;">

    <div class="container">
        <div class="row justify-content-center mt-5">
            <div class="col-md-8">
                <div class="card shadow-lg">
                    <div class="card-header bg-primary text-white">
                        <h4 class="mb-0"><i class="fas fa-comment-dots me-2"></i>Form Keluhan</h4>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('hasilkeluh.kirim') }}" method="POST">
                            @csrf
                            <div class="mb-3">
                                <label for="nama" class="form-label"><i class="fas fa-user me-1"></i>Nama</label>
                                <input type="text" class="form-control" id="nama" name="nama" required>
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label"><i class="fas fa-envelope me-1"></i>Email</label>
                                <input type="email" class="form-control" id="email" name="email" required>
                            </div>
                            <div class="mb-3">
                                <label for="isi_keluhan" class="form-label"><i class="fas fa-exclamation-circle me-1"></i>Isi Keluhan</label>
                                <textarea class="form-control" id="isi_keluhan" placeholder="Masukkan isi keluhan" name="isi_keluhan" rows="5" required></textarea>
                            </div>
                            <div class="d-grid">
                                <button type="submit" class="btn btn-primary"><i class="fas fa-paper-plane me-1"></i>Kirim</button>
                            </div>
                        </form>
                    </div>
                    <div class="card-footer text-muted text-center">
                        G usah banyak komplen LoL
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>
</html>
