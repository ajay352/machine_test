<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <title>User Registration</title>
</head>
<body class="bg-gray-100 flex items-center justify-center h-screen">
    <div class="bg-white p-8 rounded shadow-md w-96">
        <h2 class="text-2xl font-bold mb-6">User Registration</h2>
        <!-- Registration form -->
        <form action="{{ route('register_verification') }}" method="POST">
            @csrf
            <!-- Name -->
            <div class="mb-4">
                <label for="name" class="block text-gray-700 text-sm font-bold mb-2">Name</label>
                <input type="text" name="name" id="name" class="w-full border px-4 py-2 rounded focus:outline-none focus:border-blue-500" required>
            </div>
            <!-- Email -->
            <div class="mb-4">
                <label for="email" class="block text-gray-700 text-sm font-bold mb-2">Email</label>
                <input type="email" name="email" id="email" class="w-full border px-4 py-2 rounded focus:outline-none focus:border-blue-500" required>
            </div>
            <!-- Password -->
            <div class="mb-6">
                <label for="password" class="block text-gray-700 text-sm font-bold mb-2">Password</label>
                <input type="password" name="password" id="password" class="w-full border px-4 py-2 rounded focus:outline-none focus:border-blue-500" required>
            </div>
            <!-- Register button -->
            <button type="submit" class="w-full bg-blue-500 text-white py-2 px-4 rounded focus:outline-none hover:bg-blue-700">Register</button>
        </form>
    </div>
</body>
</html>
