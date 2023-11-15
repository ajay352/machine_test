<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <title>ASN Cars</title>
</head>

<body class="bg-gray-100">
    <nav class="bg-blue-500 p-4 flex justify-between items-center">
        <div class="text-white font-bold text-lg">ASN Cars</div>
        <div class="flex space-x-4">
            <a href="{{route('login')}}" class="text-white">Login</a>
            <a href="{{route('register')}}" class="text-white">Register</a>
        </div>
    </nav>
    <div class="w-4/12 mx-auto mt-10">
        <h1 class="text-8xl font-bold text-center text-blue-700">Welcome</h1>
        <h1 class="text-8xl text-center font-bold text-blue-700">to</h1>
        <h1 class="text-8xl font-bold text-center text-blue-700">ASN Cars.</h1>
    </div>
</body>

</html>