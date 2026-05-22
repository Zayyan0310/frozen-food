@extends('layouts.master')

@section('content')
<section class="relative w-full bg-surface-container py-10 overflow-hidden">
    <div class="max-w-[1200px] mx-auto px-gutter-desktop flex flex-col md:flex-row items-center gap-6">
        <div class="flex-1 space-y-2 z-10">
            <h1 class="font-bold text-headline-lg lg:text-display-lg text-on-surface">Hubungi <span class="text-primary">Ipi Frozen Food</span></h1>
            <p class="text-xs md:text-sm text-on-surface-variant max-w-[460px] leading-relaxed">
                Apakah Anda pelanggan setia, calon mitra bisnis, atau tertarik menjadi reseller? Tim kami siap melayani kebutuhan informasi dan logistik pangan beku Anda dengan standar terbaik.
            </p>
        </div>
        <div class="flex-1 w-full max-w-[420px] md:max-w-none">
            <div class="aspect-video rounded-xl overflow-hidden shadow-md relative group h-[180px] md:h-[220px] w-full">
                <img alt="Customer Service Representative" class="w-full h-full object-cover group-hover:scale-103 transition-transform duration-500" src="https://lh3.googleusercontent.com/aida-public/AB6AXuAEAQiBVIvDmoucfV3nFMfhAfOFDK2TvsyOn5UyOIB8zpwDs7YuZQRu-KqPMzwG_YvNII0oFgDpAPlEGpo9azr_b9kpPKhpht5l6JMgl4Tud649Fhk2yzITQbFcb9OlUO82r4gtPSTUuGYRQNY9Join5c2GF2eUs79YJBUgUcA7ALTU0P4R0KawWwfGWLrZbjbt9BL9zBPyxN-MOIs18C_sfydlJmQCaFEauPYRwnSetzN5H43y9Xm0C_JIGFL6FaxzfF2tMqW60Iav"/>
                <div class="absolute inset-0 bg-primary/5 mix-blend-multiply"></div>
            </div>
        </div>
    </div>
</section>

