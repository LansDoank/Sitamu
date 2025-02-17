<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <title>Admin - Dashboard</title>

    <!-- Custom fonts for this template-->
    <link href="/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="/css/sb-admin-2.min.css" rel="stylesheet">
    <link rel="icon" href="/img/logo.png">

    <style>
        @media screen and (max-width:576px){
            #brand {
                display: none;
            }
        }
    </style>
</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper" class="flex justify-between">

        <!-- Sidebar -->
        <x-sidebar></x-sidebar>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column w-[500px]">

            <!-- Main Content -->
            <div id="content" class="">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <div>
                        <h1 class="text-gray-600 text-2xl ">Dasbor</h1>
                    </div>

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">{{ $username }}</span>
                                <img class="img-profile rounded-circle" src="/img/undraw_profile.svg">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="/logout" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Content Row -->
                    <div class="row">

                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-primary shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                                Tamu (HARIAN)</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $guestDaily }}
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                            <img src="/img/guests.png" class="w-12" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-success shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                                Tamu (Mingguan)</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $guestWeekly }}
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                            <img src="/img/guests.png" class="w-12" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-danger border border-s-[#EE6164] shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-danger text-uppercase mb-1">
                                                Tamu
                                                (Bulanan)
                                            </div>
                                            <div class="row no-gutters align-items-center">
                                                <div class="col-auto">
                                                    <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">
                                                        {{ $guestMonthly }}</div>
                                                </div>

                                            </div>
                                        </div>
                                        <div class="col-auto">
                                            <img src="/img/guests.png" class="w-12" alt="">

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Pending Requests Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-warning shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                                Tamu (TAHUNAN)</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $guestYearly }}
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                            <img src="/img/guests.png" class="w-12" alt="">

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Content Row -->

                    <div class="row">

                        <!-- Area Chart -->
                        <div class="w-full">
                            <div class="card shadow mb-4">
                                <!-- Card Header - Dropdown -->
                                <div
                                    class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                    <h6 class="m-0 font-weight-bold text-primary">Pratinjau</h6>
                                </div>

                                <!-- Card Body -->
                                <div class="card-body w-full">
                                    <div class="w-full">
                                        <canvas id="line-chart" class="w-full"
                                            style="width: 100% !important;"></canvas>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="w-full">
                            <div class="card shadow mb-4">
                                <!-- Card Header - Dropdown -->
                                <div
                                    class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                    <h6 class="m-0 font-weight-bold text-primary">Instansi</h6>
                                </div>
                                <!-- Card Body -->
                                <div class="card-body w-full">
                                    <div class="w-full">
                                        <canvas id="overview" class="w-full"
                                            style="width: 100% !important;"></canvas>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Pie Chart -->
                        <div class="w-full">
                            <div class="card shadow mb-4">
                                <!-- Card Header - Dropdown -->
                                <div
                                    class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                    <h6 class="m-0 font-weight-bold text-primary">Grafik Pai</h6>
                                    <div class="dropdown no-arrow">
                                        <a class="dropdown-toggle" href="#" role="button"
                                            id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true"
                                            aria-expanded="false">
                                            <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                                        </a>
                                    </div>
                                </div>
                                <!-- Card Body -->
                                <div class="card-body w-full flex flex-col-reverse flex-wrap md:flex-nowrap">
                                    <div class="w-full md:w-1/2 flex flex-col justify-center p-2">
                                        <h2 class="text-gray-800 mb-2 md:mb-3 text-lg">Tujuan</h2>
                                        <ul class="text-decoration-none list-none">
                                            <li class="flex my-2 text-sm md:text-xl justify-between">
                                                Studi Banding
                                                <div class="md:mx-5 flex">
                                                    50
                                                </div>
                                            </li>
                                            <li class="flex my-2 text-sm md:text-xl justify-between">
                                                Pendidikan
                                                <div class="md:mx-5 flex">
                                                    6
                                                </div>
                                            </li>
                                            <li class="flex my-2 text-sm md:text-xl justify-between">
                                                Wisata
                                                <div class="md:mx-5 flex">
                                                    14
                                                </div>
                                            </li>
                                            <li class="flex my-2 text-sm md:text-xl justify-between">
                                                Kunjungan
                                                <div class="md:mx-5 flex">
                                                    30
                                                </div>
                                            </li>
                                            <li class="flex my-2 text-sm md:text-xl justify-between">
                                                Lainnya
                                                <div class="md:mx-5 flex">
                                                    14
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="flex justify-center items-center md:px-24 md:py-10 w-full md:w-1/2">
                                        <canvas id="pie-chart" class="w-full md:w-1/2"></canvas>
                                    </div>

                                </div>
                            </div>
                        </div>

                        {{-- Geographical Chart --}}
                        <div class="w-full">
                            <div
                                class="card-header bg-white py-3 d-flex flex-row align-items-center justify-content-between">
                                <h6 class="m-0 font-weight-bold text-primary">Grafik Geografis</h6>
                                <div class="dropdown no-arrow">
                                    <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
                                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="flex">
                                <div id="geochart" style="width: 100%;"></div>
                            </div>
                        </div>

                        <div class="w-full">
                            <div class="card shadow mb-4">
                                <!-- Card Header - Dropdown -->
                                <div
                                    class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                    <h6 class="m-0 font-weight-bold text-primary">Grafik Waktu</h6>
                                    <div class="dropdown no-arrow">
                                        <a class="dropdown-toggle" href="#" role="button"
                                            id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true"
                                            aria-expanded="false">
                                            <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                                        </a>
                                    </div>
                                </div>


                                <!-- Card Body -->
                                <div class="card-body w-full">
                                    <div class="w-full">
                                        <canvas id="waktu-chart" class="w-full"
                                            style="width: 100% !important;"></canvas>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Sitamu 2025</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="/logout">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="/vendor/jquery/jquery.min.js"></script>
    <script src="/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="/js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="/vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="/js/demo/chart-area-demo.js"></script>
    <script src="/js/demo/chart-pie-demo.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script></script>
    <script>
        const lineData = [{

        }]
        const lineChart = new Chart(document.getElementById('line-chart'), {
            type: 'line',
            data: {
                labels: ['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli','Agustus','September','Oktober','November','Desember'],
                datasets: [{
                    label: 'Tamu berdasarkan harian',
                    data: [10, 5, 8, 7, 14, 17, 3,5,9,11,12,18]
                }]
            },
        });

        const overviewData = [{
                day: "",
                guests: 30
            },
            {
                day: "",
                guests: 50
            },
            {
                day: "",
                guests: 80
            },
            {
                day: "",
                guests: 70
            },
            {
                day: "",
                guests: 120
            },
            {
                day: "",
                guests: 85
            },
            {
                day: "",
                guests: 75,
            },
            {
                day: "",
                guests: 65,
            },
            {
                day: "",
                guests: 40,
            },
        ];

        const overview = new Chart(document.getElementById('overview'), {
            type: 'bar',
            data: {
                labels: overviewData.map(data => data.day),
                datasets: [{
                    label: 'Tamu berdasarkan instansi',
                    data: overviewData.map(row => row.guests),
                    backgroundColor: ['rgba(44, 125, 157, 1)'],
                }]
            },
        });

        const pieData = [{
                label: 'Studi Banding',
                value: 5
            },
            {
                label: 'Pendidikan',
                value: 10
            },
            {
                label: 'Wisata',
                value: 15
            },
            {
                label: 'Kunjungan',
                value: 20
            },
            {
                label: 'Lainnya',
                value: 50
            }
        ];

        const pieChart = new Chart('pie-chart', {
            type: 'doughnut',
            data: {
                labels: pieData.map(data => data.label),
                datasets: [{
                    data: pieData.map(data => data.value),
                    backgroundColor: [
                        'rgba(181, 78, 225, 1)',
                        'rgba(225, 80, 80, 1)',
                        'rgba(255, 162, 70, 1)',
                        'rgba(246, 194, 62, 1)',
                        'rgba(95, 230, 68, 1)',
                    ]
                }]
            }
        });

        const waktuData = [{
                time: "00:00",
                guests: 1
            },
            {
                time: "01:00",
                guests: 2
            },
            {
                time: "02:00",
                guests: 8
            },
            {
                time: "03:00",
                guests: 9
            },
            {
                time: "04:00",
                guests: 3
            },
            {
                time: "05:00",
                guests: 2
            },
            {
                time: "06:00",
                guests: 1
            },
            {
                time: "07:00",
                guests: 5
            },
            {
                time: "08:00",
                guests: 3
            },
            {
                time: "09:00",
                guests: 12
            },
            {
                time: "10:00",
                guests: 11
            },
            {
                time: "11:00",
                guests: 8
            },
            {
                time: "12:00",
                guests: 5
            },
            {
                time: "13:00",
                guests: 1
            },
            {
                time: "14:00",
                guests: 1
            },
            {
                time: "15:00",
                guests: 4
            },
            {
                time: "16:00",
                guests: 8
            },
            {
                time: "17:00",
                guests: 3
            },
            {
                time: "18:00",
                guests: 5
            },
            {
                time: "19:00",
                guests: 7
            },
            {
                time: "20:00",
                guests: 9
            },
            {
                time: "21:00",
                guests: 9
            },
            {
                time: "22:00",
                guests: 5
            },
            {
                time: "23:00",
                guests: 5
            },
            {
                time: "24:00",
                guests: 4
            },
        ];

        const waktuChart = new Chart(document.getElementById('waktu-chart'), {
            type: 'bar',
            data: {
                labels: waktuData.map(data => data.time),
                datasets: [{
                    label: 'Guests by time',
                    data: waktuData.map(row => row.guests),
                    backgroundColor: ['rgba(44, 125, 157, 1)'],
                }]
            },
        });
    </script>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script>
        google.charts.load('current', {
            'packages': ['geochart'],
            'mapsApiKey': 'YOUR_GOOGLE_MAPS_API_KEY' // Opsional, untuk fitur tambahan
        });
        google.charts.setOnLoadCallback(drawRegionsMap);

        function drawRegionsMap() {
            var data = google.visualization.arrayToDataTable([
                ['Province', 'Visitors'],
                ['ID-AC', 500], // Aceh
                ['ID-JK', 300], // Jakarta
                ['ID-JT', 500], // Jawa Tengah
                ['ID-JI', 400], // Jawa Timur
                ['ID-BT', 450] // Banten
            ]);

            var options = {
                region: 'ID', // Kode negara Indonesia
                resolution: 'provinces',
                colorAxis: {
                    colors: ['#e0f3db', '#0868ac']
                }
            };

            var chart = new google.visualization.GeoChart(document.getElementById('geochart'));
            chart.draw(data, options);
        }
    </script>

</body>

</html>
