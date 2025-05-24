  <!DOCTYPE html>
  <html lang="en">

  <head>
      <meta charset="UTF-8">
      <title>Daftar Buku</title>
      <script src="https://cdn.tailwindcss.com"></script>
  </head>

  <body class="bg-gray-100 font-sans antialiased p-8">
      <div class="container mx-auto">
          <h1 class="text-3xl font-bold mb-6 text-center text-gray-800">Daftar genre</h1>

          <div class="overflow-x-auto">
              <table class="min-w-full bg-white shadow-md rounded-lg overflow-hidden">
                  <thead class="bg-gray-200">
                      <tr>
                          <th class="py-3 px-6 text-left text-sm font-medium text-gray-700">Nama</th>
                          <th class="py-3 px-6 text-left text-sm font-medium text-gray-700">Biografi</th>
                      </tr>
                  </thead>
                  <tbody class="divide-y divide-gray-100">
                      {{-- {{ dd($genres) }} --}}
                      @foreach ($authors as $author)
                          <tr class="hover:bg-gray-50">
                              <td class="py-4 px-6 text-sm text-gray-800">{{ $author['name'] }}</td>
                              <td class="py-4 px-6 text-sm text-gray-800">{{ $author['bio'] }}</td>
                          </tr>
                      @endforeach
                  </tbody>
              </table>
          </div>
      </div>
  </body>

  </html>
