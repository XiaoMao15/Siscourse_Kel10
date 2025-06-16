<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Welcome</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/fontawesome.min.css">
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 flex items-center justify-center min-h-screen">
    <div class="w-full max-w-lg p-6 bg-white rounded-xl shadow-lg">
        <h2 class="text-2xl font-semibold text-center mb-6">Welcome</h2>
        <p class="text-center">You are logged in as {{ Auth::user()->name }}</p>
        <div class="mt-4 text-center">
            <a href="/logout" class="text-blue-600 hover:underline">Logout</a>
        </div>
    </div>
</body>
</html>