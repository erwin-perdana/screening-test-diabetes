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

    <!-- Main Content -->

    <div class="container mx-auto p-4 mt-20">
        <main class="flex justify-between">
            <a href="index.html" class="text-xl ml-8 font-semibold tracking-widest no-underline">
                <span class="text-black">Set Reminder Take Test</span>
            </a>
        </main>
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
    </div>
</body>
@include('includes.footer')
