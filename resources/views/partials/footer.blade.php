<footer class="bg-[#243771] text-white py-12">
    <div class="container mx-auto px-6">
        <div class="flex flex-col md:flex-row justify-between items-start gap-8">
            
            <!-- Logo + Info + Menu -->
            <div>
                <div class="flex items-center gap-5 mb-6">
                    <img src="{{ asset('images/smk.png') }}" alt="SMK Prestasi Prima" class="h-16 w-auto">
                    <h2 class="font-bold text-2xl" data-translate-key="school_name">SMK Prestasi Prima</h2>
                </div>
                <p class="text-sm leading-relaxed mb-6" data-translate-key="school_address">
                    Jl. Hankam Raya No. 89, Cilangkap, Cipayung,<br>
                    Jakarta Timur, DKI Jakarta.
                </p>

                <!-- Menu -->
                <div class="flex flex-wrap gap-x-8 gap-y-3 text-sm font-medium">
                    <a href="#" class="hover:underline" data-translate-key="menu_info">Informasi Sekolah</a>
                    <a href="#" class="hover:underline" data-translate-key="menu_life">Kehidupan Siswa</a>
                    <a href="#" class="hover:underline" data-translate-key="menu_partner">Mitra</a>
                    <a href="#" class="hover:underline" data-translate-key="menu_admission">Penerimaan Siswa</a>
                    <a href="#" class="hover:underline" data-translate-key="menu_news">Berita</a>
                </div>
            </div>

            <!-- Sosial Media -->
            <div class="flex gap-4">
                <a href="https://api.whatsapp.com/send/?phone=6285195928886" class="border border-gray-400 rounded-md flex items-center justify-center w-12 h-12 hover:border-white transition">
                    <img src="{{ asset('images/whatsapp-white.png') }}" alt="WhatsApp" class="w-6 h-6 object-contain">
                </a>
                <a href="https://www.instagram.com/smkprestasiprima?utm_source=ig_web_button_share_sheet&igsh=MTczYnhjeWMzMXNpOQ==" class="border border-gray-400 rounded-md flex items-center justify-center w-12 h-12 hover:border-white transition">
                    <img src="{{ asset('images/instagram-white.png') }}" alt="Instagram" class="w-6 h-6 object-contain">
                </a>
                <a href="https://m.youtube.com/@SEKOLAHPRESTASIPRIMA" class="border border-gray-400 rounded-md flex items-center justify-center w-12 h-12 hover:border-white transition">
                    <img src="{{ asset('images/youtube-white.png') }}" alt="YouTube" class="w-6 h-6 object-contain">
                </a>
                <a href="https://www.tiktok.com/@smkprestasiprima" class="border border-gray-400 rounded-md flex items-center justify-center w-12 h-12 hover:border-white transition">
                    <img src="{{ asset('images/tiktok-white.png') }}" alt="TikTok" class="w-6 h-6 object-contain">
                </a>
            </div>
        </div>

        <!-- Garis -->
        <div class="border-t border-gray-500 my-10"></div>

        <!-- Copyright -->
        <p class="text-center text-xs text-gray-300" data-translate-key="footer_text">
            © 2025 Orens Solution - Version 2.0 | orang-orang
        </p>
    </div>
</footer>
