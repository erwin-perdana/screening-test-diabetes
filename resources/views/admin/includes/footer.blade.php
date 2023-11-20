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
    var xValues = ["Jan", "Feb", "Mar", "Apr", "Mei","Jun"];
    var yValues = [55, 49, 44, 24, 30, 23];
    var barColors = ["#A8C5DA","#A8C5DA","#A8C5DA","#A8C5DA","#A8C5DA"];
    
    new Chart("myChart", {
      type: "bar",
      data: {
        labels: xValues,
        datasets: [{
          backgroundColor: barColors,
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
    var yValues = [55, 49];
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