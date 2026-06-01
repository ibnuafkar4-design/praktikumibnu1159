<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List Produk</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-100 min-h-screen p-8">

    <div class="max-w-6xl mx-auto">

        {{-- Header --}}
        <div class="mb-6">
            <h1 class="text-3xl font-bold text-gray-800">Daftar Produk Laptop</h1>
            <p class="text-gray-500 mt-1">Menampilkan semua data produk dari database</p>
        </div>

        {{-- Table Card --}}
        <div class="bg-white rounded-2xl shadow-md overflow-hidden">
            <table class="w-full text-sm text-left">

                {{-- Table Head --}}
                <thead class="bg-blue-600 text-white uppercase text-xs tracking-wider">
                    <tr>
                        <th class="px-6 py-4 w-12">No</th>
                        <th class="px-6 py-4">Nama Produk</th>
                        <th class="px-6 py-4">Deskripsi Produk</th>
                        <th class="px-6 py-4 text-right">Harga</th>
                    </tr>
                </thead>

                {{-- Table Body --}}
                <tbody class="divide-y divide-gray-100">
                    @foreach ($nama as $index => $item)
                    <tr class="hover:bg-blue-50 transition-colors duration-150">
                        <td class="px-6 py-4 text-gray-400 font-medium">
                            {{ $index + 1 }}
                        </td>
                        <td class="px-6 py-4 font-semibold text-gray-800">
                            {{ $item }}
                        </td>
                        <td class="px-6 py-4 text-gray-500 max-w-md">
                            {{ Str::limit($deskripsi[$index], 80) }}
                        </td>
                        <td class="px-6 py-4 text-right font-bold text-blue-600">
                            Rp {{ number_format($harga[$index], 0, ',', '.') }}
                        </td>
                    </tr>
                    @endforeach
                </tbody>

            </table>
        </div>

        {{-- Footer info --}}
        <p class="text-center text-gray-400 text-xs mt-4">
            Total: {{ count($nama) }} produk
        </p>

    </div>

</body>
</html>