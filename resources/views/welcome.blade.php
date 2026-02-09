<!DOCTYPE html>
<html lang="id" class="scroll-smooth">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sekolah Unggul - Membangun Generasi Emas</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <script src="https://unpkg.com/lucide@latest"></script>
    <style>
        body {
            font-family: 'Plus Jakarta Sans', sans-serif;
        }
    </style>
</head>

<body class="bg-gray-50 text-gray-800 antialiased selection:bg-orange-500 selection:text-white">

    <!-- Navbar -->
    <nav class="fixed w-full z-50 transition-all duration-300 bg-white/80 backdrop-blur-md border-b border-gray-100" id="navbar">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center h-20">
                <!-- Logo -->
                <div class="flex-shrink-0 flex items-center gap-2">
                    <div class="w-10 h-10 bg-gradient-to-br from-orange-500 to-red-600 rounded-xl flex items-center justify-center text-white font-bold text-xl shadow-lg shadow-orange-500/30">
                        SU
                    </div>
                    <div>
                        <h1 class="font-bold text-xl leading-none text-gray-900">SMKN<span class="text-orange-600">1 KAWALI</span></h1>
                        <p class="text-xs text-gray-500 font-medium tracking-wide"></p>
                    </div>
                </div>

                <!-- Desktop Menu -->
                <div class="hidden md:flex items-center gap-8">
                    <a href="#beranda" class="text-sm font-semibold text-orange-600 hover:text-orange-700 transition-colors">Beranda</a>
                    <a href="#tentang" class="text-sm font-medium text-gray-600 hover:text-orange-600 transition-colors">Tentang</a>
                    <a href="#jurusan" class="text-sm font-medium text-gray-600 hover:text-orange-600 transition-colors">Jurusan</a>
                    <a href="#fasilitas" class="text-sm font-medium text-gray-600 hover:text-orange-600 transition-colors">Fasilitas</a>
                    <a href="#berita" class="text-sm font-medium text-gray-600 hover:text-orange-600 transition-colors">Berita</a>
                </div>

                <!-- CTA Button -->
                <div class="hidden md:flex">
                    <a href="{{ route('siswa.index') }}" class="px-6 py-2.5 bg-orange-600 hover:bg-orange-700 text-white text-sm font-semibold rounded-full transition-all duration-300 shadow-lg shadow-orange-500/30 hover:shadow-orange-500/50 transform hover:-translate-y-0.5">
                        Daftar Sekarang
                    </a>
                </div>

                <!-- Mobile Menu Button -->
                <div class="md:hidden flex items-center">
                    <button id="mobile-menu-btn" class="text-gray-600 hover:text-orange-600 focus:outline-none">
                        <i data-lucide="menu" class="w-6 h-6"></i>
                    </button>
                </div>
            </div>
        </div>

        <!-- Mobile Menu -->
        <div id="mobile-menu" class="hidden md:hidden bg-white border-t border-gray-100 absolute w-full left-0 top-20 shadow-lg">
            <div class="px-4 pt-4 pb-6 space-y-2">
                <a href="#beranda" class="block px-3 py-2 rounded-lg text-base font-medium text-orange-600 bg-orange-50">Beranda</a>
                <a href="#tentang" class="block px-3 py-2 rounded-lg text-base font-medium text-gray-600 hover:text-orange-600 hover:bg-orange-50 transition-colors">Tentang</a>
                <a href="#jurusan" class="block px-3 py-2 rounded-lg text-base font-medium text-gray-600 hover:text-orange-600 hover:bg-orange-50 transition-colors">Jurusan</a>
                <a href="#fasilitas" class="block px-3 py-2 rounded-lg text-base font-medium text-gray-600 hover:text-orange-600 hover:bg-orange-50 transition-colors">Fasilitas</a>
                <a href="#berita" class="block px-3 py-2 rounded-lg text-base font-medium text-gray-600 hover:text-orange-600 hover:bg-orange-50 transition-colors">Berita</a>
                <div class="pt-4 mt-4 border-t border-gray-100">
                    <a href="{{ route('siswa.index') }}" class="block w-full text-center px-6 py-3 bg-orange-600 text-white font-semibold rounded-xl shadow-lg shadow-orange-500/30 hover:bg-orange-700 transition-colors">
                        Daftar Sekarang
                    </a>
                </div>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section id="beranda" class="relative pt-32 pb-20 lg:pt-48 lg:pb-32 overflow-hidden">
        <div class="absolute inset-0 z-0">
            <div class="absolute top-0 right-0 w-1/2 h-full bg-orange-50/50 rounded-l-[100px] transform translate-x-20"></div>
            <div class="absolute bottom-0 left-0 w-64 h-64 bg-yellow-100 rounded-full blur-3xl opacity-50"></div>
        </div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="grid lg:grid-cols-2 gap-12 items-center">
                <!-- Text Content -->
                <div class="space-y-8">
                    <div class="inline-flex items-center gap-2 px-4 py-2 bg-orange-100 text-orange-700 rounded-full text-sm font-semibold">
                        <span class="w-2 h-2 rounded-full bg-orange-600 animate-pulse"></span>
                        Penerimaan Siswa Baru 2024 Dibuka!
                    </div>
                    <h1 class="text-5xl lg:text-7xl font-extrabold text-gray-900 leading-[1.1]">
                        Wujudkan <span class="text-transparent bg-clip-text bg-gradient-to-r from-orange-600 to-red-600">Impian</span> <br>
                        Masa Depanmu
                    </h1>
                    <p class="text-lg text-gray-600 leading-relaxed max-w-lg">
                        Bergabunglah dengan Sekolah Unggul untuk mendapatkan pendidikan berstandar internasional dengan fasilitas modern dan metode pembelajaran interaktif.
                    </p>
                    <div class="flex flex-wrap gap-4">
                        <a href="#" class="px-8 py-4 bg-orange-600 hover:bg-orange-700 text-white font-semibold rounded-xl shadow-xl shadow-orange-500/20 transition-all hover:-translate-y-1 flex items-center gap-2">
                            Mulai Pendaftaran
                            <i data-lucide="arrow-right" class="w-5 h-5"></i>
                        </a>
                        <a href="#" class="px-8 py-4 bg-white hover:bg-gray-50 text-gray-700 border border-gray-200 font-semibold rounded-xl transition-all hover:border-orange-200 flex items-center gap-2">
                            <i data-lucide="play-circle" class="w-5 h-5 text-orange-600"></i>
                            Tonton Profil
                        </a>
                    </div>

                    <!-- Stats Preview -->
                    <div class="pt-8 border-t border-gray-200 flex gap-8">
                        <div>
                            <p class="text-3xl font-bold text-gray-900">1.2k+</p>
                            <p class="text-sm text-gray-500 mt-1">Siswa Aktif</p>
                        </div>
                        <div>
                            <p class="text-3xl font-bold text-gray-900">50+</p>
                            <p class="text-sm text-gray-500 mt-1">Penghargaan</p>
                        </div>
                        <div>
                            <p class="text-3xl font-bold text-gray-900">100%</p>
                            <p class="text-sm text-gray-500 mt-1">Kelulusan</p>
                        </div>
                    </div>
                </div>

                <!-- Hero Image -->
                <div class="relative">
                    <div class="absolute inset-0 bg-gradient-to-br from-orange-600 to-red-600 rounded-[2.5rem] rotate-3 opacity-20 transform translate-x-4 translate-y-4"></div>
                    <div class="relative rounded-[2.5rem] overflow-hidden shadow-2xl border-4 border-white">
                        <img src="img/kone.png" alt="Students learning" class="w-full h-[600px] object-cover hover:scale-105 transition-transform duration-700">
                        <div class="absolute bottom-0 left-0 right-0 p-8 bg-gradient-to-t from-black/80 to-transparent">
                            <div class="text-white">

                                <p class="font-bold text-lg">Lingkungan Belajar Kondusif</p>
                                <p class="text-sm opacity-80">Fasilitas lengkap untuk menunjang prestasi.</p>
                            </div>
                        </div>
                    </div>

                    <!-- Floating Card -->
                    <div class="absolute -bottom-6 -left-6 bg-white p-4 rounded-2xl shadow-xl border border-gray-100 max-w-xs animate-bounce" style="animation-duration: 3s;">
                        <div class="flex items-center gap-3">
                            <div class="w-12 h-12 bg-green-100 rounded-full flex items-center justify-center text-green-600">
                                <i data-lucide="award" class="w-6 h-6"></i>
                            </div>
                            <div>
                                <p class="font-bold text-gray-900">Sekolah Adiwiyata</p>
                                <p class="text-xs text-gray-500">Nasional 2023</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Why Choose Us -->
    <section id="tentang" class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center max-w-3xl mx-auto mb-16">
                <span class="text-orange-600 font-semibold tracking-wider uppercase text-sm">Keunggulan Kami</span>
                <h2 class="mt-3 text-4xl font-bold text-gray-900">Mencetak Pemimpin Masa Depan</h2>
                <p class="mt-4 text-gray-600">Kami tidak hanya fokus pada akademik, tetapi juga pembangunan karakter dan keterampilan abad 21.</p>
            </div>

            <div class="grid md:grid-cols-3 gap-8">
                <!-- Feature 1 -->
                <div class="group p-8 rounded-2xl border border-gray-100 bg-white hover:border-orange-100 hover:bg-orange-50/50 transition-all duration-300 hover:-translate-y-1">
                    <div class="w-14 h-14 bg-orange-100 text-orange-600 rounded-xl flex items-center justify-center mb-6 group-hover:bg-orange-600 group-hover:text-white transition-colors">
                        <i data-lucide="book-open" class="w-7 h-7"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3">Kurikulum Terintegrasi</h3>
                    <p class="text-gray-600 leading-relaxed">Menggabungkan kurikulum nasional dengan standar internasional untuk mempersiapkan siswa di kancah global.</p>
                </div>

                <!-- Feature 2 -->
                <div class="group p-8 rounded-2xl border border-gray-100 bg-white hover:border-orange-100 hover:bg-orange-50/50 transition-all duration-300 hover:-translate-y-1">
                    <div class="w-14 h-14 bg-blue-100 text-blue-600 rounded-xl flex items-center justify-center mb-6 group-hover:bg-blue-600 group-hover:text-white transition-colors">
                        <i data-lucide="users" class="w-7 h-7"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3">Pengajar Profesional</h3>
                    <p class="text-gray-600 leading-relaxed">Didukung oleh tim pengajar bersertifikasi dan berpengalaman yang berdedikasi tinggi dalam mendidik.</p>
                </div>

                <!-- Feature 3 -->
                <div class="group p-8 rounded-2xl border border-gray-100 bg-white hover:border-orange-100 hover:bg-orange-50/50 transition-all duration-300 hover:-translate-y-1">
                    <div class="w-14 h-14 bg-green-100 text-green-600 rounded-xl flex items-center justify-center mb-6 group-hover:bg-green-600 group-hover:text-white transition-colors">
                        <i data-lucide="monitor" class="w-7 h-7"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3">Fasilitas Modern</h3>
                    <p class="text-gray-600 leading-relaxed">Laboratorium lengkap, perpustakaan digital, dan ruang kelas berbasis teknologi multimedia.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Academic Programs -->
    <section id="jurusan" class="py-20 bg-gray-50 relative">
        <div class="absolute inset-0 bg-grid-slate-200/50 [mask-image:linear-gradient(0deg,white,rgba(255,255,255,0.6))] bg-[length:20px_20px]"></div>
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="flex flex-col md:flex-row justify-between items-end mb-12 gap-6">
                <div class="max-w-2xl">
                    <span class="text-orange-600 font-semibold tracking-wider uppercase text-sm">Program Studi</span>
                    <h2 class="mt-3 text-4xl font-bold text-gray-900">Pilihan Jurusan Favorit</h2>
                    <p class="mt-4 text-gray-600">Temukan minat dan bakatmu melalui berbagai program studi unggulan yang kami tawarkan.</p>
                </div>
                <a href="#" class="inline-flex items-center gap-2 text-orange-600 font-semibold hover:text-orange-700 transition-colors">
                    Lihat Semua Jurusan <i data-lucide="arrow-right" class="w-4 h-4"></i>
                </a>
            </div>

            <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-6">
                <!-- Card 1 -->
                <div class="bg-white rounded-2xl overflow-hidden shadow-lg hover:shadow-xl transition-all duration-300 group">
                    <div class="h-48 overflow-hidden relative">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent z-10"></div>
                        <img src="https://images.unsplash.com/photo-1532094349884-543bc11b234d?ixlib=rb-4.0.3&auto=format&fit=crop&w=500&q=60" alt="IPA" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                        <div class="absolute bottom-4 left-4 z-20">
                            <span class="px-2 py-1 bg-blue-600 text-white text-xs font-bold rounded">SAINTEK</span>
                        </div>
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-bold text-gray-900 mb-2 group-hover:text-orange-600 transition-colors">Ilmu Pengetahuan Alam</h3>
                        <p class="text-gray-600 text-sm mb-4">Fokus pada biologi, fisika, kimia, dan matematika untuk calon ilmuwan.</p>
                        <a href="#" class="inline-block text-sm font-semibold text-gray-900 hover:text-orange-600 transition-colors">Selengkapnya &rarr;</a>
                    </div>
                </div>

                <!-- Card 2 -->
                <div class="bg-white rounded-2xl overflow-hidden shadow-lg hover:shadow-xl transition-all duration-300 group">
                    <div class="h-48 overflow-hidden relative">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent z-10"></div>
                        <img src="https://images.unsplash.com/photo-1554415707-6e8cfc93fe23?ixlib=rb-4.0.3&auto=format&fit=crop&w=500&q=60" alt="IPS" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                        <div class="absolute bottom-4 left-4 z-20">
                            <span class="px-2 py-1 bg-yellow-500 text-white text-xs font-bold rounded">SOSHUM</span>
                        </div>
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-bold text-gray-900 mb-2 group-hover:text-orange-600 transition-colors">Ilmu Pengetahuan Sosial</h3>
                        <p class="text-gray-600 text-sm mb-4">Mempelajari sosiologi, ekonomi, geografi, dan sejarah peradaban.</p>
                        <a href="#" class="inline-block text-sm font-semibold text-gray-900 hover:text-orange-600 transition-colors">Selengkapnya &rarr;</a>
                    </div>
                </div>

                <!-- Card 3 -->
                <div class="bg-white rounded-2xl overflow-hidden shadow-lg hover:shadow-xl transition-all duration-300 group">
                    <div class="h-48 overflow-hidden relative">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent z-10"></div>
                        <img src="https://images.unsplash.com/photo-1516321318423-f06f85e504b3?ixlib=rb-4.0.3&auto=format&fit=crop&w=500&q=60" alt="TIK" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                        <div class="absolute bottom-4 left-4 z-20">
                            <span class="px-2 py-1 bg-purple-600 text-white text-xs font-bold rounded">TEKNOLOGI</span>
                        </div>
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-bold text-gray-900 mb-2 group-hover:text-orange-600 transition-colors">Teknik Komputer</h3>
                        <p class="text-gray-600 text-sm mb-4">Pengembangan software, jaringan, dan sistem keamanan siber.</p>
                        <a href="#" class="inline-block text-sm font-semibold text-gray-900 hover:text-orange-600 transition-colors">Selengkapnya &rarr;</a>
                    </div>
                </div>

                <!-- Card 4 -->
                <div class="bg-white rounded-2xl overflow-hidden shadow-lg hover:shadow-xl transition-all duration-300 group">
                    <div class="h-48 overflow-hidden relative">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent z-10"></div>
                        <img src="https://images.unsplash.com/photo-1513364776144-60967b0f800f?ixlib=rb-4.0.3&auto=format&fit=crop&w=500&q=60" alt="Seni" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                        <div class="absolute bottom-4 left-4 z-20">
                            <span class="px-2 py-1 bg-pink-500 text-white text-xs font-bold rounded">SENI & KREATIF</span>
                        </div>
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-bold text-gray-900 mb-2 group-hover:text-orange-600 transition-colors">Desain & Seni</h3>
                        <p class="text-gray-600 text-sm mb-4">Mengasah kreativitas dalam seni rupa, desain grafis, dan multimedia.</p>
                        <a href="#" class="inline-block text-sm font-semibold text-gray-900 hover:text-orange-600 transition-colors">Selengkapnya &rarr;</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Gallery / Facilities Section -->
    <section id="fasilitas" class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <span class="text-orange-600 font-semibold tracking-wider uppercase text-sm">Fasilitas Sekolah</span>
                <h2 class="mt-3 text-4xl font-bold text-gray-900">Sarana Penunjang Terbaik</h2>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-4 grid-rows-2 gap-4 h-[600px]">
                <div class="md:col-span-2 md:row-span-2 relative rounded-2xl overflow-hidden group">
                    <img src="https://images.unsplash.com/photo-1562774053-701939374585?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" alt="Main Building" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110">
                    <div class="absolute inset-0 bg-black/30 group-hover:bg-black/40 transition-colors"></div>
                    <div class="absolute bottom-6 left-6 text-white translate-y-4 opacity-0 group-hover:translate-y-0 group-hover:opacity-100 transition-all duration-300">
                        <h4 class="text-2xl font-bold">Gedung Utama</h4>
                        <p>Pusat administrasi dan rektorat</p>
                    </div>
                </div>
                <div class="relative rounded-2xl overflow-hidden group">
                    <img src="https://images.unsplash.com/photo-1598133894008-61f7fdb8cc3a?ixlib=rb-4.0.3&auto=format&fit=crop&w=500&q=60" alt="Lab" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110">
                    <div class="absolute inset-0 bg-black/30 group-hover:bg-black/40 transition-colors"></div>
                    <div class="absolute bottom-4 left-4 text-white translate-y-4 opacity-0 group-hover:translate-y-0 group-hover:opacity-100 transition-all duration-300">
                        <h4 class="text-lg font-bold">Lab Komputer</h4>
                    </div>
                </div>
                <div class="relative rounded-2xl overflow-hidden group">
                    <img src="https://images.unsplash.com/photo-1509062522246-3755977927d7?ixlib=rb-4.0.3&auto=format&fit=crop&w=500&q=60" alt="Library" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110">
                    <div class="absolute inset-0 bg-black/30 group-hover:bg-black/40 transition-colors"></div>
                    <div class="absolute bottom-4 left-4 text-white translate-y-4 opacity-0 group-hover:translate-y-0 group-hover:opacity-100 transition-all duration-300">
                        <h4 class="text-lg font-bold">Perpustakaan</h4>
                    </div>
                </div>
                <div class="md:col-span-2 relative rounded-2xl overflow-hidden group">
                    <img src="https://images.unsplash.com/photo-1461896836934-ffe607ba8211?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" alt="Sports Field" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110">
                    <div class="absolute inset-0 bg-black/30 group-hover:bg-black/40 transition-colors"></div>
                    <div class="absolute bottom-6 left-6 text-white translate-y-4 opacity-0 group-hover:translate-y-0 group-hover:opacity-100 transition-all duration-300">
                        <h4 class="text-2xl font-bold">Lapangan Olahraga</h4>
                        <p>Standar nasional untuk basket dan futsal</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- News / Events -->
    <section id="berita" class="py-20 bg-orange-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center mb-12">
                <div>
                    <span class="text-orange-600 font-semibold tracking-wider uppercase text-sm">Berita Terkini</span>
                    <h2 class="mt-3 text-3xl font-bold text-gray-900">Kabar Sekolah</h2>
                </div>
                <a href="#" class="hidden md:flex items-center gap-2 text-orange-600 font-semibold hover:text-orange-700">Lihat Semua <i data-lucide="arrow-right" class="w-4 h-4"></i></a>
            </div>

            <div class="grid md:grid-cols-3 gap-8">
                <!-- News Item 1 -->
                <article class="bg-white rounded-2xl p-4 shadow-sm hover:shadow-md transition-shadow">
                    <div class="rounded-xl overflow-hidden h-48 mb-4">
                        <img src="https://images.unsplash.com/photo-1544531835-3a9b085534ac?ixlib=rb-4.0.3&auto=format&fit=crop&w=400&q=60" alt="News" class="w-full h-full object-cover hover:scale-105 transition-transform duration-500">
                    </div>
                    <div class="flex items-center gap-4 text-xs text-gray-500 mb-3">
                        <span class="flex items-center gap-1"><i data-lucide="calendar" class="w-3 h-3"></i> 12 Okt 2024</span>
                        <span class="flex items-center gap-1"><i data-lucide="tag" class="w-3 h-3"></i> Prestasi</span>
                    </div>
                    <h3 class="text-lg font-bold text-gray-900 mb-2 leading-tight hover:text-orange-600 cursor-pointer">Tim Robotik Raih Emas di Kompetisi Nasional</h3>
                    <p class="text-gray-600 text-sm line-clamp-2">Siswa-siswi kebanggaan sekolah kembali menorehkan prestasi gemilang di ajang robotik tingkat nasional.</p>
                </article>

                <!-- News Item 2 -->
                <article class="bg-white rounded-2xl p-4 shadow-sm hover:shadow-md transition-shadow">
                    <div class="rounded-xl overflow-hidden h-48 mb-4">
                        <img src="https://images.unsplash.com/photo-1524178232363-1fb2b075b655?ixlib=rb-4.0.3&auto=format&fit=crop&w=400&q=60" alt="News" class="w-full h-full object-cover hover:scale-105 transition-transform duration-500">
                    </div>
                    <div class="flex items-center gap-4 text-xs text-gray-500 mb-3">
                        <span class="flex items-center gap-1"><i data-lucide="calendar" class="w-3 h-3"></i> 10 Okt 2024</span>
                        <span class="flex items-center gap-1"><i data-lucide="tag" class="w-3 h-3"></i> Kegiatan</span>
                    </div>
                    <h3 class="text-lg font-bold text-gray-900 mb-2 leading-tight hover:text-orange-600 cursor-pointer">Workshop Digital Marketing untuk Siswa</h3>
                    <p class="text-gray-600 text-sm line-clamp-2">Membekali siswa dengan kemampuan digital marketing sejak dini bersama praktisi ahli.</p>
                </article>

                <!-- News Item 3 -->
                <article class="bg-white rounded-2xl p-4 shadow-sm hover:shadow-md transition-shadow">
                    <div class="rounded-xl overflow-hidden h-48 mb-4">
                        <img src="https://images.unsplash.com/photo-1544717305-2782549b5136?ixlib=rb-4.0.3&auto=format&fit=crop&w=400&q=60" alt="News" class="w-full h-full object-cover hover:scale-105 transition-transform duration-500">
                    </div>
                    <div class="flex items-center gap-4 text-xs text-gray-500 mb-3">
                        <span class="flex items-center gap-1"><i data-lucide="calendar" class="w-3 h-3"></i> 08 Okt 2024</span>
                        <span class="flex items-center gap-1"><i data-lucide="tag" class="w-3 h-3"></i> Akademik</span>
                    </div>
                    <h3 class="text-lg font-bold text-gray-900 mb-2 leading-tight hover:text-orange-600 cursor-pointer">Penerimaan Raport Tengah Semester Ganjil</h3>
                    <p class="text-gray-600 text-sm line-clamp-2">Jadwal pembagian hasil belajar siswa semester ganjil tahun ajaran 2024/2025.</p>
                </article>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-gray-900 text-white pt-20 pb-10">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-12 mb-16">
                <!-- Brand -->
                <div class="space-y-6">
                    <div class="flex items-center gap-2">
                        <div class="w-10 h-10 bg-gradient-to-br from-orange-500 to-red-600 rounded-xl flex items-center justify-center text-white font-bold text-xl">
                            SU
                        </div>
                        <h2 class="font-bold text-2xl">Sekolah<span class="text-orange-500">Unggul</span></h2>
                    </div>
                    <p class="text-gray-400 leading-relaxed text-sm">
                        Membangun karakter dan kecerdasan bangsa melalui pendidikan berkualitas tinggi dan inovatif.
                    </p>
                    <div class="flex gap-4">
                        <a href="#" class="w-10 h-10 rounded-full bg-gray-800 flex items-center justify-center hover:bg-orange-600 transition-colors"><i data-lucide="facebook" class="w-5 h-5"></i></a>
                        <a href="#" class="w-10 h-10 rounded-full bg-gray-800 flex items-center justify-center hover:bg-orange-600 transition-colors"><i data-lucide="instagram" class="w-5 h-5"></i></a>
                        <a href="#" class="w-10 h-10 rounded-full bg-gray-800 flex items-center justify-center hover:bg-orange-600 transition-colors"><i data-lucide="twitter" class="w-5 h-5"></i></a>
                        <a href="#" class="w-10 h-10 rounded-full bg-gray-800 flex items-center justify-center hover:bg-orange-600 transition-colors"><i data-lucide="youtube" class="w-5 h-5"></i></a>
                    </div>
                </div>

                <!-- Quick Links -->
                <div>
                    <h3 class="font-bold text-lg mb-6">Tautan Cepat</h3>
                    <ul class="space-y-4 text-gray-400 text-sm">
                        <li><a href="#" class="hover:text-orange-500 transition-colors">Tentang Kami</a></li>
                        <li><a href="#" class="hover:text-orange-500 transition-colors">Program Studi</a></li>
                        <li><a href="#" class="hover:text-orange-500 transition-colors">Tenaga Pengajar</a></li>
                        <li><a href="#" class="hover:text-orange-500 transition-colors">Berita & Artikel</a></li>
                        <li><a href="#" class="hover:text-orange-500 transition-colors">Karir</a></li>
                    </ul>
                </div>

                <!-- Contact -->
                <div>
                    <h3 class="font-bold text-lg mb-6">Hubungi Kami</h3>
                    <ul class="space-y-4 text-gray-400 text-sm">
                        <li class="flex items-start gap-3">
                            <i data-lucide="map-pin" class="w-5 h-5 text-orange-500 mt-0.5"></i>
                            <span>Jl. Pendidikan No. 123,<br>Jakarta Selatan, Indonesia</span>
                        </li>
                        <li class="flex items-center gap-3">
                            <i data-lucide="phone" class="w-5 h-5 text-orange-500"></i>
                            <span>(021) 1234-5678</span>
                        </li>
                        <li class="flex items-center gap-3">
                            <i data-lucide="mail" class="w-5 h-5 text-orange-500"></i>
                            <span>info@sekolahunggul.sch.id</span>
                        </li>
                    </ul>
                </div>

                <!-- Newsletter -->
                <div>
                    <h3 class="font-bold text-lg mb-6">Buletin Sekolah</h3>
                    <p class="text-gray-400 text-sm mb-4">Dapatkan informasi terbaru seputar kegiatan sekolah.</p>
                    <form class="space-y-3">
                        <input type="email" placeholder="Alamat Email" class="w-full px-4 py-3 bg-gray-800 border border-gray-700 rounded-xl text-white focus:outline-none focus:border-orange-500 focus:ring-1 focus:ring-orange-500 text-sm">
                        <button class="w-full px-4 py-3 bg-orange-600 hover:bg-orange-700 text-white font-bold rounded-xl transition-colors text-sm">Berlangganan</button>
                    </form>
                </div>
            </div>

            <div class="border-t border-gray-800 pt-8 flex flex-col md:flex-row justify-between items-center gap-4">
                <p class="text-gray-500 text-sm">© 2024 Sekolah Unggul. All rights reserved.</p>
                <div class="flex gap-6 text-sm text-gray-500">
                    <a href="#" class="hover:text-white transition-colors">Privacy Policy</a>
                    <a href="#" class="hover:text-white transition-colors">Terms of Service</a>
                </div>
            </div>
        </div>
    </footer>

    <script>
        lucide.createIcons();

        // Navbar Scroll Effect
        const navbar = document.getElementById('navbar');
        const mobileMenuBtn = document.getElementById('mobile-menu-btn');
        const mobileMenu = document.getElementById('mobile-menu');

        window.addEventListener('scroll', () => {
            if (window.scrollY > 20) {
                navbar.classList.add('shadow-md', 'bg-white/95');
                navbar.classList.remove('bg-white/80');
            } else {
                navbar.classList.remove('shadow-md', 'bg-white/95');
                navbar.classList.add('bg-white/80');
            }
        });

        if (mobileMenuBtn) {
            mobileMenuBtn.addEventListener('click', () => {
                mobileMenu.classList.toggle('hidden');
                const isOpen = !mobileMenu.classList.contains('hidden');
                if (isOpen) {
                    navbar.classList.add('bg-white');
                    navbar.classList.remove('backdrop-blur-md', 'bg-white/80');
                } else {
                    if (window.scrollY <= 20) navbar.classList.add('backdrop-blur-md', 'bg-white/80');
                }
            });
        }

        // Smooth Scroll for Anchor Links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function(e) {
                e.preventDefault();
                mobileMenu.classList.add('hidden'); // Close mobile menu on click
                document.querySelector(this.getAttribute('href')).scrollIntoView({
                    behavior: 'smooth'
                });
            });
        });
    </script>
</body>

</html>