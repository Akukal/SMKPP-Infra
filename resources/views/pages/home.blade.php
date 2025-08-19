@extends('layouts.app')

@section('content')
    <!-- SOCIAL BAR -->
    <x-social-bar />
    <section class="bg-cover bg-center w-full h-screen relative bg-gray-800 overflow-hidden" id="hero-section">
        <!-- Gradient Overlay -->
        <div
            class="absolute inset-0 bg-gradient-to-r from-gray-800/80 sm:from-gray-800/90 via-gray-800/50 sm:via-gray-800/60 to-transparent z-10 overlay">
        </div>
        <!-- Content -->
        <div class="absolute inset-0 flex items-center px-20 z-20">
            <div class="container mx-auto px-4">
                <div class="max-w-4xl space-y-2 lg:space-y-4" id="hero-content">
                    <p class="text-sm sm:text-2xl xl:text-3xl font-semibold border-l-4 border-orange-400 pl-4 text-gray-200 welcome-text"
                        data-translate-key="hero_welcome">
                        SELAMAT DATANG DI SITUS RESMI</p>
                    <h1 class="text-3xl sm:text-5xl xl:text-6xl font-bold text-orange-400 leading-tight main-title"
                        data-translate-key="school_name">
                        SMK PRESTASI PRIMA
                    </h1>
                    <p class="text-xs sm:text-lg xl:text-xl font-semibold text-gray-300 italic motto"
                        data-translate-key="school_motto">
                        "IF BETTER IS POSSIBLE, GOOD IS NOT ENOUGH"
                    </p>
                    <div class="pt-4 cta-container">
                        <a href="#tentang"
                            class="select-none text-sm sm:text-lg inline-flex items-center gap-2 bg-orange-500 text-white px-5 sm:px-8 py-3 sm:py-4 rounded-full font-semibold hover:bg-orange-600 transition-all duration-300 transform cta-button">
                            <span data-translate-key="hero_cta_button">EXPLORE</span>
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-auto w-4 sm:w-5 arrow-icon" viewBox="0 0 20 20"
                                fill="currentColor">
                                <path fill-rule="evenodd"
                                    d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z"
                                    clip-rule="evenodd" />
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Background Image -->
        <img src="{{ asset('images/sekolah_ls.png') }}"
            class="absolute inset-0 w-full h-full object-cover opacity-75 select-none bg-image" draggable="false"
            alt="SMK Prestasi Prima">
    </section>

    <section class="px-20 w-full h-screen py-20 flex items-center justify-center flex-col" id="about-section">
        <h1 class="mx-auto text-center text-3xl text-blue-900 section-title">
            Sekilas <span class="text-orange-400 font-bold highlight-text">SMK PRESTASI PRIMA</span>
        </h1>

        <div class="flex flex-col md:flex-row mt-8 px-0 md:px-40 space-y-4 md:space-y-0 md:space-x-4 content-container w-full">
            <div class="rounded-xl shadow-xl flex-1 flex items-center text-card">
                <p class="text-blue-900 py-20 px-10 my-auto text-md">
                    Di sekolah Prestasi Prima yang unggul dan terpercaya siswa & siswi disiapkan untuk menjadi tenaga yang
                    terampil dan mandiri. Tidak hanya itu ketakwaan dan kecerdasan pun harus dimiliki, dan percaya diri
                    selalu terjaga dengan berkarakter Pancasila. Jika ada yang lebih baik, baik saja tidak cukup.
                </p>
            </div>

            <div class="flex-1 image-container flex justify-center">
                <img src="{{ asset('images/sekolah_ls.png') }}" class="rounded-xl about-image max-w-full h-auto" draggable="false"
                    alt="SMK Prestasi Prima" />
            </div>
        </div>
    </section>
    <!--END SECTION SEKILAS SMK -->

