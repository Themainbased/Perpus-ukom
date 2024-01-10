<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Buku</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.16/dist/tailwind.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.3/flowbite.min.css" rel="stylesheet" />
</head>
<body>
    <div class="container mx-auto p-4">
        <h1 class="text-4xl font-bold text-center mb-8">Data Buku</h1>
        <div class="flex items-center justify-between mb-4">
            <div class="w-1/3">
                <input type="text" class="w-full px-3 py-2 placeholder-gray-500 border rounded-md focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" placeholder="Cari buku...">
            </div>
            <div class="w-1/3 text-right">
                <a href="bukus/create" class="px-4 py-2 bg-indigo-600 text-white rounded-md hover:bg-indigo-500 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500">Tambah Buku</a>
            </div>
        </div>
        <table class="w-full table-auto border border-gray-300">
            <thead class="bg-gray-800 text-white">
                <tr>
                    <th class="border border-gray-300 py-2 px-4">ID</th>
                    <th class="border border-gray-300 py-2 px-4">Judul</th>
                    <th class="border border-gray-300 py-2 px-4">Penulis</th>
                    <th class="border border-gray-300 py-2 px-4">Penerbit</th>
                    <th class="border border-gray-300 py-2 px-4">Tahun Terbit</th>
                    <th class="border border-gray-300 py-2 px-4">Aksi</th>
                </tr>
            </thead>
            <tbody class="text-center">
                @foreach ($bukus as $buku)
                    <tr>
                        <td class="border border-gray-300 py-2 px-4">{{ $buku->bukuID }}</td>
                        <td class="border border-gray-300 py-2 px-4">{{ $buku->judul }}</td>
                        <td class="border border-gray-300 py-2 px-4">{{ $buku->penulis }}</td>
                        <td class="border border-gray-300 py-2 px-4">{{ $buku->penerbit }}</td>
                        <td class="border border-gray-300 py-2 px-4">{{ $buku->tahun_terbit }}</td>
                        <td class="border border-gray-300 py-2 px-4">
                            <a href="{{ route('bukus.edit', $buku->bukuID) }}" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 focus:outline-none">
                                Edit
                            </a>
                            <form action="{{ route('bukus.destroy', $buku->bukuID) }}" method="POST" class="inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 focus:outline-none">
                                    Hapus
                                </button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.3/flowbite.min.js"></script>
</body>
</html>