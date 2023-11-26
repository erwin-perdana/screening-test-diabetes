<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('assets/css/layout.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.5.0/fonts/remixicon.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
</head>
<body class="bg-white">

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

    <div class="p-6">
        <div class="w-1/4 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-2 gap-6 mb-6">
            <div class="bg-white rounded-md border border-gray-100 p-6 shadow-md shadow-black/5 min-w-max">
                <div class="flex justify-between mb-6  min-w-max">
                    <div>
                        <div class="text-sm font-medium text-gray-400">Active Users</div>
                        <div class="text-2xl font-semibold mb-1">{{$activeUser}}</div>
                    </div>
                </div>
                <!-- Konten Active Users -->
            </div>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 mb-6">

            <div class="col-span-2 bg-white rounded-md border border-gray-100 p-6 shadow-md shadow-black/5">
                <div class="text-sm font-medium text-gray-400">Monthly Users</div>
                <canvas id="myChart" style="width:100%;max-width:600px"></canvas>
                <!-- Konten Monthly Users -->
            </div>
            <div class="row-span-2 bg-white rounded-md border border-gray-100 p-6 shadow-md shadow-black/5">
                <div class="text-sm font-medium text-gray-400">Users By Gender</div>
                <div class="flex justify-between">
                    <div>
                        <!-- Konten Users By Gender -->
                    </div>
                    <canvas id="myChart2" style="width:100%;max-width:600px"></canvas>
                </div>
                <div class="flex items-center">
                    <!-- Konten Users By Gender -->
                </div>
            </div>

        </div>
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-6 mb-6">
            <div class="bg-white border border-gray-100 shadow-md shadow-black/5 p-6 rounded-md lg:col-span-2">
                <div class="flex justify-between mb-4 items-start">
                    <div class="font-medium">Users by Location</div>
                </div>
                <!-- Konten Users by Location -->
                <div id="container"></div>
                <table class="w-full min-w-[460px]">
                    <tbody>
                        <!-- Daftar Users by Location -->
                    </tbody>
                </table>
            </div>
            <div class="bg-white border border-gray-100 shadow-md shadow-black/5 p-6 rounded-md">
                <div class="flex justify-between mb-4 items-start">
                    <div class="font-semibold">Users by Location</div>
                </div>
                <!-- Konten Users by Location -->
                <div class="overflow-x-auto">
                    <table class="w-full min-w-[460px]">
                        <tbody>
                            <!-- Daftar Users by Location -->
                            @foreach ($locations as $key => $location)
                                <tr>
                                    <td>{{$key}}</td>
                                    <td class="">{{$location}}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</main>
</div>
</body>
<script src="https://unpkg.com/@popperjs/core@2"></script>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script src="{{ asset('assets/js/script.js') }}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/svg-pan-zoom@3.6.1/dist/svg-pan-zoom.min.js"></script>
<script src="https://cdn.jsdelivr.net/gh/StephanWagner/svgMap@v2.7.2/dist/svgMap.min.js"></script>
<script>
    var xValues = ["Jan", "Feb", "Mar", "Apr", "Mei", "Jun", "Jul", "Agu", "Sep", "Okt", "Nov", "Des"];
    var yValues = @json($userAMonth);
    
    new Chart("myChart", {
      type: "bar",
      data: {
        labels: xValues,
        datasets: [{
          backgroundColor: "#A8C5DA",
          data: yValues
        }]
      },
      options: {
        legend: {display: false},
        title: {
          display: true,
          text: ""
        }
      }
    });
    </script>

<script>
    var xValues = ["Male", "Female"];
    var yValues = ['{{$maleCount}}', '{{$femaleCount}}'];
    var barColors = [
      "#0061A4",
      "#FF897D"
    ];
    
    new Chart("myChart2", {
      type: "doughnut",
      data: {
        labels: xValues,
        datasets: [{
          backgroundColor: barColors,
          data: yValues
        }]
      },
      options: {
        title: {
          display: true,
          text: ""
        }
      }
    });
    </script>
    <script src="https://code.highcharts.com/maps/highmaps.js"></script>
    <script src="https://code.highcharts.com/maps/modules/exporting.js"></script>
    <script>
        (async () => {

const topology = await fetch(
    'https://code.highcharts.com/mapdata/countries/id/id-all.topo.json'
).then(response => response.json());

// Prepare demo data. The data is joined to map using value of 'hc-key'
// property by default. See API docs for 'joinBy' for more info on linking
// data and map.
const data = [
    ['id-3700', 0], ['id-ac', 0], ['id-jt', 0], ['id-be', 0],
    ['id-bt', 0], ['id-kb', 0], ['id-bb', 0], ['id-ba', 0],
    ['id-ji', 0], ['id-ks', 0], ['id-nt', 0], ['id-se', 0],
    ['id-kr', 0], ['id-ib', 0], ['id-su', 0], ['id-ri', 0],
    ['id-sw', 0], ['id-ku', 0], ['id-la', 0], ['id-sb', 0],
    ['id-ma', 0], ['id-nb', 0], ['id-sg', 0], ['id-st', 0],
    ['id-pa', 0], ['id-jr', 0], ['id-ki', 0], ['id-1024', 0],
    ['id-jk', 0], ['id-go', 0], ['id-yo', 0], ['id-sl', 0],
    ['id-sr', 0], ['id-ja', 0], ['id-kt', 0]
];

// Create the chart
Highcharts.mapChart('container', {
    chart: {
        map: topology
    },

    title: {
        text: 'Highcharts Maps basic demo'
    },

    subtitle: {
        text: 'Source map: <a href="http://code.highcharts.com/mapdata/countries/id/id-all.topo.json">Indonesia</a>'
    },

    mapNavigation: {
        enabled: true,
        buttonOptions: {
            verticalAlign: 'bottom'
        }
    },

    colorAxis: {
        min: 0
    },

    series: [{
        data: data,
        name: 'Random data',
        states: {
            hover: {
                color: '#BADA55'
            }
        },
        dataLabels: {
            enabled: true,
            format: '{point.name}'
        }
    }]
});

})();

    </script>

<!-- <script>
    
    // Mengatur perilaku tombol toggle
    const toggleSidebarButton = document.getElementById('toggleSidebar');
    const sidebar = document.getElementById('sidebar');

    toggleSidebarButton.addEventListener('click', () => {
        sidebar.classList.toggle('hidden');
    });
</script> -->
</html>