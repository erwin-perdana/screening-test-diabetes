@extends('user.layout')
@section('title', 'Hasil Resiko Diabetes Anda')
@section('content')
<!-- Main Content -->

<div class="container mx-auto p-4 mt-20">
    @if (!isset($test))
        <!-- Konten Utama -->
        <form class="bg-white p-4 shadow-md rounded-md mt-4 md:w-1/2 lg:w-1/3 xl:w-1/2 mx-auto">
            <div class="text-center">
                <h1 class="text-black text-lg font-normal mb-4 mt-20">Silakan mulai test terlebih dahulu</h1>
            </div>
        </form>
    @endif

    @if (isset($test))
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
    @endif
</div>
@endsection