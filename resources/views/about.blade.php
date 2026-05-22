@extends('layouts.master')

@section('content')
<section class="relative h-[260px] md:h-[300px] flex items-center overflow-hidden bg-surface">
    <div class="absolute inset-0 z-0">
        <img class="w-full h-full object-cover" src="https://lh3.googleusercontent.com/aida-public/AB6AXuAlo-mw1AywyoZ85CQP2ZDLWQI6As6OzLPwNoIHP2hmkVHVQYSsotU9Y-mvcno2Wv_AgnnpXpqn3GrZLVqPGEFFcMX1xLVHwaYFBVWzAIfvXEyafNKo-kvyNo2MmzKum59bPfj8G_mHYRaGEe80FdT_91lnnlFiNRfiIFLigtm2oUO50GIHd60dhuTQfr-oLjNeCbAPmbO1SW5w34CFidUD3W_b4EISwOWNjV_pMdb_mNY9ey_6OsDE1UKMc6fiEwAWuqKZAjBFYjld" alt="Professional Kitchen Interior"/>
        <div class="absolute inset-0 bg-gradient-to-r from-on-background/85 via-on-background/60 to-transparent"></div>
    </div>
    <div class="w-full max-w-[1200px] mx-auto px-gutter-desktop relative z-10">
        <div class="max-w-xl">
            <h1 class="font-bold text-headline-lg lg:text-display-lg text-white mb-2 leading-tight">
                Menjaga Kualitas,<br/>Merawat Kesegaran.
            </h1>
            <p class="text-xs md:text-sm text-white/90 leading-relaxed max-w-[500px]">
                Ipi Frozen Food berkomitmen menjadi standar emas dalam penyediaan solusi pangan higienis, menyajikan produk beku bermutu tinggi tanpa mengorbankan rasa dan kesehatan keluarga.
            </p>
        </div>
    </div>
</section>

<section class="py-12 w-full max-w-[1200px] mx-auto px-gutter-desktop">
    <div class="grid grid-cols-1 md:grid-cols-2 gap-8 items-center">
        <div class="space-y-3">
            <span class="text-primary font-bold uppercase tracking-wider text-xs block">Our Journey</span>
            <h2 class="font-bold text-headline-md lg:text-headline-lg text-on-surface">Sejarah Ipi Frozen Food</h2>
            <div class="space-y-3 text-[13px] md:text-sm text-on-surface-variant leading-relaxed">
                <p>Didorong oleh semangat untuk menyediakan solusi hidangan yang praktis dan bernutrisi, Ipi Frozen Food bermula dari usaha keluarga kecil dengan satu visi: menjembatani kebutuhan gaya hidup modern yang sibuk dengan pola makan sehat.</p>
                <p>Seiring berjalannya waktu, kami tumbuh menjadi penyedia pangan beku higienis terpercaya, memanfaatkan teknologi *blast-freezing* mutakhir yang mengunci nutrisi dan rasa alami pada suhu -18°C tanpa tambahan pengawet buatan.</p>
            </div>
        </div>
        <div class="relative max-w-[440px] justify-self-center md:justify-self-end w-full">
            <div class="rounded-xl overflow-hidden shadow-md border border-outline-variant/50">
                <img class="w-full h-[260px] object-cover" src="https://lh3.googleusercontent.com/aida-public/AB6AXuAET2rGGsPXFFXsh5QKDYoNsLS-LJhvjuv39WF09138JFIkQBXCBbDaCKrmmuCAJTQH6ciShvYsOh9c8rh8Tg0DBf2XPKTU22rElbcC8wLgNjcyt1zwcEyyOds_8E3d1zfd5F3sRLzBOYOBsvgzBgvOt5Pgf2l_rGWbhOYS9fTEPrhS16gE1WEt8IXzU-6m1HcfpzCZ9tYc-dQGboGk_u1jj5MucoBsgbuao597G7RDXPEHhm_joZdHdwAgfWkHW7a-wEJJ6M_E9VPo" alt="Processing Ingredients Facility"/>
            </div>
            <div class="absolute -bottom-4 -left-4 bg-primary px-4 py-2.5 rounded-lg text-white hidden md:block shadow-md">
                <div class="text-xl font-bold leading-none">15+</div>
                <div class="text-[10px] uppercase tracking-widest opacity-80 mt-0.5">Years of Excellence</div>
            </div>
        </div>
    </div>
</section>

