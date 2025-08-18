<header id="mainHeader" class="fixed top-0 left-0 w-full z-50 transition-all duration-300 font-light">

    <div class="relative flex h-[39px] items-center justify-end bg-[#243771] px-8 text-white text-sm">
    </div>

    <div class="container mx-auto flex items-center justify-between py-3 px-4">

        <div class="flex items-center space-x-4">
            <img src="{{ asset('images/smk.png') }}" alt="Logo SMK" class="h-12 w-12 object-contain">
            <span id="logoText" class="font-bold text-xl text-white" data-translate-key="school_name">SMK Prestasi
                Prima</span>
        </div>

        <nav class="hidden md:flex items-center space-x-6 text-sm">

            <div class="relative">
                <button data-dropdown-toggle="menu-school_info"
                    class="main-nav-link text-white hover:text-orange-300 transition-colors duration-200 flex items-center">
                    <span data-translate-key="school_info">Informasi Sekolah</span>
                    <svg class="w-4 h-4 ml-1 transition-transform duration-300" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd"
                            d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                            clip-rule="evenodd"></path>
                    </svg>
                </button>
                <div id="menu-school_info"
                    class="absolute top-full left-0 mt-2 w-56 rounded-md shadow-lg bg-white hidden origin-top-left">
                    <div class="py-1">
                        <a href="#about-us" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100"
                            data-translate-key="about">Tentang Kami</a>
                        <a href="#vision-mission" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100"
                            data-translate-key="vision_mission">Visi & Misi</a>
                        <a href="#management" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100"
                            data-translate-key="management">Manajemen</a>
                        <a href="#facilities" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100"
                            data-translate-key="facilities">Fasilitas</a>
                        <a href="#faq" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100"
                            data-translate-key="faq">FAQ</a>
                    </div>
                </div>
            </div>

            <div class="relative">
                <button data-dropdown-toggle="menu-student_life"
                    class="main-nav-link text-white hover:text-orange-300 transition-colors duration-200 flex items-center">
                    <span data-translate-key="student_life">Kehidupan Siswa</span>
                    <svg class="w-4 h-4 ml-1 transition-transform duration-300" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd"
                            d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                            clip-rule="evenodd"></path>
                    </svg>
                </button>
                <div id="menu-student_life"
                    class="absolute top-full left-0 mt-2 w-56 rounded-md shadow-lg bg-white hidden origin-top-left">
                    <div class="py-1">
                        <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100"
                            data-translate-key="schedule">Jadwal</a>
                        <div class="relative group/level2">
                            <a href="#"
                                class="w-full flex justify-between items-center px-4 py-2 text-sm text-gray-700 hover:bg-gray-100"
                                data-translate-key="achievements">
                                Prestasi
                                <svg class="w-4 h-4 transform -rotate-90" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd"
                                        d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                        clip-rule="evenodd"></path>
                                </svg>
                            </a>
                            <div
                                class="absolute top-0 left-full ml-1 w-56 rounded-md shadow-lg bg-white opacity-0 invisible group-hover/level2:opacity-100 group-hover/level2:visible transition-all duration-300">
                                <div class="py-1">
                                    <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100"
                                        data-translate-key="academic">Akademik</a>
                                    <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100"
                                        data-translate-key="non_academic">Non-Akademik</a>
                                </div>
                            </div>
                        </div>
                        <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100"
                            data-translate-key="extracurricular">Ekstrakurikuler</a>
                        <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100"
                            data-translate-key="activities">Kegiatan</a>
                        <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100"
                            data-translate-key="student_services">Layanan Siswa</a>
                    </div>
                </div>
            </div>

            <a href="#" class="main-nav-link text-white hover:text-orange-300 transition-colors duration-200"
                data-translate-key="partners">Mitra</a>

            <div class="relative">
                <button data-dropdown-toggle="menu-admission"
                    class="main-nav-link text-white hover:text-orange-300 transition-colors duration-200 flex items-center">
                    <span data-translate-key="admission">Penerimaan Siswa</span>
                    <svg class="w-4 h-4 ml-1 transition-transform duration-300" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd"
                            d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                            clip-rule="evenodd"></path>
                    </svg>
                </button>
                <div id="menu-admission"
                    class="absolute top-full left-0 mt-2 w-56 rounded-md shadow-lg bg-white hidden origin-top-left">
                    <div class="py-1">
                        <div class="relative group/level2">
                            <a href="#"
                                class="w-full flex justify-between items-center px-4 py-2 text-sm text-gray-700 hover:bg-gray-100"
                                data-translate-key="how_to_register">
                                Daftar Sekarang
                                <svg class="w-4 h-4 transform -rotate-90" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd"
                                        d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                        clip-rule="evenodd"></path>
                                </svg>
                            </a>
                            <div
                                class="absolute top-0 left-full ml-1 w-56 rounded-md shadow-lg bg-white opacity-0 invisible group-hover/level2:opacity-100 group-hover/level2:visible transition-all duration-300">
                                <div class="py-1">
                                    <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100"
                                        data-translate-key="registration_steps">5 Langkah Pendaftaran</a>
                                    <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100"
                                        data-translate-key="after_registration_steps">5 Langkah setelah Penerimaan</a>
                                </div>
                            </div>
                        </div>
                        <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100"
                            data-translate-key="school_fees">Biaya Sekolah</a>
                        <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100"
                            data-translate-key="testimonials">Testimoni</a>
                    </div>
                </div>
            </div>

        </nav>

        <div class="hidden md:flex items-center space-x-4 text-sm">
            <a href="#" class="main-nav-link text-white hover:text-orange-300 font-medium transition-colors"
                data-translate-key="contact_us">Hubungi Kami</a>
            <a href="#"
                class="bg-orange-500 text-white px-5 py-2 rounded-md hover:bg-orange-600 font-medium transition-colors"
                data-translate-key="register_now">Daftar Sekarang</a>
        </div>
    </div>
