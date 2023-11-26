@include('includes.header')
<body>
    <!-- Navbar menggunakan Tailwind CSS -->
    <nav class="bg-white-500 p-4">
        <div class="container mx-auto mt-10">
            <div class="flex items-center justify-between">
                <a href="{{route('home')}}" class="text-2xl font-semibold tracking-widest no-underline">
                    <span class="text-black">Diabe  </span>
                    <span class="text-sky-700">Test</span>
                </a>
                <div class="space-x-4">
                    <a href="{{route('login')}}" class="border border-sky-800 font-semibold text-1.5rem bg-white-500 text-sky-700 py-2 px-4 rounded-lg hover:bg-green-600">Login</a>
                    <a href="{{route('register')}}" class="bg-sky-700 text-white py-2 px-4 rounded-lg hover:bg-green-600">Daftar</a>
                </div>
            </div>
        </div>
    </nav>

    <!-- Konten utama -->
    <div class="container mx-auto p-4 flex flex-col space-x-4 md:flex-row md:space-x-8 mt-20">
        <!-- Gambar di Pinggir -->
        
        <!-- Konten Utama -->
        <div class="w-full md:w-11/12 p-4">
            <h2 class="text-sky-700 text-lg font-semibold mb-4">Hi, Folks!</h2>
            <h2 class="text-sky-700 text-5xl font-bold mb-4">Discover your Diabetes</h2>
            <h2 class="text-sky-700 text-5xl font-bold mb-4">Risk Score</h2>
            <p class="mb-8">Are you curious about your diabetes risk and want to take control of your health? Our engaging quiz is here to help! Diabetes is a widespread health concern. Don't wait - take our quiz today and empower yourself with the knowledge you need to make informed decisions about your health.</p>
            <div class="space-x-4">
                <a href="{{route('register')}}" class="border border-sky-800 font-semibold text-lg bg-white text-sky-700 py-2 px-4 rounded-lg hover:bg-green-600">Take your test Now</a>
            </div>
        </div>
        <img src="{{ asset('assets/image/homepage.png') }}" alt="Gambar Besar" class="w-1/2.5 object-contain mb-4 md:mb-0 md:w-1/2 mx-auto">
    </div>
    
    

    <!-- Footer menggunakan Tailwind CSS -->
    <div class="bg-white-500 py-8">
        <div class="container mx-auto">
            <div class="text-sky-700 text-center text-xl font-normal mb-4">
            AUSDRISK  
            </div>
            <div class="text-sky-700 text-center text-3xl font-semibold mb-4">
                Risk Category   
            </div>
        </div>
        <div class="container mx-auto flex justify-center items-center space-x-4">
            <!-- Blok 1 -->
            <div class="bg-white p-4 shadow-md rounded-md text-center">
                <img src="{{ asset('assets/image/heart1.svg') }}" alt="Gambar 1" class="mt-4 mx-auto mb-7">
                <h2 class="text-smk font-semibold mb-2">Ringan</h2>
                <p>Built Wicket longer </p>
                <p>admire do barton </p>
                <p>vanity itself do in it.</p>
            </div>
    
            <!-- Blok 2 -->
            <div class="bg-white p-4 shadow-md rounded-md text-center">
                <img src="{{ asset('assets/image/heart2.svg') }}" alt="Gambar 2" class="mt-4 mx-auto mb-7">
                <h2 class="text-smk font-semibold">Sedang</h2>
                <p>Built Wicket longer </p>
                <p>admire do barton </p>
                <p>vanity itself do in it.</p>
            </div>
    
            <!-- Blok 3 -->
            <div class="bg-white p-4 shadow-md rounded-md text-center">
                <img src="{{ asset('assets/image/heart3.svg') }}" alt="Gambar 3" class="mt-4 mx-auto mb-7">
                <h2 class="text-sm font-semibold mb-2">Tinggi</h2>
                <p>Built Wicket longer </p>
                <p>admire do barton </p>
                <p>vanity itself do in it.</p>
            </div>
        </div>
        
    </div>
    <footer class="footer" >
        <div class="waves">
            <div class="wave" id="wave1"></div>
            <div class="wave" id="wave2"></div>
            <div class="wave" id="wave3"></div>
            <div class="wave" id="wave4"></div>
        </div>
    </footer>
</body>
</html>