<section class="bg-surface-container py-12">
    <div class="w-full max-w-[1200px] mx-auto px-gutter-desktop">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            <div class="md:col-span-2 bg-white p-6 md:p-8 rounded-xl hygienic-shadow flex flex-col justify-center border border-outline-variant/40">
                <span class="text-secondary font-bold uppercase text-xs mb-2 flex items-center gap-2">
                    <span class="material-symbols-outlined text-[18px]" style="font-variation-settings: 'FILL' 1;">visibility</span>
                    Visi Perusahaan
                </span>
                <h3 class="font-medium text-sm md:text-base text-on-surface italic leading-relaxed">
                    "Menjadi penyedia utama solusi pangan beku yang higienis dan berkualitas tinggi di seluruh penjuru negeri, memberdayakan setiap keluarga untuk menikmati hidangan sehat setiap hari."
                </h3>
            </div>
            <div class="bg-primary p-6 rounded-xl text-white flex flex-col justify-between min-h-[150px]">
                <span class="material-symbols-outlined text-3xl" style="font-variation-settings: 'FILL' 1;">rocket_launch</span>
                <div class="mt-2">
                    <h4 class="font-bold text-base mb-1">Misi Kami</h4>
                    <p class="text-xs opacity-90 leading-relaxed">Merevolusi industri pangan beku melalui inovasi teknologi pembekuan alami, integritas rasa, dan kebersihan mutlak.</p>
                </div>
            </div>
            <div class="bg-white p-4 rounded-xl hygienic-shadow border border-outline-variant/40 flex items-start gap-3">
                <div class="bg-secondary/10 p-2 rounded-full text-secondary flex-shrink-0">
                    <span class="material-symbols-outlined text-[18px]">health_and_safety</span>
                </div>
                <div>
                    <h5 class="font-bold text-xs md:text-sm text-on-surface mb-0.5">Nutrition First</h5>
                    <p class="text-on-surface-variant text-xs leading-relaxed">Memastikan setiap produk mempertahankan nilai gizi dan kesegaran sayur serta daging secara maksimal.</p>
                </div>
            </div>
            <div class="bg-white p-4 rounded-xl hygienic-shadow border border-outline-variant/40 flex items-start gap-3">
                <div class="bg-secondary/10 p-2 rounded-full text-secondary flex-shrink-0">
                    <span class="material-symbols-outlined text-[18px]">verified</span>
                </div>
                <div>
                    <h5 class="font-bold text-xs md:text-sm text-on-surface mb-0.5">Total Compliance</h5>
                    <p class="text-on-surface-variant text-xs leading-relaxed">Konsisten menerapkan standardisasi mutu tinggi serta pemenuhan sertifikasi HALAL & BPOM RI.</p>
                </div>
            </div>
            <div class="bg-white p-4 rounded-xl hygienic-shadow border border-outline-variant/40 flex items-start gap-3">
                <div class="bg-secondary/10 p-2 rounded-full text-secondary flex-shrink-0">
                    <span class="material-symbols-outlined text-[18px]">groups</span>
                </div>
                <div>
                    <h5 class="font-bold text-xs md:text-sm text-on-surface mb-0.5">Community Support</h5>
                    <p class="text-on-surface-variant text-xs leading-relaxed">Mendukung pertumbuhan ekonomi lokal dengan memberdayakan mitra jaringan reseller nasional.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="py-12 w-full max-w-[1200px] mx-auto px-gutter-desktop">
    <div class="text-center max-w-xl mx-auto mb-8">
        <h2 class="font-bold text-headline-md lg:text-headline-lg">Sertifikasi & Alur Proses</h2>
        <p class="text-xs md:text-sm text-on-surface-variant mt-1">Pabrik kami dioperasikan dengan kepatuhan protokol sanitasi ketat. Setiap tahapan mulai dari hulu hingga pengiriman dipantau demi keamanan pangan konsumen.</p>
    </div>
    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
        <div class="flex items-start gap-4 bg-white p-5 rounded-xl hygienic-shadow border-l-4 border-secondary border border-outline-variant/30">
            <div class="w-12 h-12 flex-shrink-0 flex items-center justify-center bg-secondary/5 rounded-full text-secondary">
                <span class="material-symbols-outlined text-2xl" style="font-variation-settings: 'FILL' 1;">workspace_premium</span>
            </div>
            <div>
                <h4 class="font-bold text-sm md:text-base text-on-surface">Sertifikasi HALAL Resmi</h4>
                <p class="text-on-surface-variant text-xs mt-1 leading-relaxed">Jaminan kepatuhan penuh aspek kehalalan oleh otoritas resmi. Lini produksi kami dipastikan bersih dari kontaminasi non-halal sesuai syariat.</p>
            </div>
        </div>
        <div class="flex items-start gap-4 bg-white p-5 rounded-xl hygienic-shadow border-l-4 border-secondary border border-outline-variant/30">
            <div class="w-12 h-12 flex-shrink-0 flex items-center justify-center bg-secondary/5 rounded-full text-secondary">
                <span class="material-symbols-outlined text-2xl" style="font-variation-settings: 'FILL' 1;">approval</span>
            </div>
            <div>
                <h4 class="font-bold text-sm md:text-base text-on-surface">Terdaftar BPOM RI</h4>
                <p class="text-on-surface-variant text-xs mt-1 leading-relaxed">Telah lolos uji klinis kelayakan konsumsi dari Badan Pengawas Obat dan Makanan untuk pemastian mutu produk pangan yang aman bagi masyarakat.</p>
            </div>
        </div>
    </div>

    <div class="mt-8 grid grid-cols-2 md:grid-cols-4 gap-4">
        <div class="text-center p-4 bg-surface-container-low rounded-lg border border-outline-variant/20">
            <div class="text-primary font-bold text-2xl mb-1 opacity-20">01</div>
            <h5 class="font-bold text-xs md:text-sm text-on-surface">Premium Sourcing</h5>
            <p class="text-[11px] text-on-surface-variant mt-1 leading-tight">Hanya memilih bahan mentah segar grade tertinggi.</p>
        </div>
        <div class="text-center p-4 bg-surface-container-low rounded-lg border border-outline-variant/20">
            <div class="text-primary font-bold text-2xl mb-1 opacity-20">02</div>
            <h5 class="font-bold text-xs md:text-sm text-on-surface">Clean Processing</h5>
            <p class="text-[11px] text-on-surface-variant mt-1 leading-tight">Lini manufaktur otomatis yang disterilisasi berkala.</p>
        </div>
        <div class="text-center p-4 bg-surface-container-low rounded-lg border border-outline-variant/20">
            <div class="text-primary font-bold text-2xl mb-1 opacity-20">03</div>
            <h5 class="font-bold text-xs md:text-sm text-on-surface">Blast Freezing</h5>
            <p class="text-[11px] text-on-surface-variant mt-1 leading-tight">Mengunci nutrisi alami seketika pada suhu pembekuan -18°C.</p>
        </div>
        <div class="text-center p-4 bg-surface-container-low rounded-lg border border-outline-variant/20">
            <div class="text-primary font-bold text-2xl mb-1 opacity-20">04</div>
            <h5 class="font-bold text-xs md:text-sm text-on-surface">Sealed Logistics</h5>
            <p class="text-[11px] text-on-surface-variant mt-1 leading-tight">Distribusi rantai dingin tertutup guna menjaga integritas fisik produk.</p>
        </div>
    </div>
