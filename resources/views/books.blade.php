<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Daftar Buku</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100 font-sans antialiased p-8">
    <div class="container mx-auto">
        <h1 class="text-3xl font-bold mb-6 text-center text-gray-800">Daftar Buku</h1>

        <div class="overflow-x-auto">
            <table class="min-w-full bg-white shadow-md rounded-lg overflow-hidden">
                <thead class="bg-gray-200">
                    <tr>
                        <th class="py-3 px-6 text-left text-sm font-medium text-gray-700">Judul</th>
                        <th class="py-3 px-6 text-left text-sm font-medium text-gray-700">Deskripsi</th>
                        <th class="py-3 px-6 text-left text-sm font-medium text-gray-700">Harga</th>
                        <th class="py-3 px-6 text-left text-sm font-medium text-gray-700">Stok</th>
                        <th class="py-3 px-6 text-left text-sm font-medium text-gray-700">Cover</th>
                        <th class="py-3 px-6 text-left text-sm font-medium text-gray-700">Genre ID</th>
                        <th class="py-3 px-6 text-left text-sm font-medium text-gray-700">Author ID</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-100">
                    @foreach ($books as $book)
                        <tr class="hover:bg-gray-50">
                            <td class="py-4 px-6 text-sm text-gray-800">{{ $book['title'] }}</td>
                            <td class="py-4 px-6 text-sm text-gray-800">{{ $book['description'] }}</td>
                            <td class="py-4 px-6 text-sm text-gray-800">Rp
                                {{ number_format($book['price'], 0, ',', '.') }}</td>
                            <td class="py-4 px-6 text-sm text-gray-800">{{ $book['stock'] }}</td>
                            <td class="py-4 px-6 text-sm text-gray-800">
                                <img src="{{ asset('images/' . $book['cover_photo']) }}" alt="{{ $book['title'] }}"
                                    class="w-20 h-auto rounded shadow">
                            </td>
                            <td class="py-4 px-6 text-sm text-gray-800">{{ $book['genre_id'] }}</td>
                            <td class="py-4 px-6 text-sm text-gray-800">{{ $book['author_id'] }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</body>

</html>
