<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Keluhan</title>
    <link rel="icon" type="image/x-icon" href="/path/to/favicon.ico">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

</head>
<body>
<h3 class="mt-5">Keluhan Baru</h3>
<p class=""><strong>Nama:</strong> {{ $keluhan->nama }}</p>
<p><strong>Email:</strong> {{ $keluhan->email }}</p>
<p><strong>Isi Keluhan:</strong><br>{{ $keluhan->isi_keluhan }}</p>
<p><strong>Tanggal:</strong> {{ $keluhan->created_at->format('d-m-Y H:i:s') }}</p>
</body>
</html>