</section>

<section class="py-12 w-full max-w-[1200px] mx-auto px-gutter-desktop">
    <div class="flex flex-col md:flex-row justify-between items-start md:items-center mb-6 gap-2">
        <div>
            <h2 class="font-bold text-headline-md lg:text-headline-lg">Fasilitas Produksi Kami</h2>
            <p class="text-xs md:text-sm text-on-surface-variant mt-0.5">Melihat lebih dekat tingkat presisi dan higienitas di dalam area manufaktur Ipi Frozen Food.</p>
        </div>
    </div>
    <div class="grid grid-cols-2 md:grid-cols-4 gap-3">
        <div class="col-span-2 row-span-2 rounded-xl overflow-hidden shadow-md h-[240px] md:h-[300px]">
            <img class="w-full h-full object-cover hover:scale-103 transition-transform duration-500" src="https://lh3.googleusercontent.com/aida-public/AB6AXuCxKhBxpy9KV9D0ZsNPiAKS20g7If12cQuPs6cgShpLL1FlkJYlTMngBCRTkV0JEUnErgAyhqrJVP77EBQwrWaRNAl1Oh9gRoFSrPk0HQDta1-zOFtdCDlUyCbgHKFhbSNU8ievWXTsSXk2DZqDfc3VmARHU-OjIQ5lgEyEk5EUscdACMEAwloXHTlFpf1uPCdHHhiz9x1b3v1oH8wbVCAC6gIdSCu56xLfo9A5_ChWiJY0e06Bo_byk6ugRO6vMdhB_goByC2MW4PX" alt="Culinary Test Kitchen Room"/>
        </div>
        <div class="rounded-xl overflow-hidden shadow-md h-[115px] md:h-[144px]">
            <img class="w-full h-full object-cover hover:scale-103 transition-transform duration-500" src="https://lh3.googleusercontent.com/aida-public/AB6AXuAT948S2aNp4yQymKdhZdV26dt3Ny6W9e4kiQWRMdm32gTF16X-z0Oed7xrOIebjJ-KsSZ0f394EFu7MBxIqurZTC3smJxuksbSnMxHaTfVAsQThVGdHr9dF_0lnEUF5avVtx6j7mQMki1h0sfHNONSnId7Zdj2xZag0hBzeoVoaIFT5vgtuB0r-Inb_xb5MFd0wlOk7SJ8OITz9_Vhsg_Q7HhBRxdcwFxEqQ6VwPf-usZRdEUnrfkJg8dKcrSaPOGMVm6j7ZXrLXrh" alt="Fresh Frozen Vegetables Close Up"/>
        </div>
        <div class="rounded-xl overflow-hidden shadow-md h-[115px] md:h-[144px]">
            <img class="w-full h-full object-cover hover:scale-103 transition-transform duration-500" src="https://lh3.googleusercontent.com/aida-public/AB6AXuDbhGawlly5_enDgJJtWDdl3-MBrIrlDZWtoi8so8YRYagFgIzcyi32K1RgpyBBUCLF93n_w6QAUxhfTOzVGdk42bX6yrn7KmAFNMHPV6V4D57lm0CpVJkeTZ5rXAB-O3bUtgcdf-KOxCRhyftKOdONsYm4NTapzrBaLsnFM6WYKoDW_z1c-Yx1wN280V1Y1xoTw-7Hx6Bk_uzQhPDdkqqx0ZYL6_-DEII-RTtQsVDZHKWcOtX5jNy-5QJdPYijFhPrlQud0fD6DkFb" alt="Automated Factory Packaging System"/>
        </div>
        <div class="col-span-2 h-[115px] md:h-[144px] rounded-xl overflow-hidden shadow-md">
            <img class="w-full h-full object-cover hover:scale-103 transition-transform duration-500" src="https://lh3.googleusercontent.com/aida-public/AB6AXuCjq4nVXFtCtoe7HqbiE3AUc5X-HpfJapJsZZA8l-PQ8L34aBOsxLQl_l0LIxd3FNHsuPNXO64aqiYGI92xUjOC9D0HtUxQMQFWjEpF8iBdI57THpcr4BspL1ObFB4zepfSaGENH0t4MFiG0c3EIB9EKiu9JKW5JxVp98UCRRR69iupfJYqDCqhFOhyo2qFNPyLDK9mHMlB7Z_8ZVRqwfCRMAQpFNg3KibOyN38mr4B3QWidBxDVdBftKEPTF5Vug3D9U5XinVb7_bb" alt="Cold Chain Warehouse Operations"/>
        </div>
    </div>
