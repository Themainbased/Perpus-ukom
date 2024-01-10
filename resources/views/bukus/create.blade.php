<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"="width=devicewidth, initial-=1.0
    <title>Tambah Buku</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.16/dist/tailwind.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.3/flowbite.min.css" rel="stylesheet" />
</head>
<body class="bg-gray-100">
    <div class="container mx-auto px-6 py-4">
        <h1 class="text-3xl font-medium text-gray-800">Tambah Buku</h1>

        @if ($errors->any())
            <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative mt-4" role="alert">
                <strong class="font-bold">Error:</strong>
                <ul class="list-disc list-inside">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('bukus.store') }}" method="POST" class="mt-6">
            @csrf

            <div class="mb-4">
                <label for="judul" class="block text-gray-700 font-medium mb-2">Judul:</label>
                <input type="text" name="judul" id="judul" required class="bg-gray-200 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
            </div>

            <div class="mb-4">
                <label for="penulis" class="block text-gray-700 font-medium mb-2">Penulis:</label>
                <input type="text" name="penulis" id="penulis" required class="bg-gray-200 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
            </div>

            <div class="mb-4">
                <label for="penerbit" class="block text-gray-700 font-medium mb-2">Penerbit:</label>
                <input type="text" name="penerbit" id="penerbit" required class="bg-gray-200 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
            </div>

            <div class="mb-4">
                <label for="tahun_terbit" class="block text-gray-700 font-medium mb-2">Tahun Terbit:</label>
                <input type="number" name="tahun_terbit" id="tahun_terbit" required class="bg-gray-200 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
            </div>

            <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-medium py-2 px-4 rounded focus:outline-none focus:shadow-outline">Simpan</button>
        </form>
    </div>

    <script src="{{ asset('flowbite/flowbite.min.js') }}"></script>
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>