@extends('layouts.master')

@section('content')
<section class="max-w-[1200px] mx-auto px-gutter-desktop py-stack-lg">
    <div class="flex flex-col md:flex-row md:items-end justify-between gap-stack-md border-b border-outline-variant pb-stack-lg">
        <div>
            <h1 class="font-headline-lg text-headline-lg text-on-surface">Katalog Produk</h1>
            <p class="text-on-surface-variant font-body-md mt-2">Solusi pangan beku higienis dan berkualitas tinggi untuk keluarga Anda.</p>
        </div>
        <div class="relative w-full md:w-[320px]">
            <span class="material-symbols-outlined absolute left-3 top-1/2 -translate-y-1/2 text-on-surface-variant">search</span>
            <input class="w-full pl-10 pr-4 py-2 bg-surface-container rounded-lg border-none focus:ring-2 focus:ring-primary text-body-md font-body-md" placeholder="Cari produk favorit..." type="text"/>
        </div>
    </div>
</section>

<div class="max-w-[1200px] mx-auto px-gutter-desktop grid grid-cols-1 md:grid-cols-[240px_1fr] gap-gutter-desktop pb-stack-lg">
    <aside class="space-y-stack-lg">
        <div>
            <h3 class="font-label-lg text-label-lg uppercase tracking-wider text-on-surface-variant mb-stack-md">Kategori</h3>
            <ul class="space-y-2">
                <li><button class="category-btn w-full text-left px-4 py-2 rounded-lg bg-primary-fixed text-primary font-bold transition-all" onclick="filterCategory('All')">Semua Produk</button></li>
                <li><button class="category-btn w-full text-left px-4 py-2 rounded-lg hover:bg-surface-container-high transition-all" onclick="filterCategory('Daging')">Daging</button></li>
                <li><button class="category-btn w-full text-left px-4 py-2 rounded-lg hover:bg-surface-container-high transition-all" onclick="filterCategory('Sayuran')">Sayuran</button></li>
                <li><button class="category-btn w-full text-left px-4 py-2 rounded-lg hover:bg-surface-container-high transition-all" onclick="filterCategory('Snack')">Snack</button></li>
                <li><button class="category-btn w-full text-left px-4 py-2 rounded-lg hover:bg-surface-container-high transition-all" onclick="filterCategory('Food-to-Go')">Food-to-Go</button></li>
            </ul>
        </div>
        <div class="p-stack-md bg-secondary-container/20 rounded-xl border border-secondary/20">
            <span class="material-symbols-outlined text-secondary">verified</span>
            <h4 class="font-bold text-secondary mt-2">Jaminan Mutu</h4>
            <p class="text-label-sm text-on-secondary-container mt-1">Seluruh produk bersertifikasi HALAL & BPOM, dijaga pada suhu -18°C.</p>
        </div>
    </aside>

    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-gutter-desktop" id="product-grid">
        @foreach($products as $product)
        <div class="product-card bg-surface-container-lowest rounded-xl overflow-hidden product-card-shadow transition-all group" data-category="{{ $product['category'] }}">
            <div class="relative h-48 overflow-hidden">
                <img alt="{{ $product['name'] }}" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110" src="{{ $product['image'] }}"/>
                @if($product['is_popular'])
                    <span class="absolute top-3 left-3 bg-secondary text-on-secondary px-3 py-1 rounded-full text-label-sm font-bold shadow-md">Populer</span>
                @endif
            </div>
            <div class="p-stack-md">
                <div class="flex justify-between items-start mb-1">
                    <h3 class="font-headline-md text-on-surface leading-tight">{{ $product['name'] }}</h3>
                    <span class="text-primary font-bold text-body-lg">Rp {{ number_format($product['price'], 0, ',', '.') }}</span>
                </div>
                <p class="text-on-surface-variant text-label-sm mb-stack-md line-clamp-2">{{ $product['description'] }}</p>
                <div class="flex items-center gap-2 mb-stack-md">
                    <div class="bg-surface-container px-2 py-1 rounded text-[10px] font-bold text-on-surface-variant">{{ $product['weight'] }}</div>
                    <div class="bg-surface-container px-2 py-1 rounded text-[10px] font-bold text-secondary">HALAL</div>
                </div>
                <button class="w-full py-3 bg-primary text-on-primary rounded-lg font-bold hover:bg-primary-container transition-all flex items-center justify-center gap-2" 
                    onclick="showDetail('{{ $product['name'] }}', '{{ $product['description'] }}', '{{ $product['weight'] }}', '{{ $product['serving_suggestion'] }}', '{{ $product['image'] }}')">
                    <span class="material-symbols-outlined text-[18px]">shopping_cart</span>
                    Pesan via WhatsApp
                </button>
            </div>
        </div>
        @endforeach
    </div>
