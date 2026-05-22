@extends('layouts.master')

@section('content')
<section class="max-w-[1200px] mx-auto px-gutter-desktop py-10 text-center">
    <h1 class="font-bold text-headline-lg lg:text-display-lg text-on-background mb-2">Galeri Visual</h1>
    <p class="text-on-surface-variant text-sm md:text-base max-w-xl mx-auto leading-relaxed">
        Temukan cerita di balik setiap produk kami. Mulai dari standar kebersihan pabrik yang ketat hingga momentum hangat kemitraan kuliner kami.
    </p>
</section>

<section class="max-w-[1200px] mx-auto px-gutter-desktop mb-8">
    <div class="flex flex-wrap justify-center gap-2">
        <button class="category-btn active bg-primary text-on-primary px-5 py-2 rounded-full font-bold text-xs md:text-sm tracking-wide transition-all shadow-sm" onclick="filterGallery('all')">Semua Koleksi</button>
        <button class="category-btn bg-surface-container-low text-on-surface px-5 py-2 rounded-full font-medium text-xs md:text-sm tracking-wide hover:bg-surface-container-high transition-all border border-outline-variant/30" onclick="filterGallery('production')">Aktivitas Produksi</button>
        <button class="category-btn bg-surface-container-low text-on-surface px-5 py-2 rounded-full font-medium text-xs md:text-sm tracking-wide hover:bg-surface-container-high transition-all border border-outline-variant/30" onclick="filterGallery('products')">Dokumentasi Produk</button>
        <button class="category-btn bg-surface-container-low text-on-surface px-5 py-2 rounded-full font-medium text-xs md:text-sm tracking-wide hover:bg-surface-container-high transition-all border border-outline-variant/30" onclick="filterGallery('events')">Acara & Kemitraan</button>
    </div>
</section>

<section class="max-w-[1200px] mx-auto px-gutter-desktop pb-12">
    <div class="grid grid-cols-1 md:grid-cols-2 gap-4" id="gallery-container">
        
        <div class="gallery-item group relative rounded-xl overflow-hidden shadow-md border border-outline-variant/30 h-[200px] md:h-[240px]" data-category="production">
            <img class="w-full h-full object-cover hover:scale-103 transition-transform duration-500" src="https://lh3.googleusercontent.com/aida-public/AB6AXuBcv4rHkvs72j5bx3ba5PLAetbFbPdqlbQqbhwn1WhWqQwht-9Vl0uOI20sA-8nhAtk3hC59seSBC0oLXf7gpJS5EQcThg4TsAay_SKWuolWcBgL4afb8DTUYH63VOoIgDKeREIhWna8IJ4XB8nnH9vAqMDU6W6sWEoQ0Q6eXV2S7mKq6WMstxlsEIAUn3SN4zF1NUyhfrLGGP88Qmj3eVOSdZtNk0Rt7MwmpQvNUE4uqGynrhX8KyHzxeYwFfqGfqjaAGERCZ4aClM" alt="Hygienic Processing Line Factory"/>
            <div class="gallery-overlay absolute inset-0 bg-primary/85 opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex flex-col justify-end p-4 text-white">
                <span class="text-[10px] font-bold uppercase tracking-widest opacity-80 mb-0.5">Produksi</span>
                <h3 class="font-bold text-sm md:text-base">Lini Pengolahan Higienis</h3>
            </div>
        </div>

        <div class="gallery-item group relative rounded-xl overflow-hidden shadow-md border border-outline-variant/30 h-[200px] md:h-[240px]" data-category="products">
            <img class="w-full h-full object-cover hover:scale-103 transition-transform duration-500" src="https://lh3.googleusercontent.com/aida-public/AB6AXuCh7Fi00FFb8F14Tlj7tvbecvMhxfZ3tbP8cvBF1kkQ-0eJ6AfbMl_b6qY1hN3RCUY5MTzgTLu527FdYEbAUeRSE4Az4G3HeTn2i9bye1vF4gqMAv20gkUweTISjdQ7eVDSl5U8nCqr4InSaiTxhivVvyMiDQXiu08sWeAFBVlLVQicZrA1j8h2uJ5EMK3WdBZeMJAFQ45wNpFXEWy75uufNF9SFqTVyRpUqtwPt8VyKr8Zd599HP6h6Gyg2B0TL8p3KMBqNZOHIGLP" alt="Premium Chicken Nugget Plating Dish"/>
            <div class="gallery-overlay absolute inset-0 bg-primary/85 opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex flex-col justify-end p-4 text-white">
                <span class="text-[10px] font-bold uppercase tracking-widest opacity-80 mb-0.5">Produk</span>
                <h3 class="font-bold text-sm md:text-base">Penyajian Nugget Ayam Premium</h3>
            </div>
        </div>

        <div class="gallery-item group relative rounded-xl overflow-hidden shadow-md border border-outline-variant/30 h-[200px] md:h-[240px]" data-category="events">
            <img class="w-full h-full object-cover hover:scale-103 transition-transform duration-500" src="https://lh3.googleusercontent.com/aida-public/AB6AXuDD3F-IVPbHbEx-wdf1jCLOzJme6ZJtuvTwYjf5JGWvEIvCwXABVrrIhiUW6Wo7WznmwbOEtOz88McIPn-s4Cx4-p-QsHquEJqmWRxHtWG3khsfeZ0hhX66zSoo0HrFbqRSnQ1rzZWBsKG60Ev7EbTWoHuE2nwJvJF52zdw8aZNPHevNBfvFX5KxTlkJayNknghK2VFiWG5qu9bVWnLIo6OatOoQc6LK2txMoGZ-947aDpozB89O4PsnmIowC2-Flpvon-CPfkNnl5j" alt="F&B Exhibition Culinary Booth"/>
            <div class="gallery-overlay absolute inset-0 bg-primary/85 opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex flex-col justify-end p-4 text-white">
                <span class="text-[10px] font-bold uppercase tracking-widest opacity-80 mb-0.5">Acara</span>
                <h3 class="font-bold text-sm md:text-base">Pameran Kuliner F&B 2024</h3>
            </div>
        </div>

        <div class="gallery-item group relative rounded-xl overflow-hidden shadow-md border border-outline-variant/30 h-[200px] md:h-[240px]" data-category="production">
            <img class="w-full h-full object-cover hover:scale-103 transition-transform duration-500" src="https://lh3.googleusercontent.com/aida-public/AB6AXuB6htbsOqOeFgqurHOwMfFqcJex2RiMB1J9hMijlJMZr8UT48AfUanVSnrfXJf61K3orBsaBnjODej1_mIsLgW5BSc7uOzke87GpsUENanFcSOKVKP3mrQCfBIB7cZXeX3ujQ482TcgZjzM13MuUVQxtAflGQJlk_j-H3_aC20eXP62sqVZ46ut9P52bWNvJQ0RYeKDoH3zUTNS8vh5nd6X47eTjhR08zJSddGAujV9E4ONb-DEo7WymFj37qNicqtS8DPS2jdX_9k0" alt="Cold Storage Logistics Freezer"/>
            <div class="gallery-overlay absolute inset-0 bg-primary/85 opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex flex-col justify-end p-4 text-white">
                <span class="text-[10px] font-bold uppercase tracking-widest opacity-80 mb-0.5">Produksi</span>
                <h3 class="font-bold text-sm md:text-base">Logistik Distribusi Rantai Dingin</h3>
            </div>
        </div>

        </div>