<section class="max-w-[1200px] mx-auto px-gutter-desktop py-12">
    <div class="grid grid-cols-1 md:grid-cols-12 gap-6">
        <div class="md:col-span-7 bg-white p-6 rounded-xl shadow-[0_4px_12px_rgba(0,0,0,0.02)] border border-surface-container">
            <h2 class="font-bold text-base md:text-lg text-on-surface mb-4">Kirim Pesan</h2>
            <form class="space-y-4">
                @csrf <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                    <div class="space-y-1">
                        <label class="text-xs font-semibold text-on-surface-variant">Nama Lengkap</label>
                        <input class="w-full px-3 py-2 text-sm rounded-lg border border-outline-variant focus:border-primary focus:ring-1 focus:ring-primary outline-none transition-all" placeholder="name" type="text" required/>
                    </div>
                    <div class="space-y-1">
                        <label class="text-xs font-semibold text-on-surface-variant">Alamat Email</label>
                        <input class="w-full px-3 py-2 text-sm rounded-lg border border-outline-variant focus:border-primary focus:ring-1 focus:ring-primary outline-none transition-all" placeholder="email" type="email" required/>
                    </div>
                </div>
                <div class="space-y-1">
                    <label class="text-xs font-semibold text-on-surface-variant">Subjek Kepentingan</label>
                    <select class="w-full px-3 py-2 text-sm rounded-lg border border-outline-variant focus:border-primary focus:ring-1 focus:ring-primary bg-white outline-none transition-all">
                        <option>Pertanyaan Umum</option>
                        <option>Pendaftaran Kemitraan Reseller</option>
                        <option>Kritik & Saran Produk</option>
                        <option>Kerjasama Korporat (B2B)</option>
                    </select>
                </div>
                <div class="space-y-1">
                    <label class="text-xs font-semibold text-on-surface-variant">Isi Pesan</label>
                    <textarea class="w-full px-3 py-2 text-sm rounded-lg border border-outline-variant focus:border-primary focus:ring-1 focus:ring-primary outline-none transition-all" placeholder="Tuliskan hal yang bisa kami bantu..." rows="4" required></textarea>
                </div>
                <button class="w-full py-3 bg-primary text-white font-bold text-sm rounded-lg shadow-sm hover:opacity-95 active:scale-[0.99] transition-all flex items-center justify-center gap-2" type="submit">
                    Kirim Pesan
                </button>
            </form>
        </div>

        <div class="md:col-span-5 flex flex-col gap-4">
            <div class="bg-primary p-4 rounded-xl text-white shadow-sm flex items-center gap-4">
                <div class="w-10 h-10 bg-white/20 rounded-full flex items-center justify-center flex-shrink-0">
                    <span class="material-symbols-outlined text-white text-xl">call</span>
                </div>
                <div>
                    <p class="text-[10px] font-bold opacity-80 uppercase tracking-widest">Hotline WhatsApp</p>
                    <p class="font-bold text-base md:text-lg">+62 812-3456-7890</p>
                </div>
            </div>

            <div class="bg-surface-container p-4 rounded-xl border border-outline-variant flex items-center gap-4 hover:border-primary transition-colors cursor-pointer">
                <div class="w-10 h-10 bg-primary/10 rounded-full flex items-center justify-center flex-shrink-0">
                    <span class="material-symbols-outlined text-primary text-xl">mail</span>
                </div>
                <div>
                    <p class="text-[10px] font-bold text-on-surface-variant uppercase tracking-widest">Dukungan Email</p>
                    <p class="text-xs md:text-sm font-bold text-on-surface">hello@ipifrozenfood.com</p>
                </div>
            </div>

            <div class="bg-white p-4 rounded-xl border border-outline-variant flex items-start gap-4 flex-grow">
                <div class="w-10 h-10 bg-secondary/10 rounded-full flex items-center justify-center flex-shrink-0">
                    <span class="material-symbols-outlined text-secondary text-xl">location_on</span>
                </div>
                <div>
                    <p class="text-[10px] font-bold text-on-surface-variant uppercase tracking-widest">Kantor & Gudang Utama</p>
                    <p class="text-xs text-on-surface leading-relaxed mt-1">
                        Kawasan Industri Pangan Blok C-14,<br/>
                        Pusat Logistik Pangan Jakarta,<br/>
                        DKI Jakarta, Indonesia 12345
                    </p>
                    <div class="mt-3 flex gap-2 items-center text-secondary font-bold text-[11px]">
                        <span class="material-symbols-outlined text-[16px]">verified</span>
                        Fasilitas Sertifikasi BPOM & HALAL
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="w-full bg-surface-container py-10">
    <div class="max-w-[1200px] mx-auto px-gutter-desktop">
        <div class="text-center mb-6">
            <h2 class="font-bold text-headline-md lg:text-headline-lg text-on-surface">Lokasi Distribusi Kami</h2>
            <p class="text-xs md:text-sm text-on-surface-variant mt-1">Terletak strategis untuk efisiensi distribusi *cold-chain* (rantai dingin) ke seluruh wilayah.</p>
        </div>
        <div class="w-full h-[320px] md:h-[380px] rounded-2xl overflow-hidden shadow-md grayscale hover:grayscale-0 transition-all duration-700 border border-outline-variant/30">
            <iframe 
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d897486.5528550452!2d106.15847167553297!3d-6.351192205689092!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69ec45b619cb31%3A0x1c835056ba51ca21!2sJabodetabek!5e1!3m2!1sid!2sid!4v1779414644222!5m2!1sid!2sid"
                width="100%" 
                height="100%" 
                style="border:0;" 
                allowfullscreen="" 
                loading="lazy" 
                referrerpolicy="no-referrer-when-downgrade">
            </iframe>
        </div>
    </div>
</section>