</div>

<div class="fixed inset-0 z-[60] bg-on-background/60 backdrop-blur-sm flex items-center justify-center p-4 opacity-0 pointer-events-none transition-all duration-300" id="product-modal">
    <div class="bg-surface max-w-4xl w-full rounded-2xl overflow-hidden shadow-2xl flex flex-col md:flex-row relative">
        <button class="absolute top-4 right-4 z-10 bg-surface/80 rounded-full p-2 hover:bg-white transition-all shadow-md" onclick="closeModal()">
            <span class="material-symbols-outlined">close</span>
        </button>
        <div class="md:w-1/2 h-[300px] md:h-auto">
            <img alt="Product detailed view" class="w-full h-full object-cover" id="modal-img" src=""/>
        </div>
        <div class="md:w-1/2 p-stack-lg flex flex-col justify-between">
            <div>
                <div class="flex items-center gap-2 mb-2">
                    <span class="bg-primary-fixed text-primary px-3 py-1 rounded-full text-[10px] font-bold uppercase tracking-wider">High Quality</span>
                    <span class="bg-surface-container px-3 py-1 rounded-full text-[10px] font-bold text-on-surface-variant" id="modal-weight"></span>
                </div>
                <h2 class="font-headline-lg text-headline-lg text-on-surface mb-4" id="modal-title"></h2>
                <p class="text-body-md text-on-surface-variant mb-stack-lg" id="modal-desc"></p>
                <div class="space-y-stack-md">
                    <div class="p-stack-md bg-surface-container rounded-xl">
                        <h4 class="font-bold flex items-center gap-2 mb-1">
                            <span class="material-symbols-outlined text-primary">restaurant_menu</span>
                            Saran Penyajian
                        </h4>
                        <p class="text-label-lg text-on-surface-variant" id="modal-serving"></p>
                    </div>
                </div>
            </div>
            <div class="mt-stack-lg pt-stack-lg border-t border-outline-variant">
                <div class="flex items-center justify-between mb-4">
                    <span class="text-on-surface-variant font-medium">Harga Estimasi</span>
                    <span class="text-primary font-bold text-headline-md">Hubungi Kami</span>
                </div>
                <button class="w-full py-4 bg-secondary text-on-secondary rounded-xl font-bold hover:bg-on-secondary-container transition-all flex items-center justify-center gap-3 text-body-lg shadow-lg shadow-secondary/20">
                    <span class="material-symbols-outlined">chat</span>
                    Pesan Sekarang via WhatsApp
                </button>
            </div>
        </div>
    </div>
</div>

<script>
    function filterCategory(category) {
        const buttons = document.querySelectorAll('.category-btn');
        const cards = document.querySelectorAll('.product-card');
        
        buttons.forEach(btn => {
            if(btn.textContent.includes(category) || (category === 'All' && btn.textContent.includes('Semua'))) {
                btn.classList.add('bg-primary-fixed', 'text-primary', 'font-bold');
                btn.classList.remove('hover:bg-surface-container-high');
            } else {
                btn.classList.remove('bg-primary-fixed', 'text-primary', 'font-bold');
                btn.classList.add('hover:bg-surface-container-high');
            }
        });

        cards.forEach(card => {
            if (category === 'All' || card.getAttribute('data-category') === category) {
                card.style.display = 'block';
                setTimeout(() => card.style.opacity = '1', 10);
            } else {
                card.style.opacity = '0';
                setTimeout(() => card.style.display = 'none', 300);
            }
        });
    }

    function showDetail(title, desc, weight, serving, img) {
        const modal = document.getElementById('product-modal');
        document.getElementById('modal-title').textContent = title;
        document.getElementById('modal-desc').textContent = desc;
        document.getElementById('modal-weight').textContent = weight;
        document.getElementById('modal-serving').textContent = serving;
        document.getElementById('modal-img').src = img;
        
        modal.classList.remove('pointer-events-none', 'opacity-0');
        modal.classList.add('opacity-100');
        document.body.style.overflow = 'hidden';
    }

    function closeModal() {
        const modal = document.getElementById('product-modal');
        modal.classList.add('opacity-0');
        setTimeout(() => {
            modal.classList.add('pointer-events-none');
            document.body.style.overflow = 'auto';
        }, 300);
    }

    document.getElementById('product-modal').addEventListener('click', (e) => {
        if (e.target === document.getElementById('product-modal')) closeModal();
    });
</script>
@endsection