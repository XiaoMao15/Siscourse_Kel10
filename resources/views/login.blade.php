<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/fontawesome.min.css">
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 flex items-center justify-center min-h-screen">
    <div class="w-full max-w-sm p-6 bg-white rounded-xl shadow-lg">
        <h2 class="text-2xl font-semibold text-center mb-6">Login</h2>
        
        @if ($errors->any())
            <div class="mb-4 text-sm text-red-600">
                {{ $errors->first() }}
            </div>
        @endif
     <form method="POST" action="/login" class="space-y-4">
    @csrf

    <div>
        <label class="block text-sm font-medium">Email</label>
        <input type="email" name="email" required class="w-full px-4 py-2 border rounded-md">
    </div>

    <!-- Password -->
    <div>
        <label class="block text-sm font-medium">Password</label>
        <input type="password" name="password" required class="w-full px-4 py-2 border rounded-md">
    </div>

    <!-- Remember Me -->
    <div class="flex items-center">
        <input type="checkbox" name="remember" id="remember" class="mr-2">
        <label for="remember" class="text-sm text-gray-700">Remember Me</label>
    </div>

    <!-- Submit -->
    <button type="submit" class="w-full bg-blue-600 text-white py-2 rounded-md hover:bg-blue-700 transition">Login</button>
</form>
        <div class="mt-4 text-center">
            <a href="/register" class="text-blue-600 hover:underline">Don't have an account? Register here</a>
        </div>
    </div>
</body>
</html>