</section>

<section class="py-12 bg-primary text-on-primary text-center relative overflow-hidden">
    <div class="max-w-[1200px] mx-auto px-gutter-desktop relative z-10">
        <h2 class="font-bold text-headline-md lg:text-headline-lg mb-2">Kualitas Nyata yang Dapat Dilihat & Dirasakan</h2>
        <p class="font-body-md text-xs md:text-sm mb-6 max-w-lg mx-auto opacity-90 leading-relaxed">Rasakan tingkat komitmen higienitas mutlak yang sama pada setiap produk pangan yang kami kirimkan. Bergabunglah bersama kami hari ini.</p>
        <div class="flex flex-col sm:flex-row justify-center gap-3">
            <a href="#" class="bg-on-primary text-primary px-6 py-2.5 rounded-lg font-bold text-sm tracking-wide hover:bg-surface transition-all shadow-md text-center">Gabung Reseller</a>
            <a href="{{ url('/products') }}" class="border border-on-primary text-on-primary px-6 py-2.5 rounded-lg font-bold text-sm tracking-wide hover:bg-white/10 transition-all text-center">Lihat Katalog</a>
        </div>
    </div>
</section>

<script>
    function filterGallery(category) {
        const items = document.querySelectorAll('.gallery-item');
        const buttons = document.querySelectorAll('.category-btn');

        buttons.forEach(btn => {
            btn.classList.remove('bg-primary', 'text-on-primary', 'active');
            btn.classList.add('bg-surface-container-low', 'text-on-surface');
        });
        
        
        if(event) {
            event.target.classList.remove('bg-surface-container-low', 'text-on-surface');
            event.target.classList.add('bg-primary', 'text-on-primary', 'active');
        }

        items.forEach(item => {
            if (category === 'all' || item.getAttribute('data-category') === category) {
                item.style.display = 'block';
                setTimeout(() => {
                    item.style.opacity = '1';
                    item.style.transform = 'scale(1)';
                }, 50);
            } else {
                item.style.opacity = '0';
                item.style.transform = 'scale(0.95)';
                setTimeout(() => {
                    item.style.display = 'none';
                }, 300);
            }
        });
    }
</script>
@endsection