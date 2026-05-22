@extends('layouts.master')

@section('content')
    <section class="relative w-full min-h-[550px] lg:min-h-[600px] flex items-center overflow-hidden bg-surface py-12 md:py-16">
        <div class="absolute inset-0 z-0">
            <img alt="Professional Kitchen Background" class="w-full h-full object-cover opacity-10" src="https://lh3.googleusercontent.com/aida-public/AB6AXuB4k7lylCcuMGa_NSpWjaJU8yXOePf7Vl_DPcZO8CXJhbmGhG4EkSvMfl8bp3WKBa6kgKH-xUWcDq3NyIRxOB_8Ras3NOgRXMhLvQM7l3E-IVmN17hmYwb_85TL-vWfqzxb3ZYiyin06TMiVe-ft2a26p7xMHuJNieCBvJsYa4QngfI6BT2H6127NzCcDn7OhK5ny-jeOH_2euiqDmyftCrX3Y_gIag2TC77h3mzccYf1Z7uOEwZ9EUsb7ddGCi-8U_LQlygVit9vSh"/>
            <div class="absolute inset-0 bg-gradient-to-r from-surface via-surface/80 to-transparent"></div>
        </div>
        <div class="relative z-10 w-full max-w-[1200px] mx-auto px-gutter-desktop grid lg:grid-cols-2 gap-8 items-center">
            <div class="space-y-4 md:space-y-5">
                <div class="inline-flex items-center gap-2 px-2.5 py-1 rounded-full bg-secondary-container text-on-secondary-container font-label-sm text-[13px]">
                    <span class="material-symbols-outlined text-[16px]">verified</span>
                    Terverifikasi HALAL & BPOM
                </div>
                <h1 class="font-display-lg text-headline-lg lg:text-display-lg text-on-background leading-tight">
                    Kelezatan Praktis & <span class="text-primary">Higienis</span> untuk Keluarga Anda
                </h1>
                <p class="font-body-md text-body-md text-on-surface-variant max-w-[480px]">
                    Solusi pangan beku profesional dengan standar kualitas ekspor. Diproses secara higienis tanpa pengawet untuk menjaga nutrisi dan rasa asli.
                </p>
                <div class="flex flex-wrap gap-3 pt-2">
                    <a href="{{ url('/products') }}" class="bg-primary text-on-primary px-5 py-2.5 rounded-lg font-bold text-sm tracking-wide hover:shadow-lg hover:-translate-y-0.5 transition-all text-center">
                        Lihat Katalog
                    </a>
                    <a href="#" class="border-2 border-primary text-primary px-5 py-2.5 rounded-lg font-bold text-sm tracking-wide hover:bg-primary/5 transition-all text-center">
                        Gabung Reseller
                    </a>
                </div>
            </div>

            <div class="hidden lg:block relative justify-self-center w-full max-w-[450px]">
                <div class="relative z-20 rounded-[24px] overflow-hidden shadow-[0_15px_35px_rgba(151,0,12,0.12)] transform rotate-2 hover:rotate-0 transition-transform duration-500">
                    <img alt="Frozen Food Platter" class="w-full h-[380px] object-cover" src="https://lh3.googleusercontent.com/aida-public/AB6AXuBmVOHovi_NWQlVQE-MfhZcBXzF2swwBlxO35ojGFs9IH1VJpz_yX8JLAxbGFes8JWtaMMRHSZuySyVWZSJ9LDAVWbPaq4eXeWOF-A6PolnCDlNZtK3hBemDK-Q06OF9iiDLmEQMh6weZpKMCt1fJ9gWFwHv0H92Dqdc-9dRjmj13y6IPpZuUFnNxIXY_SM82rbDwLCIGT5zwjpB1g0EwjRj1XbV5QBPxNuSO5HiKyDO7jHANEAb8A_qCiB4bF67JtuHw3Ya3YO26we"/>
                </div>
                <div class="absolute -bottom-6 -left-6 z-30 glass-card p-4 rounded-xl shadow-lg max-w-[180px]">
                    <p class="text-primary font-bold text-headline-md leading-none mb-1">-18°C</p>
                    <p class="text-[12px] text-on-surface-variant font-medium leading-tight">Pembekuan Cepat untuk Menjaga Nutrisi</p>
                </div>
            </div>
        </div>
    </section>

    <section class="py-10 md:py-12 bg-surface-container-lowest">
        <div class="max-w-[1200px] mx-auto px-gutter-desktop">
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
                
                <div class="p-5 rounded-xl bg-surface border border-outline-variant hover:shadow-[0_8px_20px_rgba(151,0,12,0.05)] transition-all group">
                    <div class="w-12 h-12 rounded-lg bg-primary-container/10 flex items-center justify-center mb-4 group-hover:scale-105 transition-transform">
                        <span class="material-symbols-outlined text-primary text-2xl">sanitizer</span>
                    </div>
                    <h3 class="font-bold text-base mb-1.5 text-on-surface">Higienis</h3>
                    <p class="text-on-surface-variant text-[13px] leading-relaxed">Diproses di pabrik steril dengan standar sanitasi tinggi.</p>
                </div>

                <div class="p-5 rounded-xl bg-surface border border-outline-variant hover:shadow-[0_8px_20px_rgba(151,0,12,0.05)] transition-all group">
                    <div class="w-12 h-12 rounded-lg bg-primary-container/10 flex items-center justify-center mb-4 group-hover:scale-105 transition-transform">
                        <span class="material-symbols-outlined text-primary text-2xl">timer</span>
                    </div>
                    <h3 class="font-bold text-base mb-1.5 text-on-surface">Praktis</h3>
                    <p class="text-on-surface-variant text-[13px] leading-relaxed">Siap saji dalam hitungan menit tanpa repot memasak lama.</p>
                </div>

                <div class="p-5 rounded-xl bg-surface border border-outline-variant hover:shadow-[0_8px_20px_rgba(151,0,12,0.05)] transition-all group">
                    <div class="w-12 h-12 rounded-lg bg-primary-container/10 flex items-center justify-center mb-4 group-hover:scale-105 transition-transform">
                        <span class="material-symbols-outlined text-primary text-2xl">nature_people</span>
                    </div>
                    <h3 class="font-bold text-base mb-1.5 text-on-surface">Tanpa Pengawet</h3>
                    <p class="text-on-surface-variant text-[13px] leading-relaxed">Hanya menggunakan proses pembekuan alami tanpa kimia.</p>
                </div>

                <div class="p-5 rounded-xl bg-surface border border-outline-variant hover:shadow-[0_8px_20px_rgba(151,0,12,0.05)] transition-all group">
                    <div class="w-12 h-12 rounded-lg bg-primary-container/10 flex items-center justify-center mb-4 group-hover:scale-105 transition-transform">
                        <span class="material-symbols-outlined text-primary text-2xl">payments</span>
                    </div>
                    <h3 class="font-bold text-base mb-1.5 text-on-surface">Harga Bersaing</h3>
                    <p class="text-on-surface-variant text-[13px] leading-relaxed">Kualitas premium dengan harga yang tetap terjangkau.</p>
                </div>

            </div>
        </div>
    </section>

    <section class="py-12 bg-surface">
        <div class="max-w-[1200px] mx-auto px-gutter-desktop">
            <div class="flex justify-between items-end mb-8">
                <div>
                    <h2 class="font-bold text-headline-md lg:text-headline-lg text-on-background">Produk Unggulan Kami</h2>
                    <p class="text-on-surface-variant text-sm mt-1">Pilihan terbaik untuk hidangan keluarga sehat.</p>
                </div>
                <a class="text-primary text-sm font-bold hover:underline underline-offset-4" href="{{ url('/products') }}">Lihat Semua →</a>
            </div>
            
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
                <div class="group bg-surface rounded-xl overflow-hidden border border-outline-variant hover:shadow-[0_12px_24px_rgba(151,0,12,0.06)] transition-all flex flex-col justify-between">
                    <div class="relative h-44 overflow-hidden bg-surface-container">
                        <img alt="Chicken Nugget Premium" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" src="https://lh3.googleusercontent.com/aida-public/AB6AXuA0lGHaWLEk2kIqlPjgNkpkp57y4yYzVt9BAniMy8cD5guso_2mSgzrj-fNxzgVJMEJyT8ku6ckWMXyicj0BCzD8ZSwiTMbByL1vkKoEx0bGfvjpjX6nvukL6aQ-R1Oshx_8esoHAJcxyvd672-FU-Yh2UrLoumqqHZ9fZ_m4eBAD1BCVy9yGQhp0PX03TOFjRkvDFigi8G8pORMqHpEKiVsR8rj3pNHK42MmqaMCIZsRyZ-hbqox0dWRT4Y-oZkC0knNvoQUBb5War"/>
                        <span class="absolute top-3 left-3 bg-secondary text-on-secondary px-2.5 py-0.5 rounded-full text-[11px] font-bold shadow-sm">BEST SELLER</span>
                    </div>
                    <div class="p-4 flex-grow flex flex-col justify-between">
                        <div class="mb-3">
                            <h4 class="font-bold text-base text-on-surface mb-0.5">Premium Chicken Nugget</h4>
                            <p class="text-[12px] text-on-surface-variant">500gr • 100% Dada Ayam</p>
                        </div>
                        <div class="flex items-center justify-between pt-1">
                            <span class="text-primary font-bold text-base">Rp 45.000</span>
                            <button class="w-8 h-8 rounded-full bg-primary/10 text-primary flex items-center justify-center hover:bg-primary hover:text-on-primary transition-colors active:scale-95">
                                <span class="material-symbols-outlined text-[18px]">add_shopping_cart</span>
                            </button>
                        </div>
                    </div>
                </div>

                <div class="group bg-surface rounded-xl overflow-hidden border border-outline-variant hover:shadow-[0_12px_24px_rgba(151,0,12,0.06)] transition-all flex flex-col justify-between">
                    <div class="relative h-44 overflow-hidden bg-surface-container">
                        <img alt="Beef Meatball Premium" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" src="https://lh3.googleusercontent.com/aida-public/AB6AXuAv4UOit3I1tdgQasUaZ2Ni0ooaHCvkdED-GT4P8CvDQ1ddvn-Fjtz9VCB6ug13i2TNHFSf0EGf2U8zkayXFk4LGpH7qaiZXIEFXHpH6GIewCO2iB5re1wvSrC5s-II90rwyNw3_zkUATfPRPvR0xqsKDJdR5da4SViwC6UoOfwFLY4KiaTtx5B4M_ZI5n8jOcy70aXQoL59hc425ZXT1-LVvqPqge266r4DK1O8hhrL4ftp7Ch1MCpCApLBAEFrL-gdeSDAvJRRH83"/>
                        <span class="absolute top-3 left-3 bg-tertiary-container text-on-tertiary-container px-2.5 py-0.5 rounded-full text-[11px] font-bold shadow-sm">BARU</span>
                    </div>
                    <div class="p-4 flex-grow flex flex-col justify-between">
                        <div class="mb-3">
                            <h4 class="font-bold text-base text-on-surface mb-0.5">Baso Sapi Spesial</h4>
                            <p class="text-[12px] text-on-surface-variant">400gr • Daging Sapi Pilihan</p>
                        </div>
                        <div class="flex items-center justify-between pt-1">
                            <span class="text-primary font-bold text-base">Rp 52.000</span>
                            <button class="w-8 h-8 rounded-full bg-primary/10 text-primary flex items-center justify-center hover:bg-primary hover:text-on-primary transition-colors active:scale-95">
                                <span class="material-symbols-outlined text-[18px]">add_shopping_cart</span>
                            </button>
                        </div>
                    </div>
                </div>

                <div class="group bg-surface rounded-xl overflow-hidden border border-outline-variant hover:shadow-[0_12px_24px_rgba(151,0,12,0.06)] transition-all flex flex-col justify-between">
                    <div class="relative h-44 overflow-hidden bg-surface-container">
                        <img alt="Premium Dimsum" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" src="https://lh3.googleusercontent.com/aida-public/AB6AXuAmj9JMONMoE59JoYbSCxI8rLN2CuXavZ-Wex0jqxlC5HPni9N6h8yIxa6vuo9VpwxdaibO7VYrIs4cVmoCvARXc6iE4iauBCIYqh-QtcUHVnBwVJy_vyAa8F7nuBm4YtWBR0cC0_8_dOPZ9J2pnDaK1UU8Z_nndbknhW26w_6_6YLzLOyK_T-iBNwJs8o-bs6TuEAap7HN-Li5kNNtCsk7E7k06iYz2rOwoUv-x3lse5eCUKxVBkrZECxUSo0pXHCvEE5FT7DbZREI"/>
                    </div>
                    <div class="p-4 flex-grow flex flex-col justify-between">
                        <div class="mb-3">
                            <h4 class="font-bold text-base text-on-surface mb-0.5">Dimsum Mix Platter</h4>
                            <p class="text-[12px] text-on-surface-variant">12 Pcs • Udang & Ayam</p>
                        </div>
                        <div class="flex items-center justify-between pt-1">
                            <span class="text-primary font-bold text-base">Rp 38.000</span>
                            <button class="w-8 h-8 rounded-full bg-primary/10 text-primary flex items-center justify-center hover:bg-primary hover:text-on-primary transition-colors active:scale-95">
                                <span class="material-symbols-outlined text-[18px]">add_shopping_cart</span>
                            </button>
                        </div>
                    </div>
                </div>

                <div class="group bg-surface rounded-xl overflow-hidden border border-outline-variant hover:shadow-[0_12px_24px_rgba(151,0,12,0.06)] transition-all flex flex-col justify-between">
                    <div class="relative h-44 overflow-hidden bg-surface-container">
                        <img alt="Sosis Sapi Bratwurst" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" src="https://lh3.googleusercontent.com/aida-public/AB6AXuCrsH45hw2mF_h30Wt5Cze4KPDKeCvczigRU-ed1tR7WLsgyIZ_GO17SG9vnbbx3oe32XcLUBpIbmWkysEY_ANzFqzu60EENXCmqlu2ZHTQ5fVY7ZJYgiAFoovWGbdkU179usZctLjOgADJr0IC-UpJa1otrnR-1XLaoMgCljza2oIcuWz5Ep2_y4_hpu76fwA0WfanzbLR6HI-WMegcsl5Jepmiw0pVFjxAt6yDaIn8af1c5blIb4bPIM9LCe8MY5jnjTTBm23w8Qk"/>
                    </div>
                    <div class="p-4 flex-grow flex flex-col justify-between">
                        <div class="mb-3">
                            <h4 class="font-bold text-base text-on-surface mb-0.5">Beef Bratwurst</h4>
                            <p class="text-[12px] text-on-surface-variant">500gr • Premium Smoked</p>
                        </div>
                        <div class="flex items-center justify-between pt-1">
                            <span class="text-primary font-bold text-base">Rp 65.000</span>
                            <button class="w-8 h-8 rounded-full bg-primary/10 text-primary flex items-center justify-center hover:bg-primary hover:text-on-primary transition-colors active:scale-95">
                                <span class="material-symbols-outlined text-[18px]">add_shopping_cart</span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-12 bg-primary relative overflow-hidden">
        <div class="absolute inset-0 opacity-10">
            <div class="absolute inset-0" style="background-image: radial-gradient(circle at 2px 2px, white 1px, transparent 0); background-size: 32px 32px;"></div>
        </div>
        <div class="max-w-[1200px] mx-auto px-gutter-desktop relative z-10 text-center">
            <h2 class="font-bold text-headline-md lg:text-headline-lg text-on-primary mb-3">Mulai Bisnis Anda Bersama Ipi Frozen Food</h2>
            <p class="font-body-md text-sm text-on-primary/90 max-w-[580px] mx-auto mb-6 leading-relaxed">
                Dapatkan penghasilan tambahan dengan menjadi mitra reseller kami. Produk berkualitas, stok terjamin, dan dukungan pemasaran penuh untuk kesuksesan Anda.
            </p>
            <div class="flex flex-col sm:flex-row justify-center gap-3">
                <a href="#" class="bg-on-primary text-primary px-6 py-2.5 rounded-lg font-bold text-sm tracking-wide hover:bg-surface transition-all shadow-md text-center">
                    Daftar Mitra Sekarang
                </a>
                <a href="#" class="border border-on-primary text-on-primary px-6 py-2.5 rounded-lg font-bold text-sm tracking-wide hover:bg-white/10 transition-all text-center">
                    Pelajari Program
                </a>
            </div>
        </div>
    </section>

    <section class="py-12 bg-surface-container-low">
        <div class="max-w-[1200px] mx-auto px-gutter-desktop">
            <div class="text-center mb-10">
                <h2 class="font-bold text-headline-md lg:text-headline-lg mb-1 text-on-surface">Apa Kata Mereka?</h2>
                <p class="text-on-surface-variant text-sm">Kepercayaan pelanggan adalah prioritas utama kami.</p>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <div class="bg-surface p-5 rounded-xl border border-outline-variant shadow-[0_4px_12px_rgba(0,0,0,0.02)] flex flex-col justify-between">
                    <p class="italic text-on-surface-variant text-[13px] leading-relaxed mb-4">
                        "Produknya sangat membantu saya sebagai ibu rumah tangga yang sibuk. Kualitas dagingnya terasa sekali bedanya dengan merk lain."
                    </p>
                    <div class="border-t border-outline-variant/60 pt-3">
                        <p class="font-bold text-sm text-on-surface">Sari Rahayu</p>
                        <p class="text-[11px] text-on-surface-variant">Ibu Rumah Tangga</p>
                    </div>
                </div>

                <div class="bg-surface p-5 rounded-xl border border-outline-variant shadow-[0_4px_12px_rgba(0,0,0,0.02)] flex flex-col justify-between">
                    <p class="italic text-on-surface-variant text-[13px] leading-relaxed mb-4">
                        "Sebagai pemilik katering, Ipi Frozen Food adalah partner terbaik. Pengiriman selalu tepat waktu dan kualitas produk sangat konsisten."
                    </p>
                    <div class="border-t border-outline-variant/60 pt-3">
                        <p class="font-bold text-sm text-on-surface">Andi Pratama</p>
                        <p class="text-[11px] text-on-surface-variant">Owner Katering</p>
                    </div>
                </div>

                <div class="bg-surface p-5 rounded-xl border border-outline-variant shadow-[0_4px_12px_rgba(0,0,0,0.02)] flex flex-col justify-between">
                    <p class="italic text-on-surface-variant text-[13px] leading-relaxed mb-4">
                        "Anak-anak suka sekali nuggetnya. Saya tenang karena tahu produk ini tanpa pengawet dan diproses secara higienis."
                    </p>
                    <div class="border-t border-outline-variant/60 pt-3">
                        <p class="font-bold text-sm text-on-surface">Dewi Lestari</p>
                        <p class="text-[11px] text-on-surface-variant">Pelanggan Setia</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection