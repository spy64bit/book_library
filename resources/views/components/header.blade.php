<nav class="bg-gray-800 text-white p-4">
    <div class="container mx-auto flex justify-between items-center">
        <!-- Logo -->
        <a href="{{ url('/') }}" class="text-xl font-bold">{{ config('app.name', 'Laravel') }}</a>

        <!-- Menu (hidden on mobile) -->
        <ul class="hidden md:flex space-x-4">
            <li><a href="#" class="hover:text-gray-300">Home</a></li>
            <li><a href="#" class="hover:text-gray-300">About</a></li>
            <li><a href="#" class="hover:text-gray-300">Contact</a></li>
            <li><a href="{{ route('login') }}" class="hover:text-gray-300">Login</a></li>
        </ul>

        <!-- Mobile toggle button -->
        <button id="navToggle" class="md:hidden">
            ☰
        </button>
    </div>

    <!-- Mobile Menu -->
    <ul id="mobileMenu" class="flex flex-col items-center space-y-2 mt-2 md:hidden px-4">
        <li><a href="#" class="hover:text-gray-300">Home</a></li>
        <li><a href="#" class="hover:text-gray-300">About</a></li>
        <li><a href="#" class="hover:text-gray-300">Contact</a></li>
        <li><a href="{{ route('login') }}" class="hover:text-gray-300">Login</a></li>
    </ul>

</nav>


<script>
    const toggleBtn = document.getElementById('navToggle');
    const mobileMenu = document.getElementById('mobileMenu');

    toggleBtn.addEventListener('click', () => {
        mobileMenu.classList.toggle('hidden');
    });
</script>
