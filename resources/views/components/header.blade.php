@php
    $adminMenus = [['name' => 'My Books', 'url' => route('admin.books.index')]];
    $userMenus = [['name' => 'My Collection', 'url' => route('collection.index')]];
    $publicMenus = [['name' => 'Books', 'url' => route('books.index')]];
@endphp

<nav class="bg-gray-800 text-white p-4">
    <div class="container mx-auto flex justify-between items-center">
        <!-- Logo -->
        <a href="{{ url('/') }}" class="text-xl font-bold">{{ config('app.name', 'Laravel') }}</a>

        <!-- Menu (hidden on mobile) -->
        <ul class="hidden md:flex space-x-4">

            @foreach ($publicMenus as $menu)
                <li><a href="{{ $menu['url'] }}" class="hover:text-gray-300">{{ $menu['name'] }}</a></li>
            @endforeach

            @if (auth()->check() && auth()->user()->role_id === 2)
                @foreach ($userMenus as $menu)
                    <li><a href="{{ $menu['url'] }}" class="hover:text-gray-300">{{ $menu['name'] }}</a></li>
                @endforeach
            @endif

            @if (auth()->check() && auth()->user()->role_id === 1)
                @foreach ($adminMenus as $menu)
                    <li><a href="{{ $menu['url'] }}" class="hover:text-gray-300">{{ $menu['name'] }}</a></li>
                @endforeach
            @endif

            @guest
                <li><a href="{{ route('login') }}" class="hover:text-gray-300">Login</a></li>
            @endguest

            @auth
                <li class="font-bold">{{ Auth::user()->name }}</li>
                <li>
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button type="submit" class="hover:text-gray-300">Logout</button>
                    </form>
                </li>
            @endauth
        </ul>

        <!-- Mobile toggle button -->
        <button id="navToggle" class="md:hidden">
            ☰
        </button>
    </div>

    <!-- Mobile Menu -->
    <ul id="mobileMenu" class="hidden md:hidden flex-col items-center space-y-2 mt-2 px-4">

        @foreach ($publicMenus as $menu)
            <li><a href="{{ $menu['url'] }}" class="hover:text-gray-300">{{ $menu['name'] }}</a></li>
        @endforeach

        @if (auth()->check() && auth()->user()->role_id === 2)
            @foreach ($userMenus as $menu)
                <li><a href="{{ $menu['url'] }}" class="hover:text-gray-300">{{ $menu['name'] }}</a></li>
            @endforeach
        @endif

        @if (auth()->check() && auth()->user()->role_id === 1)
            @foreach ($adminMenus as $menu)
                <li><a href="{{ $menu['url'] }}" class="hover:text-gray-300">{{ $menu['name'] }}</a></li>
            @endforeach
        @endif

        @guest
            <li><a href="{{ route('login') }}" class="hover:text-gray-300">Login</a></li>
        @endguest

        @auth
            <li class="font-bold">{{ Auth::user()->name }}</li>
            <li>
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit" class="hover:text-gray-300">Logout</button>
                </form>
            </li>
        @endauth
    </ul>

</nav>


<script>
    const toggleBtn = document.getElementById('navToggle');
    const mobileMenu = document.getElementById('mobileMenu');

    toggleBtn.addEventListener('click', () => {
        if (mobileMenu.classList.contains('hidden')) {
            mobileMenu.classList.remove('hidden');
            mobileMenu.classList.add('flex');
        } else {
            mobileMenu.classList.add('hidden');
            mobileMenu.classList.remove('flex');
        }
    });
</script>