<!-- SECTION PESAN PIMPINAN -->
<section class="px-4 md:px-20 w-full py-16 flex flex-col items-center bg-white" id="pesan-pimpinan">
  <h2 class="text-3xl font-bold text-orange-600 mb-12 text-center" data-translate-key="leader_message">
    Pesan Pimpinan
  </h2>

  <!-- Baris utama dengan pasangan card rapat -->
  <div class="flex flex-wrap justify-center gap-4 max-w-7xl">

            <!-- Pasangan Card 1 + Card 2 -->
            <div class="flex flex-wrap gap-2">
                <!-- Card 1 - Orange -->
                <div
                    class="card bg-orange-600 w-full sm:w-56 md:w-60 h-60 sm:h-64 md:h-72 rounded-md shadow-md p-4 flex items-center justify-center
                  text-white text-sm sm:text-sm md:text-base leading-snug transform transition duration-300
                  hover:scale-105 hover:-translate-y-3 hover:shadow-2xl hover:shadow-black/60">
                    <div class="flex flex-col items-center text-center">
                        <img src="https://via.placeholder.com/90" alt="Foto Direktur"
                            class="w-16 h-16 sm:w-20 sm:h-20 rounded-full border-2 border-white mb-3">
                        <h3 class="text-sm sm:text-base md:text-lg font-bold" data-translate-key="leader_name_1">
                            Dr. Wannen Pakpahan, M.M
                        </h3>
                        <p class="text-xs sm:text-sm md:text-sm opacity-80 leading-tight"
                            data-translate-key="leader_position_1">
                            Direktur Penjamin Mutu<br>Yayasan Wahana Prestasi Prima
                        </p>
                    </div>
                </div>

                <!-- Card 2 - Blue -->
                <div
                    class="card relative bg-blue-900 w-full sm:w-56 md:w-60 h-60 sm:h-64 md:h-72 rounded-md shadow-md text-white p-6 flex flex-col justify-center
                  transform transition duration-300 hover:scale-105 hover:-translate-y-3 hover:shadow-2xl hover:shadow-black/60">
                    <div
                        class="absolute left-[-12px] top-1/2 -translate-y-1/2
                    w-0 h-0 border-t-[14px] border-b-[14px] border-r-[14px] border-transparent
                    border-r-blue-900 pointer-events-none">
                    </div>
                    <p class="text-center" data-translate-key="leader_card_1">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec odio.
                    </p>
                </div>
            </div>

            <!-- Pasangan Card 3 + Card 4 -->
            <div class="flex flex-wrap gap-2">
                <!-- Card 3 - Orange -->
                <div
                    class="card bg-orange-600 w-full sm:w-56 md:w-60 h-60 sm:h-64 md:h-72 rounded-md shadow-md p-4 flex items-center justify-center
                  text-white text-sm sm:text-sm md:text-base leading-snug transform transition duration-300
                  hover:scale-105 hover:-translate-y-3 hover:shadow-2xl hover:shadow-black/60">
                    <div class="flex flex-col items-center text-center">
                        <img src="https://via.placeholder.com/90" alt="Foto Kepala Sekolah"
                            class="w-16 h-16 sm:w-20 sm:h-20 rounded-full border-2 border-white mb-3">
                        <h3 class="text-sm sm:text-base md:text-lg font-bold" data-translate-key="leader_name_2">
                            Hendry Kurniawan, S.Kom, M.I.Kom
                        </h3>
                        <p class="text-xs sm:text-sm md:text-sm opacity-80 leading-tight"
                            data-translate-key="leader_position_2">
                            Kepala SMK Prestasi Prima
                        </p>
                    </div>
                </div>

                <!-- Card 4 - Blue -->
                <div
                    class="card relative bg-blue-900 w-full sm:w-56 md:w-60 h-60 sm:h-64 md:h-72 rounded-md shadow-md text-white p-6 flex flex-col justify-center
                  transform transition duration-300 hover:scale-105 hover:-translate-y-3 hover:shadow-2xl hover:shadow-black/60">
                    <div
                        class="absolute left-[-12px] top-1/2 -translate-y-1/2
                    w-0 h-0 border-t-[14px] border-b-[14px] border-r-[14px] border-transparent
                    border-r-blue-900 pointer-events-none">
                    </div>
                    <p class="text-center" data-translate-key="leader_card_3">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec odio.
                    </p>
                </div>
            </div>

        </div>
    </section>
    <!-- END SECTION PESAN PIMPINAN -->


    <!-- GSAP CDN -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/ScrollTrigger.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/TextPlugin.min.js"></script>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Register GSAP plugins
            gsap.registerPlugin(ScrollTrigger, TextPlugin);

            // Set initial states
            gsap.set(['.welcome-text', '.main-title', '.motto', '.cta-container'], {
                opacity: 0,
                y: 50
            });

            gsap.set('.bg-image', {
                scale: 1.35,
                opacity: 0
            });

            gsap.set('.overlay', {
                opacity: 0
            });

            // Hero section animations timeline
            const heroTL = gsap.timeline({
                delay: 0.5
            });

            // Background image animation
            heroTL.to('.bg-image', {
                    duration: 2,
                    scale: 1.25,
                    opacity: 0.75,
                    ease: "power2.out"
                })
                .to('.overlay', {
                    duration: 1.5,
                    opacity: 1,
                    ease: "power2.out"
                }, "-=1.5")

                // Text animations with stagger
                .to('.welcome-text', {
                    duration: 1,
                    opacity: 1,
                    y: 0,
                    ease: "back.out(1.7)"
                }, "-=1")
                .to('.main-title', {
                    duration: 1.2,
                    opacity: 1,
                    y: 0,
                    ease: "back.out(1.7)",
                    onComplete: function() {
                        // Add typing effect to main title
                        gsap.to('.main-title', {
                            duration: 0.5,
                            text: "SMK PRESTASI PRIMA",
                            ease: "none"
                        });
                    }
                }, "-=0.7")
                .to('.motto', {
                    duration: 1,
                    opacity: 1,
                    y: 0,
                    ease: "back.out(1.7)"
                }, "-=0.5")
                .to('.cta-container', {
                    duration: 1,
                    opacity: 1,
                    y: 0,
                    ease: "back.out(1.7)"
                }, "-=0.3");

            // CTA button hover animations
            const ctaButton = document.querySelector('.cta-button');
            const arrowIcon = document.querySelector('.arrow-icon');

            ctaButton.addEventListener('mouseenter', function() {
                gsap.to(this, {
                    duration: 0.3,
                    scale: 1.05,
                    boxShadow: "0 10px 25px rgba(0,0,0,0.2)",
                    ease: "power2.out"
                });
                gsap.to(arrowIcon, {
                    duration: 0.3,
                    x: 5,
                    ease: "power2.out"
                });
            });

            ctaButton.addEventListener('mouseleave', function() {
                gsap.to(this, {
                    duration: 0.3,
                    scale: 1,
                    boxShadow: "0 0px 0px rgba(0,0,0,0)",
                    ease: "power2.out"
                });
                gsap.to(arrowIcon, {
                    duration: 0.3,
                    x: 0,
                    ease: "power2.out"
                });
            });

            // About section scroll-triggered animations
            gsap.set(['.section-title', '.text-card', '.about-image'], {
                opacity: 0,
                y: 60
            });

            // Title animation
            gsap.to('.section-title', {
                scrollTrigger: {
                    trigger: '#about-section',
                    start: 'top 70%',
                    toggleActions: 'play none none reverse'
                },
                duration: 1,
                opacity: 1,
                y: 0,
                ease: "back.out(1.7)"
            });

            // Content animation with stagger
            gsap.to(['.text-card', '.about-image'], {
                scrollTrigger: {
                    trigger: '.content-container',
                    start: 'top 80%',
                    toggleActions: 'play none none reverse'
                },
                duration: 1.2,
                opacity: 1,
                y: 0,
                ease: "back.out(1.7)",
                stagger: 0.3
            });

            // Highlight text color animation
            gsap.to('.highlight-text', {
                scrollTrigger: {
                    trigger: '.highlight-text',
                    start: 'top 80%',
                    toggleActions: 'play none none reverse'
                },
                duration: 2,
                color: '#f97316',
                ease: "power2.out",
                delay: 0.5
            });

            // Parallax effect for background image
            gsap.to('.bg-image', {
                scrollTrigger: {
                    trigger: '#hero-section',
                    start: 'top top',
                    end: 'bottom top',
                    scrub: true
                },
                y: -100,
                ease: "none"
            });

            // Smooth scroll for anchor links
            document.querySelectorAll('a[href^="#"]').forEach(anchor => {
                anchor.addEventListener('click', function(e) {
                    e.preventDefault();
                    const target = document.querySelector(this.getAttribute('href'));
                    if (target) {
                        gsap.to(window, {
                            duration: 1.5,
                            scrollTo: target,
                            ease: "power2.inOut"
                        });
                    }
                });
            });
        });

        //PESAN PIMPINAN 

        document.addEventListener('DOMContentLoaded', function() {
            // Pastikan GSAP & ScrollTrigger sudah di-load
            gsap.registerPlugin(ScrollTrigger);

            // Set awal: opacity 0, translateY 60
            gsap.set('#pesan-pimpinan h2, #pesan-pimpinan .card', {
                opacity: 0,
                y: 60
            });

            // Animasi heading
            gsap.to('#pesan-pimpinan h2', {
                scrollTrigger: {
                    trigger: '#pesan-pimpinan',
                    start: 'top 80%',
                    toggleActions: 'play none none reverse'
                },
                duration: 1,
                opacity: 1,
                y: 0,
                ease: "back.out(1.7)"
            });

            // Animasi card
            gsap.to('#pesan-pimpinan .card', {
                scrollTrigger: {
                    trigger: '#pesan-pimpinan',
                    start: 'top 70%',
                    toggleActions: 'play none none reverse'
                },
                duration: 1.2,
                opacity: 1,
                y: 0,
                ease: "back.out(1.7)",
                stagger: 0.2
            });
        });
        //END SCRIPT ANIMASI PESAN PIMPINAN
    </script>

    <style>
        /* Remove old CSS animation */
        /* @keyframes fadeIn removed */

        /* Enhanced styles for better animation performance */
        .floating-element {
            z-index: 15;
        }

        .cta-button {
            will-change: transform;
        }

        .bg-image {
            will-change: transform;
        }

        /* Add subtle text shadow for better readability */
        .main-title {
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3);
        }

        .welcome-text,
        .motto {
            text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.3);
        }
    </style>
@endsection
