<header id="mainHeader" class="fixed top-0 left-0 w-full z-50 transition-all duration-300 font-light">
    
    <div class="relative flex h-[39px] items-center justify-end bg-[#243771] px-8 text-white text-sm">

        <div class="relative">
            <button data-dropdown-toggle="berita-menu" class="flex items-center hover:text-gray-300">
                <span data-translate-key="news">Berita</span>
                <svg class="ml-2 h-4 w-4 transition-transform duration-200" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" /></svg>
            </button>
            <div id="berita-menu" class="absolute right-0 top-full z-10 mt-2 hidden w-48 origin-top-right rounded-md border border-gray-200 bg-white py-1 text-gray-700 shadow-lg">
                <a href="#" class="block px-4 py-2 hover:bg-gray-100" data-translate-key="latest_articles">Artikel Terbaru</a>
                <a href="#" class="block px-4 py-2 hover:bg-gray-100" data-translate-key="popular_categories">Kategori Populer</a>
                <a href="#" class="block px-4 py-2 hover:bg-gray-100" data-translate-key="opinion">Opini</a>
            </div>
        </div>

        <div class="relative ml-5">
            <button id="lang-selector-btn" data-dropdown-toggle="bahasa-menu" class="flex items-center hover:text-gray-300">
                <svg id="current-flag" class="mr-2 h-[13px] w-[21px]" viewBox="0 0 21 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M0 0H21V6.5H0V0Z" fill="#FF0000" /><path d="M0 6.5H21V13H0V6.5Z" fill="white" />
                </svg>
                <span id="current-lang-text" data-translate-key="current_lang">Bahasa Indonesia</span>
                <svg class="ml-2 h-4 w-4 transition-transform duration-200" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" /></svg>
            </button>
            <div id="bahasa-menu" class="absolute right-0 top-full z-10 mt-2 hidden w-56 origin-top-right rounded-md border border-gray-200 bg-white py-1 text-gray-700 shadow-lg">
                <a href="#" class="lang-switcher flex items-center px-4 py-2 hover:bg-gray-100" data-lang="id">
                    <svg class="mr-2 h-[13px] w-[21px]" viewBox="0 0 21 13"><path d="M0 0H21V6.5H0V0Z" fill="#FF0000"/><path d="M0 6.5H21V13H0V6.5Z" fill="white"/></svg>
                    <span data-translate-key="lang_id">Bahasa Indonesia</span>
                </a>
                <a href="#" class="lang-switcher flex items-center px-4 py-2 hover:bg-gray-100" data-lang="en">
                    <svg class="mr-2 h-[13px] w-[21px]" viewBox="0 0 7410 3900"><path d="M0,0h7410v3900H0" fill="#b31942"/><path d="M0,450H7410m0,600H0m0,600H7410m0,600H0m0,600H7410m0,600H0" stroke="#FFF" stroke-width="300"/><path d="M0,0h2964v2100H0" fill="#0a3161"/><g fill="#FFF"><g id="s18"><g id="s9"><g id="s5"><g id="s4"><path id="s" d="M247,90 317.5,307.1 132.9,172.9H361.1L176.5,307.1z"/><use href="#s" y="420"/><use href="#s" y="840"/><use href="#s" y="1260"/></g><use href="#s" y="1680"/></g><use href="#s4" x="247" y="210"/></g><use href="#s9" x="494"/></g><use href="#s18" x="988"/><use href="#s9" x="1976"/><use href="#s5" x="2470"/></g></svg>
                    <span data-translate-key="lang_en">English</span>
                </a>
            </div>
        </div>
    </div>

    <div class="container mx-auto flex items-center justify-between py-3 px-4">
        <div class="flex items-center space-x-4">
            <img src="{{ asset('images/smk.png') }}" alt="Logo SMK" class="h-12 w-12 object-contain">
            <span id="logoText" class="font-bold text-xl text-white">SMK Prestasi Prima</span>
        </div>

        <nav class="hidden md:flex items-center gap-10 text-sm">
            <div class="relative">
                <button data-dropdown-toggle="menu-school_info" class="main-nav-link text-white hover:text-orange-300 transition-colors duration-200 flex items-center">
                    <span data-translate-key="school_info">Informasi Sekolah</span>
                    <svg class="w-4 h-4 ml-1 transition-transform duration-300" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                </button>
                <div id="menu-school_info" class="absolute top-full left-0 mt-2 w-56 rounded-md shadow-lg bg-white hidden origin-top-left">
                    <div class="py-1">
                        <a href="#about-us" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100" data-translate-key="about">Tentang Kami</a>
                        <a href="#vision-mission" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100" data-translate-key="vision_mission">Visi & Misi</a>
                        <a href="#management" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100" data-translate-key="management">Manajemen</a>
                        <a href="#facilities" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100" data-translate-key="facilities">Fasilitas</a>
                        <a href="#faq" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100" data-translate-key="faq">FAQ</a>
                    </div>
                </div>
            </div>

            <div class="relative">
                <button data-dropdown-toggle="menu-student_life" class="main-nav-link text-white hover:text-orange-300 transition-colors duration-200 flex items-center">
                    <span data-translate-key="student_life">Kehidupan Siswa</span>
                    <svg class="w-4 h-4 ml-1 transition-transform duration-300" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                </button>
                <div id="menu-student_life" class="absolute top-full left-0 mt-2 w-56 rounded-md shadow-lg bg-white hidden origin-top-left">
                    <div class="py-1">
                        <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100" data-translate-key="schedule">Jadwal</a>
                        <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100" data-translate-key="achievements">Prestasi</a>
                        <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100" data-translate-key="extracurricular">Ekstrakurikuler</a>
                        <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100" data-translate-key="activities">Kegiatan</a>
                        <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100" data-translate-key="student_services">Layanan Siswa</a>
                    </div>
                </div>
            </div>
            
            <a href="#" class="main-nav-link text-white hover:text-orange-300 transition-colors duration-200" data-translate-key="partners">Mitra</a>

            <div class="relative">
                <button data-dropdown-toggle="menu-admission" class="main-nav-link text-white hover:text-orange-300 transition-colors duration-200 flex items-center">
                    <span data-translate-key="admission">Penerimaan Siswa</span>
                    <svg class="w-4 h-4 ml-1 transition-transform duration-300" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                </button>
                <div id="menu-admission" class="absolute top-full left-0 mt-2 w-56 rounded-md shadow-lg bg-white hidden origin-top-left">
                     <div class="py-1">
                        <div class="relative group/level2">
                            <a href="#" class="w-full flex justify-between items-center px-4 py-2 text-sm text-gray-700 hover:bg-gray-100" data-translate-key="how_to_register">
                                Daftar Sekarang
                                <svg class="w-4 h-4 transform -rotate-90 transition-transform group-hover/level2:rotate-0" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                            </a>
                            <div class="absolute top-0 left-full ml-1 w-56 rounded-md shadow-lg bg-white opacity-0 invisible group-hover/level2:opacity-100 group-hover/level2:visible transition-all duration-300">
                                <div class="py-1">
                                    <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100" data-translate-key="registration_steps">5 Langkah Pendaftaran</a>
                                    <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100" data-translate-key="after_registration_steps">5 Langkah setelah Penerimaan</a>
                                </div>
                            </div>
                        </div>
                        <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100" data-translate-key="school_fees">Biaya Sekolah</a>
                        <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100" data-translate-key="testimonials">Testimoni</a>
                    </div>
                </div>
            </div>
        </nav>

        <div class="hidden md:flex items-center space-x-4 text-sm">
            <a href="#" class="main-nav-link text-white hover:text-orange-300 font-medium transition-colors" data-translate-key="contact_us">Hubungi Kami</a>
            <a href="#" class="bg-orange-500 text-white px-5 py-2 rounded-md hover:bg-orange-600 font-medium transition-colors" data-translate-key="register_now">Daftar Sekarang</a>
        </div>
    </div>
