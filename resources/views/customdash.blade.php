<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <title>ANS Cars</title>
</head>

<body>
    <nav class="bg-blue-500 p-4 flex justify-between items-center">
        <div class="text-white font-bold text-lg">ASN Cars</div>
        <p>Welcome, {{ session('name') }} {{ session('username') }}!</p>
        <div class="flex ">
            <a href="{{ route('logout') }}" class="text-white">Logout</a>
        </div>
    </nav>
    <div class="container w-8/12 mx-auto mt-10 flex flex-wrap">
        @foreach ($cards as $card)
        <div class=" w-4/12 mx-auto ">
            <div class="m-4 bg-white rounded overflow-hidden shadow-md">
                <img class="w-full h-32 object-cover" src="{{ asset($card->photo) }}" alt="Car Image">
                <div class="p-4">
                    <div class="text-gray-600">
                        <p class="text-lg font-bold">{{ $card->year }} Model</p>
                        <p>Mileage: {{ $card->mileage }}</p>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</body>

</html>