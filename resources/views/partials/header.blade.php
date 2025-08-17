<header id="mainHeader" class="fixed top-0 left-0 w-full z-50 bg-transparent transition-all duration-300">
    <div class="container mx-auto px-4 flex items-center justify-between py-3">

        <!-- Logo + Nama Sekolah -->
        <div class="flex items-center space-x-4">
            <img src="{{ asset('images/smk.png') }}" alt="Logo SMK" class="h-12 w-12 object-contain">
            <span id="logoText" class="font-bold text-xl text-white">SMK Prestasi Prima</span>
        </div>

        <!-- Menu Navigasi -->
        <nav class="hidden md:flex items-center space-x-2 text-sm font-medium">
            @foreach ([
        'Informasi Sekolah' => '#',
        'Penerimaan Siswa' => '#',
        // 'Manajemen' => '#',
        'Prestasi' => '#',
        'Mitra' => '#',
        'Hubungi Kami' => '#',
    ] as $label => $url)
                <a href="{{ $url }}"
                    class="nav-link text-white p-5 rounded-2xl hover:text-gray-200 hover:bg-gray-700/50 transition-colors duration-200">
                    {{ $label }}
                </a>
            @endforeach
        </nav>

        <!-- Tombol Pendaftaran -->
        <a href="#"
            class="bg-blue-900 text-white py-4 px-6 rounded-xl hover:bg-blue-800 
                   text-sm font-medium transition-colors duration-200">
            Pendaftaran
        </a>
    </div>
</header>

<!-- Script untuk ubah header saat scroll -->
<script>
    window.addEventListener('scroll', function() {
        const header = document.getElementById('mainHeader');
        const navLinks = document.querySelectorAll('.nav-link');
        const logoText = document.getElementById('logoText');

        if (window.scrollY > window.innerHeight * 0.8) {
            header.classList.remove('bg-transparent');
            header.classList.add('bg-white', 'shadow-md');

            navLinks.forEach(link => {
                link.classList.remove('text-white');
                link.classList.add('text-gray-900');
            });

            logoText.classList.remove('text-white');
            logoText.classList.add('text-gray-900');
        } else {
            header.classList.remove('bg-white', 'shadow-md');
            header.classList.add('bg-transparent');

            navLinks.forEach(link => {
                link.classList.remove('text-gray-900');
                link.classList.add('text-white');
            });

            logoText.classList.remove('text-gray-900');
            logoText.classList.add('text-white');
        }
    });
</script>
