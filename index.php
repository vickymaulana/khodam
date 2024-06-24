<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cek Khodam</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.19/tailwind.min.css" rel="stylesheet">
    <style>
        .fade-in {
            animation: fadeIn 2s ease-in-out;
        }

        @keyframes fadeIn {
            0% { opacity: 0; }
            100% { opacity: 1; }
        }
    </style>
</head>
<body class="bg-gradient-to-r from-purple-500 to-indigo-500 min-h-screen flex items-center justify-center">
    <div class="bg-white p-8 rounded-lg shadow-lg max-w-md w-full fade-in">
        <h1 class="text-3xl font-bold mb-6 text-center text-gray-700">Cek Khodam</h1>
        <form action="loading.php" method="POST" class="space-y-6">
            <div>
                <label for="name" class="block text-sm font-medium text-gray-700">Nama Anda:</label>
                <input type="text" id="name" name="name" required class="mt-1 block w-full p-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-400">
            </div>
            <button type="submit" class="w-full bg-indigo-500 text-white py-3 rounded-lg shadow-md hover:bg-indigo-700 transition duration-300">Lihat Khodam</button>
        </form>
    </div>
</body>
</html>
