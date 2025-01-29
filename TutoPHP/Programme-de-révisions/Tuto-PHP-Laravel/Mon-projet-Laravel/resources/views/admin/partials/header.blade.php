<header class="bg-white dark:bg-gray-800 shadow p-4">
    <div class="flex items-center justify-between">
        <!-- Logo -->
        <div class="flex-shrink-0">
            <img src="{{ asset('path/to/logo.png') }}" alt="Logo" class="h-8">
        </div>

        <!-- Barre de recherche -->
        <div class="flex-grow mx-2">
            <input type="text" placeholder="Search..." class="w-full p-2 border border-gray-300 rounded"
                aria-label="Search">
        </div>

        <!-- Navbar -->
        <nav class="navbar">
            <ul class="flex space-x-4">
                <li><a href="{{ route('logout') }}" class="text-gray-800 hover:text-gray-600">Logout</a></li>
            </ul>
        </nav>
    </div>
</header>