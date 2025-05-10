<header class="bg-blue-900">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <nav class="flex justify-between items-center h-16" aria-label="Main navigation">
            <!-- Site Title or Logo -->
            <div class="flex-shrink-0">
                <a href="/" class="text-xl font-bold text-green-300 hover:text-white">
                    Mika's place
                </a>
            </div>

            <!-- Main Navigation Links -->
            <x-navigation.bar type="hidden md:flex"/>

            <!-- Mobile Toggle Button -->
            <button id="mobile-menu-toggle" class="md:hidden text-green-300 hover:text-white focus:outline-none" aria-label="Toggle menu">
                <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                          d="M4 6h16M4 12h16M4 18h16"/>
                </svg>
            </button>
        </nav>
    </div>

    <!-- Mobile Navigation Menu -->
    <nav id="mobile-menu" class="md:hidden hidden px-4 pb-4" aria-label="Mobile navigation">
        <x-navigation.bar type="block"/>
    </nav>

    <script>
        document.getElementById('mobile-menu-toggle').addEventListener('click', function () {
            const menu = document.getElementById('mobile-menu');
            menu.classList.toggle('hidden');
        });
    </script>
</header>