</header>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        
        // --- Skrip untuk ubah header saat scroll ---
        const header = document.getElementById('mainHeader');
        const mainNavLinks = document.querySelectorAll('.main-nav-link'); 
        const logoText = document.getElementById('logoText');

        window.addEventListener('scroll', function() {
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
            toggle.addEventListener('click', function (event) {
                event.stopPropagation();
                const menuId = this.dataset.dropdownToggle;
                const menu = document.getElementById(menuId);
                const arrow = this.querySelector('svg.transition-transform');
                const isAlreadyOpen = !menu.classList.contains('hidden');
                closeAllDropdowns(this);
                menu.classList.toggle('hidden');
                if (arrow) {
                    isAlreadyOpen ? arrow.classList.remove('rotate-180') : arrow.classList.add('rotate-180');
                }
            });
        });

        window.addEventListener('click', () => closeAllDropdowns());
        
        // --- Skrip untuk terjemahan ---
        const translations = {
            // Top Bar
            news: { id: "Berita", en: "News" },
            latest_articles: { id: "Artikel Terbaru", en: "Latest Articles" },
            popular_categories: { id: "Kategori Populer", en: "Popular Categories" },
            opinion: { id: "Opini", en: "Opinion" },
            current_lang: { id: "Bahasa Indonesia", en: "English" },
            lang_id: { id: "Bahasa Indonesia", en: "Indonesian" },
            lang_en: { id: "English", en: "English" },
            // Main Header
            school_info: { id: "Informasi Sekolah", en: "School Information" },
            about: { id: "Tentang Kami", en: "About Us" },
            vision_mission: { id: "Visi & Misi", en: "Vision & Mission" },
            management: { id: "Manajemen", en: "Management" },
            facilities: { id: "Fasilitas", en: "Facilities" },
            faq: { id: "FAQ", en: "FAQ" },
            student_life: { id: "Kehidupan Siswa", en: "Student Life" },
            schedule: { id: "Jadwal", en: "Schedule" },
            achievements: { id: "Prestasi", en: "Achievements" },
            extracurricular: { id: "Ekstrakurikuler", en: "Extracurricular" },
            activities: { id: "Kegiatan", en: "Activities" },
            student_services: { id: "Layanan Siswa", en: "Student Services" },
            partners: { id: "Mitra", en: "Partners" },
            admission: { id: "Penerimaan Siswa", en: "Admission" },
            how_to_register: { id: "Daftar Sekarang", en: "Register Now" },
            registration_steps: { id: "5 Langkah Pendaftaran", en: "5 Steps for Registration" },
            after_registration_steps: { id: "5 Langkah setelah Penerimaan", en: "5 Steps after Admission" },
            school_fees: { id: "Biaya Sekolah", en: "School Fees" },
            testimonials: { id: "Testimoni", en: "Testimonials" },
            academic: { id: "Akademik", en: "Academic" },
            non_academic: { id: "Non-Akademik", en: "Non-Academic" },
            contact_us: { id: "Hubungi Kami", en: "Contact Us" },
            register_now: { id: "Daftar Sekarang", en: "Register Now" },
        };
        const flagSVGs = {
            id: `<path d="M0 0H21V6.5H0V0Z" fill="#FF0000"/><path d="M0 6.5H21V13H0V6.5Z" fill="white"/>`,
            en: `<path d="M0,0h7410v3900H0" fill="#b31942"/><path d="M0,450H7410m0,600H0m0,600H7410m0,600H0m0,600H7410m0,600H0" stroke="#FFF" stroke-width="300"/><path d="M0,0h2964v2100H0" fill="#0a3161"/><g fill="#FFF"><g id="s18"><g id="s9"><g id="s5"><g id="s4"><path id="s" d="M247,90 317.5,307.1 132.9,172.9H361.1L176.5,307.1z"/><use href="#s" y="420"/><use href="#s" y="840"/><use href="#s" y="1260"/></g><use href="#s" y="1680"/></g><use href="#s4" x="247" y="210"/></g><use href="#s9" x="494"/></g><use href="#s18" x="988"/><use href="#s9" x="1976"/><use href="#s5" x="2470"/></g>`
        };

        function setLanguage(lang) {
            document.querySelectorAll('[data-translate-key]').forEach(el => {
                const key = el.dataset.translateKey;
                if (translations[key] && translations[key][lang]) {
                    el.textContent = translations[key][lang];
                }
            });
            const currentFlag = document.getElementById('current-flag');
            if (currentFlag && flagSVGs[lang]) {
                currentFlag.setAttribute('viewBox', lang === 'en' ? '0 0 7410 3900' : '0 0 21 13');
                currentFlag.innerHTML = flagSVGs[lang];
            }
        }

        document.querySelectorAll('.lang-switcher').forEach(button => {
            button.addEventListener('click', function(e) {
                e.preventDefault();
                const selectedLang = this.dataset.lang;
                setLanguage(selectedLang);
                closeAllDropdowns();
            });
        });

        // Inisialisasi bahasa saat halaman dimuat
        setLanguage('id');
    });
</script>