<section class="max-w-[800px] mx-auto px-gutter-desktop py-12">
    <div class="text-center mb-8">
        <h2 class="font-bold text-headline-md lg:text-headline-lg text-on-surface">Pertanyaan yang Sering Diajukan</h2>
        <div class="w-16 h-1 bg-primary mx-auto mt-2 rounded-full"></div>
    </div>
    
    <div class="space-y-3">
        <details class="faq-item group bg-white rounded-xl border border-outline-variant p-4 cursor-pointer transition-all hover:border-primary">
            <summary class="flex justify-between items-center list-none font-bold text-xs md:text-sm text-on-surface">
                Berapa minimal pemesanan untuk layanan pengiriman?
                <span class="material-symbols-outlined faq-icon transition-transform text-primary text-xl">expand_more</span>
            </summary>
            <div class="mt-2 text-xs md:text-sm text-on-surface-variant leading-relaxed border-t border-outline-variant/30 pt-2">
                Untuk area Jabodetabek, minimal pemesanan pengiriman retail ke rumah adalah Rp 150.000. Sedangkan untuk pesanan grosir agen/reseller, minimal pembelian dimulai dari 10 karton.
            </div>
        </details>

        <details class="faq-item group bg-white rounded-xl border border-outline-variant p-4 cursor-pointer transition-all hover:border-primary">
            <summary class="flex justify-between items-center list-none font-bold text-xs md:text-sm text-on-surface">
                Bagaimana cara menjaga keamanan pangan selama transit?
                <span class="material-symbols-outlined faq-icon transition-transform text-primary text-xl">expand_more</span>
            </summary>
            <div class="mt-2 text-xs md:text-sm text-on-surface-variant leading-relaxed border-t border-outline-variant/30 pt-2">
                Kami menggunakan armada truk berpendingin khusus (*Cold Storage Truck*) yang menjaga suhu konstan stabil di -18°C. Setiap kurir dilengkapi boks isolasi termal guna memastikan produk tidak mencair di jalan.
            </div>
        </details>

        <details class="faq-item group bg-white rounded-xl border border-outline-variant p-4 cursor-pointer transition-all hover:border-primary">
            <summary class="flex justify-between items-center list-none font-bold text-xs md:text-sm text-on-surface">
                Apakah bisa menjadi reseller di luar area Jakarta?
                <span class="material-symbols-outlined faq-icon transition-transform text-primary text-xl">expand_more</span>
            </summary>
            <div class="mt-2 text-xs md:text-sm text-on-surface-variant leading-relaxed border-t border-outline-variant/30 pt-2">
                Bisa sekali! Saat ini kami sedang memperluas jaringan mitra distribusi ke wilayah Jawa Barat, Banten, dan Jawa Tengah. Silakan isi formulir pesan di atas dengan subjek "Pendaftaran Kemitraan Reseller".
            </div>
        </details>

        <details class="faq-item group bg-white rounded-xl border border-outline-variant p-4 cursor-pointer transition-all hover:border-primary">
            <summary class="flex justify-between items-center list-none font-bold text-xs md:text-sm text-on-surface">
                Apakah semua produk memiliki sertifikasi HALAL?
                <span class="material-symbols-outlined faq-icon transition-transform text-primary text-xl">expand_more</span>
            </summary>
            <div class="mt-2 text-xs md:text-sm text-on-surface-variant leading-relaxed border-t border-outline-variant/30 pt-2">
                Tentu saja. 100% produk Ipi Frozen Food telah tersertifikasi HALAL resmi oleh MUI/BPJPH dan memiliki nomor registrasi MD BPOM RI yang aktif. Kami memprioritaskan higienitas dan kepatuhan regulasi pangan nasional.
            </div>
        </details>
    </div>
</section>

<script>
    
    document.querySelector('form').addEventListener('submit', function(e) {
        e.preventDefault();
        const btn = e.target.querySelector('button');
        const originalText = btn.textContent;
        btn.disabled = true;
        btn.innerHTML = '<span class="material-symbols-outlined animate-spin text-base">sync</span> Mengirim...';
        
        setTimeout(() => {
            btn.classList.replace('bg-primary', 'bg-secondary');
            btn.innerHTML = '<span class="material-symbols-outlined text-base">check_circle</span> Pesan Terkirim!';
            e.target.reset();
            setTimeout(() => {
                btn.disabled = false;
                btn.classList.replace('bg-secondary', 'bg-primary');
                btn.textContent = originalText;
            }, 2500);
        }, 1200);
    });

    
    const faqs = document.querySelectorAll('.faq-item');
    faqs.forEach(faq => {
        faq.addEventListener('toggle', function() {
            if (this.open) {
                faqs.forEach(other => {
                    if (other !== this && other.open) other.open = false;
                });
            }
        });
    });
</script>
@endsection