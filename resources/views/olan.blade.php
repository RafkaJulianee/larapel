<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Admin - Sekolah Unggul</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">

    <!-- Icons -->
    <script src="https://unpkg.com/lucide@latest"></script>

    <!-- Charts -->
    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>

    <style>
        body {
            font-family: 'Plus Jakarta Sans', sans-serif;
        }
    </style>
</head>

<body class="bg-gray-50 text-gray-800 antialiased">

    <div class="min-h-screen flex flex-col md:flex-row">

        <!-- Sidebar -->
        <aside class="w-full md:w-64 bg-white border-r border-gray-200 fixed md:sticky top-0 h-screen overflow-y-auto hidden md:block z-30">
            <div class="p-6 border-b border-gray-100 flex items-center gap-3">
                <div class="w-8 h-8 bg-gradient-to-br from-orange-500 to-red-600 rounded-lg flex items-center justify-center text-white font-bold text-lg shadow-lg shadow-orange-500/30">
                    SU
                </div>
                <h1 class="font-bold text-lg text-gray-900">Admin<span class="text-orange-600">Panel</span></h1>
            </div>

            <nav class="p-4 space-y-1">
                <p class="px-4 text-xs font-semibold text-gray-400 uppercase tracking-wider mb-2 mt-4">Utama</p>
                <a href="#" class="flex items-center gap-3 px-4 py-3 bg-orange-50 text-orange-700 rounded-xl font-medium transition-colors">
                    <i data-lucide="layout-dashboard" class="w-5 h-5"></i>
                    Dashboard
                </a>
                <a href="{{ route('siswa.index') }}" class="flex items-center gap-3 px-4 py-3 text-gray-600 hover:bg-gray-50 hover:text-gray-900 rounded-xl font-medium transition-colors">
                    <i data-lucide="users" class="w-5 h-5"></i>
                    Siswa
                </a>
                <a href="{{ route('kelas.index') }}" class="flex items-center gap-3 px-4 py-3 text-gray-600 hover:bg-gray-50 hover:text-gray-900 rounded-xl font-medium transition-colors">
                    <i data-lucide="school" class="w-5 h-5"></i>
                    Kelas
                </a>
                <a href="#" class="flex items-center gap-3 px-4 py-3 text-gray-600 hover:bg-gray-50 hover:text-gray-900 rounded-xl font-medium transition-colors">
                    <i data-lucide="graduation-cap" class="w-5 h-5"></i>
                    Guru
                </a>

                <p class="px-4 text-xs font-semibold text-gray-400 uppercase tracking-wider mb-2 mt-6">Manajemen</p>
                <a href="#" class="flex items-center gap-3 px-4 py-3 text-gray-600 hover:bg-gray-50 hover:text-gray-900 rounded-xl font-medium transition-colors">
                    <i data-lucide="calendar" class="w-5 h-5"></i>
                    Jadwal
                </a>
                <a href="#" class="flex items-center gap-3 px-4 py-3 text-gray-600 hover:bg-gray-50 hover:text-gray-900 rounded-xl font-medium transition-colors">
                    <i data-lucide="file-text" class="w-5 h-5"></i>
                    Nilai
                </a>
                <a href="#" class="flex items-center gap-3 px-4 py-3 text-gray-600 hover:bg-gray-50 hover:text-gray-900 rounded-xl font-medium transition-colors">
                    <i data-lucide="settings" class="w-5 h-5"></i>
                    Pengaturan
                </a>
            </nav>

            <div class="p-4 mt-auto border-t border-gray-100">
                <a href="#" class="flex items-center gap-3 px-4 py-3 text-red-600 hover:bg-red-50 rounded-xl font-medium transition-colors">
                    <i data-lucide="log-out" class="w-5 h-5"></i>
                    Keluar
                </a>
            </div>
        </aside>

        <!-- Main Content -->
        <main class="flex-1 min-w-0 bg-gray-50">
            <!-- Mobile Header -->
            <div class="md:hidden bg-white p-4 flex items-center justify-between shadow-sm sticky top-0 z-20">
                <div class="flex items-center gap-2">
                    <div class="w-8 h-8 bg-gradient-to-br from-orange-500 to-red-600 rounded-lg flex items-center justify-center text-white font-bold text-lg">
                        SU
                    </div>
                    <span class="font-bold text-gray-900">SekolahUnggul</span>
                </div>
                <button class="text-gray-600">
                    <i data-lucide="menu" class="w-6 h-6"></i>
                </button>
            </div>

            <!-- Header -->
            <header class="bg-white border-b border-gray-200 sticky top-0 z-20 hidden md:flex items-center justify-between px-8 py-4">
                <div class="flex items-center gap-4 w-96">
                    <div class="relative w-full">
                        <i data-lucide="search" class="w-4 h-4 absolute left-3 top-1/2 -translate-y-1/2 text-gray-400"></i>
                        <input type="text" placeholder="Cari siswa, kelas, atau dokumen..." class="w-full pl-10 pr-4 py-2 bg-gray-50 border-none rounded-xl text-sm focus:ring-2 focus:ring-orange-500/20 focus:bg-white transition-all">
                    </div>
                </div>
                <div class="flex items-center gap-6">
                    <button class="relative text-gray-500 hover:text-gray-700 transition-colors">
                        <i data-lucide="bell" class="w-5 h-5"></i>
                        <span class="absolute top-0 right-0 w-2 h-2 bg-red-500 rounded-full border-2 border-white"></span>
                    </button>
                    <div class="flex items-center gap-3 pl-6 border-l border-gray-200">
                        <div class="text-right hidden lg:block">
                            <p class="text-sm font-semibold text-gray-900">Admin Utama</p>
                            <p class="text-xs text-gray-500">Administrator</p>
                        </div>
                        <img src="https://ui-avatars.com/api/?name=Admin+Utama&background=orange&color=fff" alt="Profile" class="w-10 h-10 rounded-full border-2 border-orange-100 shadow-sm">
                    </div>
                </div>
            </header>

            <div class="p-4 md:p-8 space-y-8">
                <!-- Welcome Banner -->
                <div class="bg-gradient-to-r from-gray-900 to-gray-800 rounded-3xl p-8 text-white relative overflow-hidden shadow-xl">
                    <div class="absolute top-0 right-0 w-64 h-64 bg-white/5 rounded-full blur-3xl -translate-y-1/2 translate-x-1/2"></div>
                    <div class="relative z-10">
                        <h2 class="text-3xl font-bold mb-2">Selamat Datang kembali, Admin! 👋</h2>
                        <p class="text-gray-300 max-w-xl">Berikut adalah ringkasan aktivitas sekolah hari ini. Ada 5 siswa baru yang mendaftar minggu ini.</p>
                        <div class="mt-6 flex gap-4">
                            <a href="{{ route('siswa.index') }}" class="px-6 py-2.5 bg-orange-600 hover:bg-orange-700 text-white font-semibold rounded-xl transition-all shadow-lg shadow-orange-500/30 flex items-center gap-2">
                                <i data-lucide="plus" class="w-4 h-4"></i> Tambah Siswa
                            </a>
                            <button class="px-6 py-2.5 bg-white/10 hover:bg-white/20 text-white font-semibold rounded-xl transition-all backdrop-blur-sm">
                                Unduh Laporan
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Stats Grid -->
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                    <!-- Stat 1 -->
                    <div class="bg-white p-6 rounded-2xl border border-gray-100 shadow-sm hover:shadow-md transition-shadow group">
                        <div class="flex justify-between items-start mb-4">
                            <div class="w-12 h-12 bg-blue-50 text-blue-600 rounded-xl flex items-center justify-center group-hover:bg-blue-600 group-hover:text-white transition-colors">
                                <i data-lucide="users" class="w-6 h-6"></i>
                            </div>
                            <span class="text-xs font-semibold text-green-600 bg-green-50 px-2 py-1 rounded-lg flex items-center gap-1">
                                <i data-lucide="trending-up" class="w-3 h-3"></i> +12%
                            </span>
                        </div>
                        <h3 class="text-gray-500 text-sm font-medium mb-1">Total Siswa</h3>
                        <p class="text-3xl font-bold text-gray-900">1,248</p>
                    </div>

                    <!-- Stat 2 -->
                    <div class="bg-white p-6 rounded-2xl border border-gray-100 shadow-sm hover:shadow-md transition-shadow group">
                        <div class="flex justify-between items-start mb-4">
                            <div class="w-12 h-12 bg-purple-50 text-purple-600 rounded-xl flex items-center justify-center group-hover:bg-purple-600 group-hover:text-white transition-colors">
                                <i data-lucide="graduation-cap" class="w-6 h-6"></i>
                            </div>
                            <span class="text-xs font-semibold text-green-600 bg-green-50 px-2 py-1 rounded-lg flex items-center gap-1">
                                <i data-lucide="trending-up" class="w-3 h-3"></i> +5%
                            </span>
                        </div>
                        <h3 class="text-gray-500 text-sm font-medium mb-1">Total Guru</h3>
                        <p class="text-3xl font-bold text-gray-900">84</p>
                    </div>

                    <!-- Stat 3 -->
                    <div class="bg-white p-6 rounded-2xl border border-gray-100 shadow-sm hover:shadow-md transition-shadow group">
                        <div class="flex justify-between items-start mb-4">
                            <div class="w-12 h-12 bg-orange-50 text-orange-600 rounded-xl flex items-center justify-center group-hover:bg-orange-600 group-hover:text-white transition-colors">
                                <i data-lucide="school" class="w-6 h-6"></i>
                            </div>
                            <span class="text-xs font-semibold text-gray-500 bg-gray-50 px-2 py-1 rounded-lg">Tetap</span>
                        </div>
                        <h3 class="text-gray-500 text-sm font-medium mb-1">Kelas Aktif</h3>
                        <p class="text-3xl font-bold text-gray-900">32</p>
                    </div>

                    <!-- Stat 4 -->
                    <div class="bg-white p-6 rounded-2xl border border-gray-100 shadow-sm hover:shadow-md transition-shadow group">
                        <div class="flex justify-between items-start mb-4">
                            <div class="w-12 h-12 bg-green-50 text-green-600 rounded-xl flex items-center justify-center group-hover:bg-green-600 group-hover:text-white transition-colors">
                                <i data-lucide="award" class="w-6 h-6"></i>
                            </div>
                            <span class="text-xs font-semibold text-green-600 bg-green-50 px-2 py-1 rounded-lg flex items-center gap-1">
                                <i data-lucide="trending-up" class="w-3 h-3"></i> +3
                            </span>
                        </div>
                        <h3 class="text-gray-500 text-sm font-medium mb-1">Prestasi Bulan Ini</h3>
                        <p class="text-3xl font-bold text-gray-900">12</p>
                    </div>
                </div>

                <!-- Charts Section -->
                <div class="grid lg:grid-cols-2 gap-8">
                    <!-- Chart 1 -->
                    <div class="bg-white p-6 rounded-2xl border border-gray-100 shadow-sm">
                        <div class="flex justify-between items-center mb-6">
                            <h3 class="font-bold text-lg text-gray-900">Statistik Kehadiran</h3>
                            <select class="text-sm border-gray-200 rounded-lg text-gray-600 focus:ring-orange-500 focus:border-orange-500">
                                <option>Minggu Ini</option>
                                <option>Bulan Ini</option>
                            </select>
                        </div>
                        <div id="attendanceChart"></div>
                    </div>

                    <!-- Chart 2 -->
                    <div class="bg-white p-6 rounded-2xl border border-gray-100 shadow-sm">
                        <div class="flex justify-between items-center mb-6">
                            <h3 class="font-bold text-lg text-gray-900">Komposisi Siswa</h3>
                            <button class="text-gray-400 hover:text-gray-600"><i data-lucide="more-horizontal" class="w-5 h-5"></i></button>
                        </div>
                        <div id="genderChart"></div>
                    </div>
                </div>

                <!-- Recent Activity Table -->
                <div class="bg-white rounded-2xl border border-gray-100 shadow-sm overflow-hidden">
                    <div class="p-6 border-b border-gray-100 flex justify-between items-center">
                        <h3 class="font-bold text-lg text-gray-900">Siswa Terbaru</h3>
                        <a href="{{ route('siswa.index') }}" class="text-sm font-semibold text-orange-600 hover:text-orange-700 flex items-center gap-1">
                            Lihat Semua <i data-lucide="arrow-right" class="w-4 h-4"></i>
                        </a>
                    </div>
                    <div class="overflow-x-auto">
                        <table class="w-full text-left">
                            <thead class="bg-gray-50 border-b border-gray-100">
                                <tr>
                                    <th class="px-6 py-4 text-xs font-semibold text-gray-500 uppercase tracking-wider">Nama Siswa</th>
                                    <th class="px-6 py-4 text-xs font-semibold text-gray-500 uppercase tracking-wider">Kelas</th>
                                    <th class="px-6 py-4 text-xs font-semibold text-gray-500 uppercase tracking-wider">NIS</th>
                                    <th class="px-6 py-4 text-xs font-semibold text-gray-500 uppercase tracking-wider">Tanggal Daftar</th>
                                    <th class="px-6 py-4 text-xs font-semibold text-gray-500 uppercase tracking-wider">Status</th>
                                </tr>
                            </thead>
                            <tbody class="divide-y divide-gray-100">
                                <tr class="hover:bg-gray-50 transition-colors">
                                    <td class="px-6 py-4">
                                        <div class="flex items-center gap-3">
                                            <div class="w-8 h-8 rounded-full bg-orange-100 flex items-center justify-center text-orange-600 font-bold text-xs">AD</div>
                                            <span class="font-medium text-gray-900">Ahmad Dani</span>
                                        </div>
                                    </td>
                                    <td class="px-6 py-4 text-gray-600">XII RPL 1</td>
                                    <td class="px-6 py-4 text-gray-600">2024001</td>
                                    <td class="px-6 py-4 text-gray-600">10 Feb 2024</td>
                                    <td class="px-6 py-4">
                                        <span class="px-2 py-1 text-xs font-semibold text-green-600 bg-green-50 rounded-lg">Aktif</span>
                                    </td>
                                </tr>
                                <tr class="hover:bg-gray-50 transition-colors">
                                    <td class="px-6 py-4">
                                        <div class="flex items-center gap-3">
                                            <div class="w-8 h-8 rounded-full bg-blue-100 flex items-center justify-center text-blue-600 font-bold text-xs">SI</div>
                                            <span class="font-medium text-gray-900">Sarah Indah</span>
                                        </div>
                                    </td>
                                    <td class="px-6 py-4 text-gray-600">XI TKJ 2</td>
                                    <td class="px-6 py-4 text-gray-600">2024002</td>
                                    <td class="px-6 py-4 text-gray-600">09 Feb 2024</td>
                                    <td class="px-6 py-4">
                                        <span class="px-2 py-1 text-xs font-semibold text-green-600 bg-green-50 rounded-lg">Aktif</span>
                                    </td>
                                </tr>
                                <tr class="hover:bg-gray-50 transition-colors">
                                    <td class="px-6 py-4">
                                        <div class="flex items-center gap-3">
                                            <div class="w-8 h-8 rounded-full bg-purple-100 flex items-center justify-center text-purple-600 font-bold text-xs">BP</div>
                                            <span class="font-medium text-gray-900">Budi Pratama</span>
                                        </div>
                                    </td>
                                    <td class="px-6 py-4 text-gray-600">XP DKV 1</td>
                                    <td class="px-6 py-4 text-gray-600">2024003</td>
                                    <td class="px-6 py-4 text-gray-600">08 Feb 2024</td>
                                    <td class="px-6 py-4">
                                        <span class="px-2 py-1 text-xs font-semibold text-yellow-600 bg-yellow-50 rounded-lg">Pending</span>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

            </div>
        </main>
    </div>

    <script>
        lucide.createIcons();

        // Attendance Chart
        var optionsAttendance = {
            series: [{
                name: 'Hadir',
                data: [95, 98, 92, 96, 94, 99, 95]
            }, {
                name: 'Sakit/Izin',
                data: [5, 2, 8, 4, 6, 1, 5]
            }],
            chart: {
                type: 'area',
                height: 300,
                toolbar: {
                    show: false
                },
                fontFamily: 'Plus Jakarta Sans, sans-serif'
            },
            colors: ['#ea580c', '#94a3b8'],
            dataLabels: {
                enabled: false
            },
            stroke: {
                curve: 'smooth',
                width: 2
            },
            xaxis: {
                categories: ['Sen', 'Sel', 'Rab', 'Kam', 'Jum', 'Sab', 'Min'],
                axisBorder: {
                    show: false
                },
                axisTicks: {
                    show: false
                }
            },
            grid: {
                borderColor: '#f1f5f9',
                strokeDashArray: 4,
            },
            fill: {
                type: 'gradient',
                gradient: {
                    shadeIntensity: 1,
                    opacityFrom: 0.4,
                    opacityTo: 0.05,
                    stops: [0, 90, 100]
                }
            }
        };

        var chartAttendance = new ApexCharts(document.querySelector("#attendanceChart"), optionsAttendance);
        chartAttendance.render();

        // Gender Chart
        var optionsGender = {
            series: [650, 598],
            labels: ['Laki-laki', 'Perempuan'],
            chart: {
                type: 'donut',
                height: 300,
                fontFamily: 'Plus Jakarta Sans, sans-serif'
            },
            colors: ['#2563eb', '#db2777'],
            plotOptions: {
                pie: {
                    donut: {
                        size: '70%',
                        labels: {
                            show: true,
                            total: {
                                show: true,
                                label: 'Total',
                                formatter: function(w) {
                                    return w.globals.seriesTotals.reduce((a, b) => {
                                        return a + b
                                    }, 0)
                                }
                            }
                        }
                    }
                }
            },
            legend: {
                position: 'bottom'
            }
        };

        var chartGender = new ApexCharts(document.querySelector("#genderChart"), optionsGender);
        chartGender.render();
    </script>
</body>

</html>