@extends('user.layout')

@section('content')
<!-- Main Content -->

<div class="container mx-auto p-4 mt-20">
    <main class="flex justify-between">
        <a href="index.html" class="text-xl ml-8 font-semibold tracking-widest no-underline">
            <span class="text-black">Mulai Test</span>
        </a>
    </main>

    @if ($show == "start_test")
        <!-- Konten Utama -->
        <form class="bg-white p-4 shadow-md rounded-md mt-4 md:w-1/2 lg:w-1/3 xl:w-1/2 mx-auto">
            <div class="text-center">
                <h2 class="text-black text-4xl font-bold mb-4 mt-10">Selamat datang</h2>
                <h1 class="text-black text-lg font-normal mb-4 mt-20">Silakan mulai test terlebih dahulu</h1>
                <a href="{{route('user.test.start')}}" class="mt-20 w-1/3 py-2 px-4 my-2 border border-sky-700 text-sky-700 hover:bg-sky-700 hover:text-white rounded-md">
                    Mulai Test
                </a>
            </div>
        </form>
    @endif

    @if ($show == "wait_test")
        <!-- Konten Utama -->
        <form class="bg-white p-4 shadow-md rounded-md mt-4 md:w-1/2 lg:w-1/3 xl:w-1/2 mx-auto">
            <div class="text-center">
                <h1 class="text-black text-lg font-normal mb-4 mt-20">Anda dapat mengikuti tes pada {{Carbon\Carbon::parse($schedule->date)->format('d F Y')}}</h1>
                <br>
                <button disabled class="mt-20 w-1/3 py-2 px-4 my-2 border border-sky-700 bg-slate-700 text-white rounded-md">
                    Mulai Test
                </button>
            </div>
        </form>
    @endif

    @if ($show == "reminder")
        <!-- Konten Utama -->
        <form action="{{route('user.test.store_reminder')}}" method="POST" class="bg-white p-4 shadow-md rounded-md mt-4 md:w-1/2 lg:w-1/3 xl:w-1/2 mx-auto">
            @csrf
            @method('POST')
            <div class="text-center">
                <h1 class="text-black text-lg font-normal mb-4 mt-20">Aplikasi akan otomatis menjadwalkan 
                    tes pada {{$testDate}}</h1>
                <button name="choose" value="no" class="mt-20 w-1/3 py-2 px-4 my-2 border border-sky-700 text-sky-700 hover:bg-sky-700 hover:text-white rounded-md">
                    Kembali
                </button>
                <button name="choose" value="yes" class="mt-20 w-1/3 py-2 px-4 my-2 border border-sky-700 text-white bg-sky-700 hover:bg-sky-700 hover:text-white rounded-md">
                    Setuju
                </button>
            </div>
        </form>
    @endif
</div>
@endsection