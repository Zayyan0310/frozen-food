<nav class="fixed top-0 left-0 right-0 z-50 bg-surface dark:bg-on-background shadow-[0_8px_20px_rgba(151,0,12,0.05)] transition-all duration-300">
    <div class="flex justify-between items-center w-full max-w-[1200px] mx-auto px-gutter-desktop py-4">
        <div class="text-headline-md font-headline-md font-bold text-primary dark:text-primary-fixed">
            Ipi Frozen Food
        </div>

        <div class="hidden md:flex items-center gap-stack-lg">
            <a class="{{ request()->is('/') ? 'text-primary border-b-2 border-primary font-bold pb-1' : 'text-on-surface-variant dark:text-surface-variant font-medium hover:text-primary dark:hover:text-primary-fixed' }} transition-colors duration-200 font-label-lg text-label-lg" href="{{ url('/') }}">Home</a>
            <a class="{{ request()->is('products') ? 'text-primary border-b-2 border-primary font-bold pb-1' : 'text-on-surface-variant dark:text-surface-variant font-medium hover:text-primary dark:hover:text-primary-fixed' }} transition-colors duration-200 font-label-lg text-label-lg" href="{{ url('/products') }}">Products</a>
            <a class="{{ request()->is('about-us') ? 'text-primary border-b-2 border-primary font-bold pb-1' : 'text-on-surface-variant dark:text-surface-variant font-medium hover:text-primary dark:hover:text-primary-fixed' }} transition-colors duration-200 font-label-lg text-label-lg" href="{{ url('/about-us') }}">About Us</a>
            <a class="{{ request()->is('gallery') ? 'text-primary border-b-2 border-primary font-bold pb-1' : 'text-on-surface-variant dark:text-surface-variant font-medium hover:text-primary dark:hover:text-primary-fixed' }} transition-colors duration-200 font-label-lg text-label-lg" href="{{ url('/gallery') }}">Gallery</a>
            <a class="{{ request()->is('contact-us') ? 'text-primary border-b-2 border-primary font-bold pb-1' : 'text-on-surface-variant dark:text-surface-variant font-medium hover:text-primary dark:hover:text-primary-fixed' }} transition-colors duration-200 font-label-lg text-label-lg" href="{{ url('/contact-us') }}">Contact</a>
        </div>

        <div class="flex items-center gap-3">
            <button class="hidden lg:block text-primary dark:text-primary-fixed font-bold px-4 py-2 hover:opacity-80 transition-all font-label-lg text-label-lg">Reseller</button>
            <button class="hidden sm:block bg-primary text-on-primary px-6 py-2.5 rounded-lg font-bold hover:scale-95 transition-all shadow-md font-label-lg text-label-lg">Order Now</button>
            
            <button id="hamburger-btn" class="block md:hidden text-on-surface-variant dark:text-surface-variant p-1 focus:outline-none flex items-center">
                <span class="material-symbols-outlined text-[28px]" id="hamburger-icon">menu</span>
            </button>
        </div>
    </div>

    <div id="mobile-menu" class="hidden md:hidden bg-surface dark:bg-on-background border-t border-outline-variant/20 px-6 py-4 shadow-inner transition-all duration-300">
        <div class="flex flex-col gap-4">
            <a class="py-2 {{ request()->is('/') ? 'text-primary font-bold border-l-4 border-primary pl-3' : 'text-on-surface-variant dark:text-surface-variant font-medium' }} text-base transition-all" href="{{ url('/') }}">Home</a>
            <a class="py-2 {{ request()->is('products') ? 'text-primary font-bold border-l-4 border-primary pl-3' : 'text-on-surface-variant dark:text-surface-variant font-medium' }} text-base transition-all" href="{{ url('/products') }}">Products</a>
            <a class="py-2 {{ request()->is('about-us') ? 'text-primary font-bold border-l-4 border-primary pl-3' : 'text-on-surface-variant dark:text-surface-variant font-medium' }} text-base transition-all" href="{{ url('/about-us') }}">About Us</a>
            <a class="py-2 {{ request()->is('gallery') ? 'text-primary font-bold border-l-4 border-primary pl-3' : 'text-on-surface-variant dark:text-surface-variant font-medium' }} text-base transition-all" href="{{ url('/gallery') }}">Gallery</a>
            <a class="py-2 {{ request()->is('contact-us') ? 'text-primary font-bold border-l-4 border-primary pl-3' : 'text-on-surface-variant dark:text-surface-variant font-medium' }} text-base transition-all" href="{{ url('/contact-us') }}">Contact</a>
            
            <div class="flex flex-col gap-2 pt-2 border-t border-outline-variant/20 sm:hidden">
                <button class="w-full text-primary border border-primary font-bold py-2 rounded-lg text-sm">Reseller</button>
                <button class="w-full bg-primary text-on-primary font-bold py-2 rounded-lg text-sm shadow-md">Order Now</button>
            </div>
        </div>
    </div>
</nav>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const hamburgerBtn = document.getElementById('hamburger-btn');
        const mobileMenu = document.getElementById('mobile-menu');
        const hamburgerIcon = document.getElementById('hamburger-icon');

        hamburgerBtn.addEventListener('click', function() {
            mobileMenu.classList.toggle('hidden');
            
            if (mobileMenu.classList.contains('hidden')) {
                hamburgerIcon.textContent = 'menu';
            } else {
                hamburgerIcon.textContent = 'close';
            }
        });
    });
</script>