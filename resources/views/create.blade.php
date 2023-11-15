<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <title>ANS</title>
</head>

<body>
    <form method="post" action="{{route('view')}}" enctype="multipart/form-data" class="w-full max-w-lg mx-auto">
        @csrf
        <div class="mb-4">
            <label for="firstname" class="block text-gray-700 text-sm font-bold mb-2">Car Model</label>
            <input type="text" name="model" id="firstname" class="appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
        </div>
        <div class="mb-4">
            <label for="lastname" class="block text-gray-700 text-sm font-bold mb-2">Color</label>
            <input type="text" name="color" id="lastname" class="appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
        </div>
        <div class="mb-4">
            <label for="education_qualification" class="block text-gray-700 text-sm font-bold mb-2">Mileage</label>
            <input type="text" name="mileage" id="education_qualification" class="appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
        </div>
        <div class="mb-4">
            <label for="photo" class="block text-gray-700 text-sm font-bold mb-2">image</label>
            <input type="file" name="image" id="photo" class="appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
        </div>
        <div>
            <label for="countries" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Select an option</label>
            <select id="date-dropdown" name="year" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
            </select>
        </div>
        <div class="flex items-center justify-between mt-4">
            <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                Submit
            </button>
        </div>
    </form>
    <script>
        let dateDropdown = document.getElementById('date-dropdown');
        let currentYear = new Date().getFullYear();
        let earliestYear = 1970;
        while (currentYear >= earliestYear) {
            let dateOption = document.createElement('option');
            dateOption.text = currentYear;
            dateOption.value = currentYear;
            dateDropdown.add(dateOption);
            currentYear -= 1;
        }
    </script>
</body>

</html>