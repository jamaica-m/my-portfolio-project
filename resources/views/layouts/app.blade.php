<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'My Portfolio')</title>
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- FontAwesome Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
</head>
<body class="bg-orange-50/30 text-gray-800 font-sans flex flex-col min-h-screen">

    <!-- Navigation Bar -->
    <nav class="bg-white border-b border-orange-100 shadow-sm sticky top-0 z-50">
        <div class="max-w-6xl mx-auto px-6 py-4 flex justify-between items-center">
            <a href="{{ route('home') }}" class="text-2xl font-black text-orange-600 tracking-wide flex items-center gap-2">
                <i class="fa-solid fa-code"></i><span class="text-gray-900">PORTFOLIO</span>
            </a>
            
            <div class="flex items-center space-x-2">
                <a href="{{ route('home') }}" 
                   class="px-4 py-2 text-sm font-semibold rounded-lg transition {{ request()->routeIs('home') ? 'bg-orange-600 text-white' : 'text-gray-700 hover:text-orange-600 hover:bg-orange-50' }}">
                    Home
                </a>
                <a href="{{ route('about') }}" 
                   class="px-4 py-2 text-sm font-semibold rounded-lg transition {{ request()->routeIs('about') ? 'bg-orange-600 text-white' : 'text-gray-700 hover:text-orange-600 hover:bg-orange-50' }}">
                    About
                </a>
                <a href="{{ route('skills') }}" 
                   class="px-4 py-2 text-sm font-semibold rounded-lg transition {{ request()->routeIs('skills') ? 'bg-orange-600 text-white' : 'text-gray-700 hover:text-orange-600 hover:bg-orange-50' }}">
                    Skills
                </a>
                <a href="{{ route('projects') }}" 
                   class="px-4 py-2 text-sm font-semibold rounded-lg transition {{ request()->routeIs('projects') ? 'bg-orange-600 text-white' : 'text-gray-700 hover:text-orange-600 hover:bg-orange-50' }}">
                    Projects
                </a>
                <a href="{{ route('contact') }}" 
                   class="ml-2 px-5 py-2.5 text-sm font-semibold rounded-xl transition shadow-md shadow-orange-500/20 {{ request()->routeIs('contact') ? 'bg-gray-900 text-white' : 'bg-orange-600 text-white hover:bg-orange-500' }}">
                    Contact
                </a>
            </div>
        </div>
    </nav>

    <!-- Page Content -->
    <main class="flex-grow">
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="bg-gray-900 text-gray-400 py-6 text-center text-sm border-t border-gray-800">
        <p>&copy; {{ date('Y') }} JAMAICA JOY Portfolio. Powered by <span class="text-orange-500 font-semibold">Laravel</span></p>
    </footer>

</body>
</html>