</section>

<section class="pb-12 w-full max-w-[1200px] mx-auto px-gutter-desktop">
    <div class="bg-primary-container rounded-2xl p-8 text-white relative overflow-hidden shadow-md">
        <div class="absolute top-0 right-0 w-48 h-48 bg-white/5 rounded-full -mr-24 -mt-24"></div>
        <div class="relative z-10 text-center max-w-xl mx-auto">
            <h2 class="font-bold text-headline-md text-white mb-2">Bermitra Bersama Pemimpin Pasar Pangan Beku</h2>
            <p class="text-xs md:text-sm text-white/85 mb-5 leading-relaxed">Bergabunglah dalam jaringan kemitraan reseller resmi kami atau hubungi perwakilan penjualan korporat untuk solusi pasokan bisnis berskala besar (B2B).</p>
            <div class="flex flex-col sm:flex-row justify-center gap-3">
                <a href="#" class="bg-white text-primary font-bold px-5 py-2.5 rounded-lg text-sm hover:bg-opacity-95 transition-all text-center shadow-sm">Gabung Reseller</a>
                <a href="#" class="border border-white text-white font-bold px-5 py-2.5 rounded-lg text-sm hover:bg-white/10 transition-all text-center">Hubungi Sales</a>
            </div>
        </div>
    </div>
</section>
@endsection