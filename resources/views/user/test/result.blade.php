@include('includes.header')
<body>
    <!-- Navbar menggunakan Tailwind CSS -->
    <nav class="bg-white-500 p-4">
        <div class="container mx-auto mt-10">
            <div class="flex items-center justify-between">
                <a href="{{route('user.dashboard')}}" class="text-2xl font-semibold tracking-widest no-underline">
                    <span class="text-black">Diabe  </span>
                    <span class="text-sky-700">Test</span>
                </a>
            </div>
        </div>
    </nav>

    <!-- Konten utama -->
    <div class="container mx-auto p-4 mt-20">
        @if ($poin >= 12)
            <!-- Konten Utama -->
        <div class="text-center">
            <h2 class="text-black text-3xl font-semibold mb-4">Hasil Risiko Diabetes Anda</h2>
        </div>
        <form class="text-center bg-white p-4 shadow-md rounded-md mt-4 md:w-1/2 lg:w-1/3 xl:w-1/2 mx-auto">
            <h2 class="text-black text-2xl font-normal mt-5">Risiko Tinggi</h2>
            <img src="{{ asset('assets/image/heart3.svg') }}" alt="Gambar 3" class="mt-4 mx-auto mt-10">
            <h3 class="text-black text-sm font-light mt-5">Risiko tinggi memiliki diabetes tipe 2 dalam jangka waktu 5 tahun ke depan. Risiko rendah ini mendapatkan lima (5) poin atau kurang berdasarkan pertanyaan yang sudah dijawab sebelumnya.</h3>
        </form>

        @elseif ($poin >= 6 && $poin <= 11)

        <div class="text-center">
            <h2 class="text-black text-3xl font-semibold mb-4">Hasil Risiko Diabetes Anda</h2>
        </div>
        <form class="text-center bg-white p-4 shadow-md rounded-md mt-4 md:w-1/2 lg:w-1/3 xl:w-1/2 mx-auto">
            <h2 class="text-black text-2xl font-normal mt-5">Risiko Sedang</h2>
            <img src="{{ asset('assets/image/heart2.svg') }}" alt="Gambar 3" class="mt-4 mx-auto mt-10">
            <h3 class="text-black text-sm font-light mt-5">Risiko tinggi memiliki diabetes tipe 2 dalam jangka waktu 5 tahun ke depan. Risiko rendah ini mendapatkan lima (5) poin atau kurang berdasarkan pertanyaan yang sudah dijawab sebelumnya.</h3>
        </form>

        @else

        <!-- Konten Utama -->
        <div class="text-center">
            <h2 class="text-black text-3xl font-semibold mb-4">Hasil Risiko Diabetes Anda</h2>
        </div>
        <form class="text-center bg-white p-4 shadow-md rounded-md mt-4 md:w-1/2 lg:w-1/3 xl:w-1/2 mx-auto">
            <h2 class="text-black text-2xl font-normal mt-5">Risiko Rendah</h2>
            <img src="{{ asset('assets/image/heart1.svg') }}" alt="Gambar 1" class="mt-4 mx-auto mt-10">
            <h3 class="text-black text-sm font-light mt-5">Risiko rendah memiliki diabetes tipe 2 dalam jangka waktu 5 tahun ke depan. Risiko rendah ini mendapatkan lima (5) poin atau kurang berdasarkan pertanyaan yang sudah dijawab sebelumnya.</h3>
        </form>

        @endif
        
    </div>
    <div class="text-center">
        <h2 class="text-black text-sky-700 text-2xl font-semibold mt-20">Apa yang bisa Anda lakukan untuk menjaga kesehatan</h2>
    </div>
    <div class="container mx-auto flex justify-center items-center space-x-4 mt-20">
        <!-- Blok 1 -->
        <div class="bg-white p-4 shadow-md rounded-md text-center">
            <img src="{{ asset('assets/image/heart1.svg') }}" alt="Gambar 1" class="mt-4 mx-auto mb-7">
            <h2 class="font-semibold mb-2">Menjaga Pola Makan</h2>
            <p class="font-light text-sm">Built Wicket longer admire do barton vanity itself do in it.</p>
        </div>

        <!-- Blok 2 -->
        <div class="bg-white p-4 shadow-md rounded-md text-center">
            <img src="{{ asset('assets/image/heart2.svg') }}" alt="Gambar 2" class="mt-4 mx-auto mb-7">
            <h2 class="font-semibold">Meningkatkan Aktifitas Fisik</h2>
            <p class="font-light text-sm">Built Wicket longer admire do barton vanity itself do in it.</p>
        </div>

        <!-- Blok 3 -->
        <div class="bg-white p-4 shadow-md rounded-md text-center">
            <img src="{{ asset('assets/image/heart3.svg') }}" alt="Gambar 3" class="mt-4 mx-auto mb-7">
            <h2 class="font-semibold">Menghentikan Kebiasaan</h2>
            <p class="font-light text-sm">Built Wicket longer admire do barton vanity itself do in it.</p>
        </div>
    </div>
    <div class="text-center mt-10">
        <a href="{{route('user.test.set_reminder')}}" class="w-1/2 t-20 w-1/3 py-2 px-4 my-2 border border-sky-700 bg-sky-700 text-white hover:bg-sky-700 hover:text-white rounded-md">
            Set Reminder Take Test
        </a>
    </div>
</body>
@include('includes.footer')
