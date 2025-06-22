<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Masuk ke Siscourse</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Tailwind CSS -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body class="bg-gradient-to-br from-blue-100 via-blue-200 to-blue-300 flex items-center justify-center min-h-screen">

    <div class="w-full max-w-md p-8 bg-white rounded-2xl shadow-2xl">
        <div class="text-center mb-6">
            <div class="mb-3">
                <i class="fas fa-user-graduate text-blue-600 text-4xl"></i>
            </div>
            <h2 class="text-3xl font-bold text-gray-800">Selamat Datang Kembali</h2>
            <p class="text-sm text-gray-600 mt-1">Masuk untuk mengakses platform pembelajaran <strong>Siscourse</strong></p>
        </div>

        @if ($errors->any())
            <div class="mb-4 text-sm text-red-700 bg-red-100 border border-red-300 p-3 rounded-md">
                <i class="fas fa-exclamation-circle mr-2"></i>{{ $errors->first() }}
            </div>
        @endif

        <form method="POST" action="/login" class="space-y-5">
            @csrf

            <div>
                <label class="block text-sm font-medium text-gray-700 mb-1">Alamat Email</label>
                <input type="email" name="email" required
                    class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent shadow-sm">
            </div>

            <div>
                <label class="block text-sm font-medium text-gray-700 mb-1">Kata Sandi</label>
                <input type="password" name="password" required
                    class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent shadow-sm">
            </div>

            <div class="flex items-center justify-between text-sm">
                <label class="flex items-center">
                    <input type="checkbox" name="remember" class="mr-2 rounded border-gray-300">
                    <span class="text-gray-700">Ingat saya</span>
                </label>
                <a href="#" class="text-blue-600 hover:underline">Lupa sandi?</a>
            </div>

            <button type="submit"
                class="w-full bg-blue-600 text-white py-2 rounded-lg hover:bg-blue-700 transition duration-200 font-semibold shadow">
                <i class="fas fa-sign-in-alt mr-2"></i> Masuk
            </button>
        </form>

        <div class="mt-6 text-center text-sm text-gray-600">
            Belum punya akun?
            <a href="/register" class="text-blue-600 hover:underline font-medium">Daftar di sini</a>
        </div>
    </div>

</body>
</html>
