<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Developer Portfolio</title>
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- FontAwesome Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        brand: {
                            50: '#fff7ed',
                            100: '#ffedd5',
                            500: '#f97316',
                            600: '#ea580c',
                            700: '#c2410c',
                        }
                    }
                }
            }
        }
    </script>
</head>
<body class="bg-orange-50/30 text-gray-800 font-sans antialiased">

    <!-- Navigation Bar -->
    <nav class="fixed top-0 left-0 w-full bg-white/90 backdrop-blur-md border-b border-orange-100 z-50 shadow-sm">
        <div class="max-w-6xl mx-auto px-6 py-4 flex justify-between items-center">
            <a href="#" class="text-2xl font-black tracking-wide text-orange-600 flex items-center gap-2">
                <i class="fa-solid fa-code text-orange-500"></i><span class="text-gray-900">PORTFOLIO</span>
            </a>
            
            <!-- Navigation Buttons -->
            <div class="hidden md:flex items-center space-x-2">
                <a href="#about" class="px-4 py-2 text-sm font-semibold text-gray-700 hover:text-orange-600 hover:bg-orange-50 rounded-lg transition">
                    About
                </a>
                <a href="#skills" class="px-4 py-2 text-sm font-semibold text-gray-700 hover:text-orange-600 hover:bg-orange-50 rounded-lg transition">
                    Skills
                </a>
                <a href="#projects" class="px-4 py-2 text-sm font-semibold text-gray-700 hover:text-orange-600 hover:bg-orange-50 rounded-lg transition">
                    Projects
                </a>
                <a href="#contact" class="ml-2 px-5 py-2.5 text-sm font-semibold text-white bg-orange-600 hover:bg-orange-500 rounded-xl shadow-md shadow-orange-500/20 transition">
                    Contact Me
                </a>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="min-h-screen flex items-center justify-center pt-24 pb-12 px-6 bg-gradient-to-b from-white via-orange-50/40 to-white">
        <div class="text-center max-w-3xl">
            <span class="inline-block px-4 py-1.5 mb-6 text-xs font-bold uppercase tracking-widest text-orange-600 bg-orange-100/80 rounded-full border border-orange-200">
                Web Developer & Laravel Enthusiast
            </span>
            <h1 class="text-4xl sm:text-6xl font-extrabold text-gray-900 tracking-tight leading-tight mb-6">
                Building Modern Web Solutions with <span class="text-orange-600">Passion & Code</span>
            </h1>
            <p class="text-lg text-gray-600 mb-8 max-w-2xl mx-auto leading-relaxed">
                Welcome to my personal showcase! I specialize in developing responsive, database-driven, and high-performance applications using PHP, Laravel, and Tailwind CSS.
            </p>
            
            <div class="flex flex-wrap justify-center gap-4">
                <a href="#projects" class="px-7 py-3.5 bg-orange-600 hover:bg-orange-500 text-white font-bold rounded-xl shadow-lg shadow-orange-500/30 transition transform hover:-translate-y-0.5">
                    View My Projects
                </a>
                <a href="#contact" class="px-7 py-3.5 bg-white border-2 border-orange-600 text-orange-600 hover:bg-orange-50 font-bold rounded-xl shadow-sm transition transform hover:-translate-y-0.5">
                    Get In Touch
                </a>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section id="about" class="py-24 bg-white border-y border-orange-100">
        <div class="max-w-4xl mx-auto px-6">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-extrabold text-gray-900 mb-3">About Me</h2>
                <div class="w-16 h-1 bg-orange-500 mx-auto rounded-full"></div>
            </div>
            
            <div class="bg-orange-50/50 p-8 sm:p-10 rounded-3xl border border-orange-100 shadow-sm text-center">
                <p class="text-gray-700 text-lg leading-relaxed mb-6">
                    I am an aspiring web developer passionate about writing clean code and crafting functional user experiences. I love learning new web technologies and solving real-world problems through programming.
                </p>
                <p class="text-gray-600 leading-relaxed">
                    My core focus is backend architecture using **Laravel** and **PHP**, combined with clean and responsive frontend layouts.
                </p>
            </div>
        </div>
    </section>

    <!-- Skills Section -->
    <section id="skills" class="py-24 bg-orange-50/30">
        <div class="max-w-5xl mx-auto px-6">
            <div class="text-center mb-16">
                <h2 class="text-3xl font-extrabold text-gray-900 mb-3">Technical Skills</h2>
                <div class="w-16 h-1 bg-orange-500 mx-auto rounded-full"></div>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
                @foreach($skills as $skill)
                    <div class="p-6 bg-white border border-orange-100 rounded-2xl shadow-sm hover:shadow-md hover:border-orange-300 transition flex items-center gap-4">
                        <div class="w-12 h-12 bg-orange-100 text-orange-600 rounded-xl flex items-center justify-center text-2xl font-bold">
                            <i class="{{ $skill['icon'] }}"></i>
                        </div>
                        <div>
                            <h3 class="font-bold text-gray-900 text-lg">{{ $skill['name'] }}</h3>
                            <span class="text-xs font-medium text-orange-600 bg-orange-50 px-2.5 py-1 rounded-md border border-orange-200">
                                {{ $skill['level'] }}
                            </span>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Projects Section -->
    <section id="projects" class="py-24 bg-white border-t border-orange-100">
        <div class="max-w-6xl mx-auto px-6">
            <div class="text-center mb-16">
                <h2 class="text-3xl font-extrabold text-gray-900 mb-3">Featured Projects</h2>
                <div class="w-16 h-1 bg-orange-500 mx-auto rounded-full"></div>
            </div>

            <div class="grid md:grid-cols-3 gap-8">
                @foreach($projects as $project)
                    <div class="bg-white border border-orange-100 rounded-2xl overflow-hidden shadow-sm hover:shadow-lg hover:border-orange-300 transition flex flex-col justify-between">
                        <div class="p-6">
                            <h3 class="text-xl font-bold text-gray-900 mb-3">{{ $project['title'] }}</h3>
                            <p class="text-gray-600 text-sm mb-6 leading-relaxed">{{ $project['description'] }}</p>
                        </div>
                        <div class="px-6 pb-6">
                            <div class="flex flex-wrap gap-2 mb-4">
                                @foreach($project['tags'] as $tag)
                                    <span class="text-xs font-semibold bg-orange-100 text-orange-700 px-3 py-1 rounded-md">
                                        {{ $tag }}
                                    </span>
                                @endforeach
                            </div>
                            <a href="{{ $project['link'] }}" class="inline-flex items-center gap-2 text-sm font-bold text-orange-600 hover:text-orange-500 transition">
                                View Project <i class="fa-solid fa-arrow-right text-xs"></i>
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="py-24 bg-gradient-to-b from-orange-500 to-orange-600 text-white">
        <div class="max-w-3xl mx-auto px-6 text-center">
            <h2 class="text-3xl sm:text-4xl font-extrabold mb-4">Let's Work Together!</h2>
            <p class="text-orange-100 mb-8 text-lg">
                Have a project in mind or want to collaborate? Feel free to reach out anytime.
            </p>
            <a href="mailto:your.email@example.com" class="inline-flex items-center gap-3 bg-white text-orange-600 hover:bg-orange-50 font-bold text-lg px-8 py-4 rounded-2xl shadow-xl transition transform hover:-translate-y-1">
                <i class="fa-regular fa-envelope text-xl"></i> Send Me an Email
            </a>
        </div>
    </section>

    <!-- Footer -->
    <footer class="py-8 bg-gray-900 text-gray-400 text-center text-sm border-t border-gray-800">
        <p>&copy; {{ date('Y') }} Developer Portfolio. Powered by <span class="text-orange-500 font-semibold">Laravel v{{ app()->version() }}</span></p>
    </footer>

</body>
</html>