<div class="fixed top-1/2 right-0 transform -translate-y-1/2 z-50">
    <div class="relative w-[68px] h-[231px] flex items-center justify-center">
        <!-- Background Putih (awal tampil) -->
        <img id="bgWhite" src="{{ asset('images/social-bar-white.png') }}" class="absolute transition-opacity duration-300" />

        <!-- Background Orange (disembunyikan awalnya, tapi difilter jadi #FE4D01) -->
        <img id="bgOrange"
             src="{{ asset('images/social-bar-orange.png') }}"
             class="absolute opacity-0 transition-opacity duration-300 filter-fe4d01" />

        <!-- Ikon Sosial Media -->
<!-- Ikon Sosial Media -->
    <div class="flex flex-col items-center gap-5 relative z-10">
        <a href="https://api.whatsapp.com/send/?phone=6285195928886" target="_blank">
            <img id="waIcon" src="{{ asset('images/whatsapp-orange.png') }}" class="w-8 h-auto object-contain" />
        </a>
        <a href="https://www.instagram.com/smkprestasiprima?utm_source=ig_web_button_share_sheet&igsh=MTczYnhjeWMzMXNpOQ==" target="_blank">
            <img id="igIcon" src="{{ asset('images/instagram-orange.png') }}" class="w-8 h-auto object-contain" />
        </a>
        <a href="https://m.youtube.com/@SEKOLAHPRESTASIPRIMA" target="_blank">
            <img id="ytIcon" src="{{ asset('images/youtube-orange.png') }}" class="w-8 h-auto object-contain" />
        </a>
        <a href="https://www.tiktok.com/@smkprestasiprima" target="_blank">
            <img id="ttIcon" src="{{ asset('images/tiktok-orange.png') }}" class="w-8 h-auto object-contain" />
        </a>
    </div>

    </div>
</div>

<style>
/* Biar bgOrange PNG berubah warna ke #FE4D01 */
.filter-fe4d01 {
    filter: brightness(0) saturate(100%) invert(43%) sepia(82%) saturate(3800%) hue-rotate(1deg) brightness(101%) contrast(101%);
}

/* Hover & Click untuk ikon sosmed */
.social-icon {
    width: 28px;
    height: 28px;
    transition: transform 0.2s ease, filter 0.2s ease;
    cursor: pointer;
}

.social-icon:hover {
    transform: scale(1.1);
    filter: drop-shadow(0 0 6px rgba(0, 0, 0, 0.25));
}

.social-icon:active {
    transform: scale(0.9);
}
</style>

<script>
    // script buat social bar
    window.addEventListener("scroll", function () {
        const bgOrange = document.getElementById("bgOrange");
        const bgWhite = document.getElementById("bgWhite");

        const waIcon = document.getElementById("waIcon");
        const igIcon = document.getElementById("igIcon");
        const ytIcon = document.getElementById("ytIcon");
        const ttIcon = document.getElementById("ttIcon");

        if (window.scrollY > 50) {
            // ganti ke versi orange
            bgOrange.classList.remove("opacity-0");
            bgWhite.classList.add("opacity-0");

            waIcon.src = "{{ asset('images/whatsapp-white.png') }}";
            igIcon.src = "{{ asset('images/instagram-white.png') }}";
            ytIcon.src = "{{ asset('images/youtube-white.png') }}";
            ttIcon.src = "{{ asset('images/tiktok-white.png') }}";
        } else {
            // kembali ke versi putih
            bgOrange.classList.add("opacity-0");
            bgWhite.classList.remove("opacity-0");

            waIcon.src = "{{ asset('images/whatsapp-orange.png') }}";
            igIcon.src = "{{ asset('images/instagram-orange.png') }}";
            ytIcon.src = "{{ asset('images/youtube-orange.png') }}";
            ttIcon.src = "{{ asset('images/tiktok-orange.png') }}";
        }
    });
</script>
