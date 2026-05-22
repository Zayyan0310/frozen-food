<nav class="fixed top-0 left-0 right-0 z-50 bg-surface dark:bg-on-background shadow-[0_8px_20px_rgba(151,0,12,0.05)] transition-all duration-300">
    <div class="flex justify-between items-center w-full max-w-[1200px] mx-auto px-gutter-desktop py-4">
        <div class="text-headline-md font-headline-md font-bold text-primary dark:text-primary-fixed">
            Ipi Frozen Food
        </div>
        <div class="hidden md:flex items-center gap-stack-lg">
            <a class="{{ request()->is('/') ? 'text-primary border-b-2 border-primary font-bold pb-1' : 'text-on-surface-variant dark:text-surface-variant font-medium hover:text-primary dark:hover:text-primary-fixed' }} transition-colors duration-200 font-label-lg text-label-lg" 
            href="{{ url('/') }}">
            Home
            </a>

            <a class="{{ request()->is('products') ? 'text-primary border-b-2 border-primary font-bold pb-1' : 'text-on-surface-variant dark:text-surface-variant font-medium hover:text-primary dark:hover:text-primary-fixed' }} transition-colors duration-200 font-label-lg text-label-lg" 
            href="{{ url('/products') }}">
            Products
            </a>

            <a class="{{ request()->is('about-us') ? 'text-primary border-b-2 border-primary font-bold pb-1' : 'text-on-surface-variant dark:text-surface-variant font-medium hover:text-primary dark:hover:text-primary-fixed' }} transition-colors duration-200 font-label-lg text-label-lg" 
            href="{{ url('/about-us') }}">
            About Us
            </a>
            <a class="text-on-surface-variant dark:text-surface-variant font-medium hover:text-primary dark:hover:text-primary-fixed transition-colors duration-200 font-label-lg text-label-lg" href="#">Gallery</a>
            <a class="text-on-surface-variant dark:text-surface-variant font-medium hover:text-primary dark:hover:text-primary-fixed transition-colors duration-200 font-label-lg text-label-lg" href="#">Contact</a>
        </div>
        <div class="flex items-center gap-4">
            <button class="hidden lg:block text-primary dark:text-primary-fixed font-bold px-4 py-2 hover:opacity-80 transition-all font-label-lg text-label-lg">Reseller</button>
            <button class="bg-primary text-on-primary px-6 py-2.5 rounded-lg font-bold hover:scale-95 transition-all shadow-md font-label-lg text-label-lg">Order Now</button>
        </div>
    </div>
</nav>