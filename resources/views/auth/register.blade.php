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
                </div>
            </div>
        </div>
    </nav>

    <!-- Konten utama -->
    <div class="container mx-auto p-4 mt-20 md:max-xl:flex">
        <!-- Konten Utama -->
        <div class="text-center">
            <h2 class="text-black text-4xl font-bold mb-4">Daftar Akun Baru</h2>
        </div>
        <form method="POST" action="{{route('register.proces')}}" class="bg-white p-4 shadow-md rounded-md mt-4 md:w-1/2 lg:w-1/3 xl:w-1/2 mx-auto">
            @csrf
            @method('POST')
            <div class="mb-2 flex flex-col sm:flex-row">
                <div class="w-full sm:w-1/2 sm:pr-2">
                    <label for="first_name" class="text-black text-sm font-semibold">First Name</label>
                    <input type="text" id="first_name" name="first_name" class="border border-sky-800 rounded-lg px-3 py-2 w-full" placeholder="Search your waste bank here!">
                    @error('first_name')
                        <div class="text-rose-600 text-sm">{{ $message }}</div>
                    @enderror
                </div>
                <div class="w-full sm:w-1/2 sm:pl-2">
                    <label for="last_name" class="text-black text-sm font-semibold">Last Name</label>
                    <input type="text" id="last_name" name="last_name" class="border border-sky-800 rounded-lg px-3 py-2 w-full" placeholder="Family Name">
                    @error('last_name')
                        <div class="text-rose-600 text-sm">{{ $message }}</div>
                    @enderror
                </div>
                </div>
                <div class="mb-4">
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
                <div class="mb-4">
                    <label for="password_confirmation" class="text-black text-sm font-semibold">Re-enter Password</label>
                    <input type="password" id="password_confirmation" name="password_confirmation" class="border border-sky-800 rounded-lg px-3 py-2 w-full" placeholder="Password">
                    @error('password_confirmation')
                        <div class="text-rose-600 text-sm">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-4">
                    <label for="" class="text-black text-sm font-semibold">Address</label>
                    <select name="address" class="border border-sky-800 rounded-lg px-3 py-2 w-full">
                        <option value="">choose city</option>
                        @foreach ($cities as $city)
                            <option>{{$city['Kabupaten Simeulue']}}</option>
                        @endforeach
                    </select>
                    @error('address')
                        <div class="text-rose-600 text-sm">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-4">
                    <label class="flex items-center text-black text-sm font-light">
                        <input type="checkbox" name="agreement" class="mr-2">
                        I’ve read and agree with Terms of Service and our Privacy Policy
                    </label>
                
            </div>
            
            <div class="text-center">
                <button type="submit" class="bg-sky-700 text-white py-2 px-10 rounded-lg hover:bg-green-700">Register</button>
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