</header>

<script>
    // --- Skrip untuk ubah header saat scroll ---
    window.addEventListener('scroll', function() {
        const header = document.getElementById('mainHeader');
        const mainNavLinks = document.querySelectorAll('.main-nav-link');
        const logoText = document.getElementById('logoText');

        if (window.scrollY > 50) {
            header.classList.add('bg-white', 'shadow-md');
            logoText.classList.remove('text-white');
            logoText.classList.add('text-gray-900');
            mainNavLinks.forEach(link => {
                link.classList.remove('text-white');
                link.classList.add('text-gray-900');
            });
        } else {
            header.classList.remove('bg-white', 'shadow-md');
            logoText.classList.remove('text-gray-900');
            logoText.classList.add('text-white');
            mainNavLinks.forEach(link => {
                link.classList.remove('text-gray-900');
                link.classList.add('text-white');
            });
        }
    });

    // --- Skrip untuk dropdown berbasis klik ---
    document.addEventListener('DOMContentLoaded', function() {
        const allToggles = document.querySelectorAll('[data-dropdown-toggle]');

        const closeAllDropdowns = (exceptThisToggle = null) => {
            allToggles.forEach(toggle => {
                if (toggle === exceptThisToggle) return;
                const menu = document.getElementById(toggle.dataset.dropdownToggle);
                const arrow = toggle.querySelector('svg.transition-transform');
                if (menu) menu.classList.add('hidden');
                if (arrow) arrow.classList.remove('rotate-180');
            });
        };

        allToggles.forEach(toggle => {
            toggle.addEventListener('click', function(event) {
                event.stopPropagation();
                const menuId = this.dataset.dropdownToggle;
                const menu = document.getElementById(menuId);
                const arrow = this.querySelector('svg.transition-transform');
                const isAlreadyOpen = !menu.classList.contains('hidden');
                closeAllDropdowns(this);
                menu.classList.toggle('hidden');
                if (arrow) {
                    isAlreadyOpen ? arrow.classList.remove('rotate-180') : arrow.classList.add(
                        'rotate-180');
                }
            });
        });

        window.addEventListener('click', () => closeAllDropdowns());
    });

    // --- Skrip untuk terjemahan ---
    // Pastikan Anda menempelkan objek 'translations', 'flagSVGs', dan fungsi 'setLanguage' Anda di sini.
</script>
