@extends('user.layout')

@section('content')
<!-- Main Content -->

<div class="grid grid-rows-4 grid-flow-col gap-4">
    <div class="container mx-auto p-4 mt-20">
        <main class="flex justify-between">
            <div href="index.html" class="text-xl mt-6 ml-8 font-semibold tracking-widest no-underline">
                <span class="text-black">Profil</span>
            </a>
        </main>

        <!-- Konten Utama -->
        <form method="POST" action="{{route('user.profile.update_identity')}}" class="bg-white p-4 shadow-md rounded-md">
            @csrf
            @method('PUT')
            <div class="text-left">
                <h2 class="text-sky-700 text-xl font-bold mb-4">Change your indentity</h2>
            </div>
            <div class="mb-2 flex flex-col sm:flex-row">
                    <div class="w-full sm:w-1/2 sm:pr-2">
                        <label for="first_name" class="text-black text-sm font-semibold">First Name</label>
                        <input type="text" value="{{$user->first_name}}" id="first_name" name="first_name" class="border border-sky-800 rounded-lg px-3 py-2 w-full" placeholder="Search your waste bank here!">
                        @error('first_name')
                            <div class="text-rose-600 text-sm">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="w-full sm:w-1/2 sm:pl-2">
                        <label for="last_name" class="text-black text-sm font-semibold">Last Name</label>
                        <input type="text" value="{{$user->last_name}}" id="last_name" name="last_name" class="border border-sky-800 rounded-lg px-3 py-2 w-full" placeholder="Family Name">
                        @error('last_name')
                            <div class="text-rose-600 text-sm">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="mb-4">
                    <label for="email" class="text-black text-sm font-semibold">Email</label>
                    <input type="email" value="{{$user->email}}" id="email" name="email" class="border border-sky-800 rounded-lg px-3 py-2 w-full" placeholder="Active Email">
                    @error('email')
                        <div class="text-rose-600 text-sm">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-4">
                    <label for="" class="text-black text-sm font-semibold">Address</label>
                    <select name="address" class="border border-sky-800 rounded-lg px-3 py-2 w-full">
                        <option value="">choose city</option>
                        @foreach ($cities as $city)
                        @if ($city['Kabupaten Simeulue'] == Auth::user()->address)
                            <option selected>{{$city['Kabupaten Simeulue']}}</option>
                        @else
                            <option>{{$city['Kabupaten Simeulue']}}</option>
                        @endif
                        @endforeach
                    </select>
                    @error('address')
                        <div class="text-rose-600 text-sm">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-4">
                    <label class="flex items-center text-black text-sm font-light">
 
                    </label>
            
            </div>
            
            <div class="text-left">
                <button type="submit" class="bg-sky-700 text-white py-2 px-10 rounded-lg hover:bg-green-700">Save</button>
            </div>            
        </form>

        <form method="POST" action="{{route('user.profile.update_credential')}}" class="bg-white mt-10 p-4 shadow-md rounded-md">
            @csrf
            @method('PUT')
            <div class="text-left">
                <h2 class="text-sky-700 text-xl font-bold mb-4">Change your password</h2>
            </div>
                <div class="mb-4">
                    <label for="old_password" class="text-black text-sm font-semibold">Last Password</label>
                    <input type="password" id="old_password" name="old_password" class="border border-sky-800 rounded-lg px-3 py-2 w-full" placeholder="Old Password">
                    @error('old_password')
                        <div class="text-rose-600 text-sm">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-4">
                    <label for="password" class="text-black text-sm font-semibold">New Password</label>
                    <input type="password" id="password" name="password" class="border border-sky-800 rounded-lg px-3 py-2 w-full" placeholder="Password">
                    @error('password')
                        <div class="text-rose-600 text-sm">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-4">
                    <label for="password_confirmation" class="text-black text-sm font-semibold">Re-enter New Password</label>
                    <input type="password" id="password_confirmation" name="password_confirmation" class="border border-sky-800 rounded-lg px-3 py-2 w-full" placeholder="Password">
                    @error('password_confirmation')
                        <div class="text-rose-600 text-sm">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-4">
                    <label class="flex items-center text-black text-sm font-light">
 
                    </label>
            
            </div>
            
            <div class="text-left">
                <button type="submit" class="bg-sky-700 text-white py-2 px-10 rounded-lg hover:bg-green-700">Save</button>
            </div>            
        </form>
    </div>
</div>
@endsection