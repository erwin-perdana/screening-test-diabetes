<div class="flex relative">
    <button id="toggleSidebar" class="lg:hidden">
        <i class="fas fa-bars"></i>
    </button>
    <!-- Sidebar -->
    <aside id="sidebar" class="bg-blue-300 text-white w-64 min-h-screen p-6 flex flex-col items-center lg:flex">
        <a href="index.html" class="text-2xl font-semibold tracking-widest no-underline">
            <span class="text-black">Diabe  </span>
            <span class="text-sky-700">Test</span>
        </a>
        <ul class="mt-10">
            <li class="mb-2">
                <a href="{{route('admin.dashboard')}}" class="text-sky-900 sidebar-link block hover:bg-blue-700 rounded px-3 py-2">
                    <i class="fas fa-tachometer-alt mr-2"></i> Dashboard
                </a>
            </li>
            <li class="mb-2">
                <a href="{{route('admin.user')}}" class="text-sky-900 sidebar-link block hover:bg-blue-700 rounded px-3 py-2">
                    <i class="fas fa-users mr-2"></i> Data Pengguna
                </a>
            </li>
            <li class="mb-2">
                <a href="{{route('admin.response')}}" class="text-sky-900 sidebar-link block hover:bg-blue-700 rounded px-3 py-2">
                    <i class="fas fa-comments mr-2"></i> Data Respon Pengguna
                </a>
            </li>
            <li class="mb-2">
                <a href="{{route('admin.result')}}" class="text-sky-900 sidebar-link block hover:bg-blue-700 rounded px-3 py-2">
                    <i class="fas fa-chart-pie mr-2"></i> Data Hasil Resiko Pengguna
                </a>
            </li>
        </ul>
    </aside>

    <main class="w-full">
        <div class="py-2 px-6 bg-white flex items-center shadow-md shadow-black/5 sticky top-0 left-0 z-30">
            <!-- Tombol untuk menampilkan/menyembunyikan sidebar -->
            <!-- Breadcrumb navigation -->
            <ul class="flex items-center text-sm ml-4">
            </ul>
            <!-- Search and Notification dropdowns -->
            <ul class="ml-auto flex items-center">
                <!-- Search dropdown -->
                
                <!-- Notification dropdown -->
                <li class="dropdown mr-7">

                </li>
                <li class="dropdown mr-3">
                    <!-- Tombol untuk menampilkan dropdown notifikasi -->
                    <button type="button" class="font-bold dropdown-toggle text-black w-8 h-8 rounded flex items-center justify-center hover:bg-gray-50 hover[text-gray-600">
                        {{Auth::user()->role}}
                    </button>
                </li>
                <!-- User profile dropdown -->
    
                <li class="ml-3 dropdown">
                    <!-- Tombol untuk menampilkan dropdown pencarian -->
                    <a href="{{route('logout')}}" class="dropdown-toggle text-gray-400 w-8 h-8 rounded flex items-center justify-center">
                        <i class="ri-logout-box-line text-black font-bold"></i>
                    </a>
                </li>
            </ul>
        </div>