<x-layout>
    <x-slot:title>{{ $title }}</x-slot>

    <div class="max-w-5xl mx-auto text-center">
        <h1 class="text-4xl font-bold mb-4">Selamat Datang di Toko Bunga Kami 🌸</h1>

        <p class="text-gray-600 mb-8">
            Kami menyediakan berbagai rangkaian bunga segar dan indah untuk berbagai momen spesial Anda.
            Mulai dari ulang tahun, pernikahan, wisuda, hingga ucapan duka cita.
        </p>

        <div class="grid md:grid-cols-3 gap-6 text-left">
            <div class="p-5 border rounded-lg hover:shadow">
                <h2 class="text-xl font-semibold mb-2">🌷 Bunga Segar</h2>
                <p class="text-gray-600">
                    Kami selalu menggunakan bunga segar berkualitas tinggi dari petani lokal terbaik.
                </p>
            </div>

            <div class="p-5 border rounded-lg hover:shadow">
                <h2 class="text-xl font-semibold mb-2">🎁 Rangkaian Kustom</h2>
                <p class="text-gray-600">
                    Anda bisa memesan rangkaian bunga sesuai keinginan dan kebutuhan acara Anda.
                </p>
            </div>

            <div class="p-5 border rounded-lg hover:shadow">
                <h2 class="text-xl font-semibold mb-2">🚚 Pengiriman Cepat</h2>
                <p class="text-gray-600">
                    Kami menyediakan layanan pengiriman cepat agar bunga sampai dalam kondisi terbaik.
                </p>
            </div>
        </div>

        <div class="mt-10">
            <a href="/about"
               class="bg-pink-500 text-white px-6 py-3 rounded-lg hover:bg-pink-600">
                Pelajari Lebih Lanjut
            </a>
        </div>
    </div>
</x-layout>