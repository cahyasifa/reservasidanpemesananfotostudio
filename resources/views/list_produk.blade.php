<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <title>Daftar Produk</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-50 text-gray-900">

    <!-- Container utama sudah di-center -->
    <div class="mt-10 max-w-5xl mx-auto px-4">

        <h1 class="text-xl font-bold mb-4 text-center">Daftar Produk</h1>

        @if(session('success'))
            <div class="mb-4 p-4 bg-green-100 text-green-700 rounded text-center">
                {{ session('success') }}
            </div>
        @endif
        <table class="min-w-full border border-gray-300 shadow-md rounded-lg overflow-hidden text-sm mb-10">
            <thead class="bg-pink-500 text-white uppercase">
                <tr>
                    <th class="px-6 py-3 border-r">No</th>
                    <th class="px-6 py-3 border-r">Nama Produk</th>
                    <th class="px-6 py-3 border-r">Deskripsi Produk</th>
                    <th class="px-6 py-3">Harga Produk</th>
                </tr>
            </thead>
            <tbody class="bg-white">
                @forelse ($produk as $index => $item)
                    <tr class="hover:bg-gray-100 transition-colors">
                        <td class="px-6 py-4 border-t border-gray-200">{{ $index + 1 }}</td>
                        <td class="px-6 py-4 border-t border-gray-200 font-medium">{{ $item->nama }}</td>
                        <td class="px-6 py-4 border-t border-gray-200">{{ $item->deskripsi }}</td>
                        <td class="px-6 py-4 border-t border-gray-200 text-right">Rp{{ number_format($item->harga, 0, ',', '.') }}</td>
                    </tr>
                @empty
                <tr>
                        <td colspan="4" class="text-center py-4">Data produk belum ada.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>

        <h1 class="text-xl font-bold mb-4 text-center">Input Produk</h1>

        @if ($errors->any())
            <div class="mb-4 p-4 bg-red-100 text-red-700 rounded">
                <ul class="list-disc pl-5">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form method="POST" action="{{ route('produk.simpan') }}">
            @csrf
            <table class="table-auto mx-auto">
                <tr>
                    <td class="pr-4 py-2 font-semibold">Nama:</td>
                    <td colspan="3">
                        <input type="text" id="nama" name="nama" value="{{ old('nama') }}"
                            class="form-control border px-3 py-2 rounded w-full" required>
                    </td>
                </tr>
                <tr>
                    <td class="pr-4 py-2 font-semibold">Deskripsi:</td>
                    <td colspan="3">
                        <textarea id="deskripsi" name="deskripsi"
                            class="form-control border px-3 py-2 rounded w-full">{{ old('deskripsi') }}</textarea>
                    </td>
                </tr>
                <tr>
                    <td class="pr-4 py-2 font-semibold">Harga:</td>
                    <td>
                        <input type="number" id="harga" name="harga" value="{{ old('harga') }}" min="0" required
                            class="form-control border px-3 py-2 rounded w-full">
                            </td>
                    <td></td>
                    <td></td>
                </tr>
            </table>
           <div class="flex justify-center mt-4">
               <button type="submit"
               class="bg-pink-500 hover:bg-pink-600 text-white font-bold py-2 px-4 rounded">
               Simpan
            </button>
        </form>
    </div>

</body>
</html>