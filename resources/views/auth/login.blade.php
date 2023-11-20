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
                    <a href="{{route('register')}}" class="border border-sky-800 font-semibold text-1.5rem bg-sky-700 text-white py-2 px-4 rounded-lg hover:bg-green-700">Register</a>
                </div>
            </div>
        </div>
    </nav>

    <!-- Konten utama -->
    <div class="container mx-auto p-4 mt-20">
        <!-- Konten Utama -->
        <div class="text-center">
            <h2 class="text-black text-4xl font-bold mb-4">Login</h2>
        </div>
        <form method="POST" action="{{route('login.proces')}}" class="bg-white p-4 shadow-md rounded-md mt-4 md:w-1/2 lg:w-1/3 xl:w-1/2 mx-auto">
            @csrf
            <div class="mb-4 ">
                <label for="email" class="text-black text-sm font-semibold">Email</label>
                <input type="email" id="email" name="email" class="border border-sky-800 rounded-lg px-3 py-2 w-full" placeholder="Active Email">
                @error('email')
                    <div class="text-rose-600 text-sm">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-4">
                <label for="password" class="text-black text-sm font-semibold">Password</label>
                <input type="password" id="password" name="password" class="border border-sky-800 rounded-lg px-3 py-2 w-full" placeholder="Password">
                @error('password')
                    <div class="text-rose-600 text-sm">{{ $message }}</div>
                @enderror
            </div>
            <div class="text-center">
                <button type="submit" class="bg-sky-700 text-white py-2 px-10 rounded-lg hover:bg-green-700">Login</button>
            </div>            
        </form>
    </div>
    
    

    <!-- Footer menggunakan Tailwind CSS -->
    <div class="bg-white-500 py-8">
        
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
