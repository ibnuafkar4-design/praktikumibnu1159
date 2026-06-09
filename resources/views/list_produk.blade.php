<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List Produk</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-100 min-h-screen p-8">

    <div class="max-w-6xl mx-auto space-y-8">

        {{-- Header --}}
        <div>
            <h1 class="text-3xl font-bold text-gray-800">Daftar & Input Produk Laptop</h1>
            <p class="text-gray-500 mt-1">Kelola data produk dan tampilkan langsung dari database</p>
        </div>

        {{-- FORM INPUT PRODUK (BARU) --}}
        <div class="bg-white rounded-2xl shadow-md p-6">
            <div class="mb-4">
                <h2 class="text-xl font-bold text-gray-800">Input Produk</h2>
            </div>
            
            <form method="POST" action="{{ route('produk.simpan') }}" class="space-y-4">
                @csrf
                
                <div class="grid grid-cols-1 md:grid-cols-4 gap-4 items-center">
                    <label for="nama" class="font-medium text-gray-700">Nama:</label>
                    <div class="md:col-span-3">
                        <input type="text" class="w-full rounded-lg border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500" id="nama" name="nama" required>
                    </div>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-4 gap-4 items-start">
                    <label for="deskripsi" class="font-medium text-gray-700 pt-2">Deskripsi:</label>
                    <div class="md:col-span-3">
                        <textarea class="w-full rounded-lg border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500" id="deskripsi" name="deskripsi" rows="3" required></textarea>
                    </div>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-4 gap-4 items-center">
                    <label for="harga" class="font-medium text-gray-700">Harga:</label>
                    <div class="md:col-span-3">
                        <input type="number" class="w-full rounded-lg border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500" id="harga" name="harga" required>
                    </div>
                </div>

                <div class="flex justify-end pt-2">
                    <button type="submit" class="bg-blue-600 hover:bg-blue-700 text-white font-semibold px-6 py-2 rounded-lg shadow transition-colors duration-150">
                        Simpan
                    </button>
                </div>
            </form>
        </div>
        {{-- ============================================================= --}}

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