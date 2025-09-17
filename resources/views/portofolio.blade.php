<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Albert Sumedha KT Portfolio</title>
    @vite('resources/css/app.css') <!-- Tailwind CSS compiled -->
    <style>
        html {
            scroll-behavior: smooth;
            /* aktifkan smooth scroll */
        }
    </style>
    <link rel="shortcut icon" href="image/favicon.png" type="image/x-icon">
</head>

<body class="bg-gray-900 text-gray-300 font-sans">

    <!-- Navbar -->
    <nav class="fixed w-full bg-gray-800/90 backdrop-blur-sm z-50 border-b border-gray-700">
        <div class="max-w-6xl mx-auto px-6 py-4 flex justify-between items-center">
            <div
                class="text-2xl font-bold bg-gradient-to-r from-indigo-500 to-purple-600 bg-clip-text text-transparent">
                Portfolio
            </div>

            <div class="hidden md:flex space-x-8">
                @foreach (['Home', 'Skills', 'Projects', 'About', 'Contact'] as $item)
                    <a href="#{{ strtolower($item) }}"
                        class="nav-link text-gray-300 hover:text-indigo-400 transition-colors">{{ $item }}</a>
                @endforeach
            </div>

            <!-- Tombol Download CV -->
            <a href="{{ asset('file/cv.pdf') }}"
                class="bg-indigo-500 text-white px-6 py-2 rounded-lg hover:bg-purple-600 transition-colors"
                target="_blank" {{-- buka di tab baru --}} download> {{-- otomatis mendownload --}}
                Download CV
            </a>
        </div>
    </nav>


    <!-- Hero Section -->
    <section id="home" class="pt-32 pb-20 px-6 bg-gray-900">
        <div class="max-w-6xl mx-auto text-center">
            <div class="mb-8">
                <div class="w-32 h-32 mx-auto mb-6 rounded-full bg-gradient-to-r from-indigo-500 to-purple-600 p-1">
                    <!-- Ganti link gambar -->
                    <img src="{{ asset('image/pps.png') }}" alt="Alex Johnson"
                        class="w-full h-full rounded-full object-cover" />
                </div>
                <h1 class="text-4xl md:text-6xl font-bold mb-4">
                    Hi, I'm <span id="typed-name"
                        class="bg-gradient-to-r from-indigo-500 to-purple-600 bg-clip-text text-transparent"></span>
                </h1>
                <p class="text-xl text-gray-300 max-w-2xl mx-auto">
                    Undergraduate student at Binus University, Faculty of Information Systems (Business Analytics),
                    skilled in Excel, Java, JavaFX, and database management,
                    passionate about building efficient and interactive applications.
                </p>
            </div>
        </div>
    </section>

    <div class="flex flex-col sm:flex-row gap-4 justify-center">
        <!-- Scroll ke Projects -->
        <a href="#projects"
            class="nav-link bg-indigo-600 text-white px-8 py-3 rounded-lg font-semibold flex items-center justify-center gap-2 hover:bg-indigo-700 transition-colors">
            View My Work
        </a>

        <!-- Scroll ke Contact -->
        <a href="#contact"
            class="nav-link border-2 border-gray-600 text-gray-300 px-8 py-3 rounded-lg font-semibold hover:border-indigo-500 hover:text-indigo-400 transition-colors">
            Contact Me
        </a>
    </div>
    </div>
    </section>


    {{-- resources/views/skills.blade.php --}}
    @php
        $skills = [
            ['name' => 'Excel', 'level' => 90, 'logo' => 'excel.jpeg'],
            ['name' => 'Java', 'level' => 85, 'logo' => 'java.png'],
            ['name' => 'JavaFX', 'level' => 92, 'logo' => 'javafx.jpeg'],
            ['name' => 'MySQL', 'level' => 96, 'logo' => 'mysql.jpeg'],
            ['name' => 'MongoDB', 'level' => 90, 'logo' => 'mongodb.jpeg'],
            ['name' => 'Tableau', 'level' => 92, 'logo' => 'tableau.png'],
            ['name' => 'Figma', 'level' => 86, 'logo' => 'figma.png'],
            ['name' => 'Laravel', 'level' => 90, 'logo' => 'laravel.png'],
            ['name' => 'Accounting', 'level' => 80, 'logo' => 'accounting.jpeg'],
            ['name' => 'Information System Analysis & Design', 'level' => 95, 'logo' => 'isad.jpeg'],
        ];
    @endphp

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Skills Animation</title>
        @vite('resources/css/app.css') {{-- pastikan Tailwind sudah ter-setup --}}
    </head>

    <body class="bg-gray-900 text-white">

        <section id="skills" class="py-20 px-6 bg-gradient-to-b from-gray-900 to-gray-800">
            <div class="max-w-6xl mx-auto text-center">
                <h2 class="text-3xl md:text-4xl font-bold mb-4 text-white">Skills & Expertise</h2>
                <p class="text-gray-400 max-w-2xl mx-auto mb-12">
                    Technical Proficiencies: Excel, Java, JavaFX, MySQL, MongoDB, Tableau, Figma,
                    Laravel, Accounting, and Information Systems Analysis & Design.
                </p>

                <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8 justify-items-center">
                    @foreach ($skills as $skill)
                        @php
                            $logoPath = public_path('image/' . $skill['logo']);
                            $logoUrl = file_exists($logoPath)
                                ? asset('image/' . $skill['logo'])
                                : asset('image/default.png');
                        @endphp

                        <div
                            class="bg-gray-800 p-6 rounded-2xl shadow-lg hover:shadow-2xl transition-shadow duration-300 ease-in-out w-full max-w-md">
                            <div class="flex items-center mb-6 gap-4">
                                <!-- Logo -->
                                <div class="flex-shrink-0">
                                    <img src="{{ $logoUrl }}" alt="{{ $skill['name'] }} Logo"
                                        class="w-14 h-14 object-contain">
                                </div>

                                <!-- Judul + Persentase -->
                                <div class="flex-1 flex items-center">
                                    <h3 class="font-semibold text-xl text-white">{{ $skill['name'] }}</h3>
                                    <span class="text-indigo-400 font-medium ml-auto text-lg counter"
                                        data-target="{{ $skill['level'] }}">0%</span>
                                </div>
                            </div>

                            <!-- Progress Bar -->
                            <div class="w-full bg-gray-700 rounded-full h-3">
                                <div class="h-full rounded-full bg-gradient-to-r from-indigo-500 to-purple-600 progress-bar"
                                    data-target="{{ $skill['level'] }}" style="width:0%">
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>

        <script>
            document.addEventListener('DOMContentLoaded', () => {
                const bars = document.querySelectorAll('.progress-bar');
                const counters = document.querySelectorAll('.counter');

                // Animasi angka
                const animateCounter = (el, target) => {
                    let current = 0;
                    const step = () => {
                        current += 1;
                        if (current <= target) {
                            el.textContent = current + '%';
                            requestAnimationFrame(step);
                        }
                    };
                    step();
                };

                // Jalankan animasi saat section terlihat
                const observer = new IntersectionObserver((entries, obs) => {
                    entries.forEach(entry => {
                        if (entry.isIntersecting) {
                            bars.forEach((bar, i) => {
                                const target = bar.dataset.target;
                                bar.style.transition = 'width 1.5s ease';
                                bar.style.width = target + '%';
                                animateCounter(counters[i], target);
                            });
                            obs.disconnect();
                        }
                    });
                }, {
                    threshold: 0.2
                });

                observer.observe(document.querySelector('#skills'));
            });
        </script>

    </body>

    </html>




    <!-- Projects Section -->
    <section id="projects" class="py-20 px-6 bg-gradient-to-b from-gray-900 to-gray-950">
        <div class="max-w-6xl mx-auto text-center">
            <h2 class="text-3xl md:text-4xl font-bold mb-4 text-white">Featured Projects</h2>
            <p class="text-gray-400 max-w-2xl mx-auto mb-12">
                Here are some of my recent projects
            </p>

            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8 justify-items-center">
                @php
                    $projects = [
                        [
                            'title' => 'Beenus Billiard Club',
                            'desc' =>
                                'Full-stack web application built entirely with Laravel, handling both frontend and backend development',
                            'github' => 'https://github.com/AlbertSumedha/Herd',
                            'image' => 'image/bbc.png',
                        ],
                        [
                            'title' => 'JigiBoxZ',
                            'desc' =>
                                'Designed relational database schema and performed data manipulation using Microsoft SQL Server Management Studio (SSMS)',
                            'github' => 'https://github.com/AlbertSumedha/JigiBoxZ-SSMS-',
                            'image' => 'image/jigiboxz.png',
                        ],
                        [
                            'title' => 'DollaBookShop',
                            'desc' =>
                                'Developed a full-stack desktop application for a retail store using JavaFX for the user interface and MySQL (XAMPP) for database management.',
                            'github' => 'https://github.com/AlbertSumedha/DollarBookShops-JavaFX-',
                            'image' => 'image/dbs.png',
                        ],
                        [
                            'title' => 'Perpustakaan',
                            'desc' =>
                                'Designed and implemented a library database using MongoDB, performing CRUD operations and data manipulation through MongoDB queries.',
                            'github' =>
                                'https://docs.google.com/document/d/1ixqau-BE0UX0_OkB_IzxhlVErJ1_Mz8X/edit?usp=sharing&ouid=110122588771304062119&rtpof=true&sd=true',
                            'image' => 'image/perpustakaan.jpg',
                        ],
                        [
                            'title' => 'DzKimline',
                            'desc' =>
                                'Responsible for data cleansing and developing data warehouse solutions, ensuring accurate, consistent, and accessible data for business intelligence purposes.',
                            'github' =>
                                'https://drive.google.com/drive/folders/1dsXa9zGI3NCB_oHGJ-cp8QXBwKINL_Mi?usp=sharing',
                            'image' => 'image/dzkimline.jpeg',
                        ],
                    ];
                @endphp

                @foreach ($projects as $project)
                    @php
                        $imageUrl = asset($project['image']);
                    @endphp

                    <!-- Card Project -->
                    <div
                        class="group cursor-pointer w-full max-w-xs bg-gray-800 rounded-xl overflow-hidden shadow-lg hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-2">

                        <!-- Image Wrapper -->
                        <div class="h-48 w-full bg-gray-900 flex items-center justify-center overflow-hidden">
                            <img src="{{ $imageUrl }}" alt="{{ $project['title'] }}"
                                class="h-full w-full object-contain transition-transform duration-300 group-hover:scale-105" />
                        </div>

                        <!-- Content -->
                        <div class="p-6 text-center">
                            <h3
                                class="font-semibold text-xl mb-2 group-hover:text-indigo-400 transition-colors text-white">
                                {{ $project['title'] }}
                            </h3>
                            <p class="text-gray-400 mb-6">{{ $project['desc'] }}</p>

                            <!-- Button Centered -->
                            <div class="flex justify-center">
                                <a href="{{ $project['github'] }}" target="_blank"
                                    class="inline-block px-5 py-2 rounded-lg bg-gradient-to-r from-indigo-500 to-purple-600 text-white font-medium shadow-md hover:shadow-lg hover:from-indigo-600 hover:to-purple-700 transform hover:-translate-y-1 transition-all duration-300">
                                    Click Me
                                </a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section id="about" class="py-20 px-6 bg-gray-800">
        <div class="max-w-6xl mx-auto grid md:grid-cols-2 gap-12 items-start">

            <!-- Kolom kiri: Gambar + GPA & Languages -->
            <div class="flex flex-col items-center">
                <!-- Gambar Profil (square) -->
                <div class="w-100 md:w-120 aspect-square overflow-hidden rounded-2xl shadow-2xl">
                    <img src="{{ asset('image/caffe.png') }}" alt="Developer at desk"
                        class="w-full h-full object-cover">
                </div>

                <!-- GPA + Languages Row (4 kotak sejajar) -->
                <div class="mt-4 grid grid-cols-2 md:grid-cols-4 gap-4 w-full justify-items-center">
                    <!-- GPA -->
                    <div class="bg-gray-700 border border-indigo-500 rounded-lg shadow-lg p-3 text-center">
                        <p class="text-sm text-gray-400">GPA</p>
                        <p class="text-xl font-bold text-white">3.76 / 4.00</p>
                    </div>

                    <!-- Indonesian -->
                    <div class="bg-gray-700 border border-indigo-500 rounded-lg shadow-lg p-3 text-center">
                        <p class="text-sm text-gray-400">Indonesian</p>
                        <p class="text-xl font-bold text-white">5/5</p>
                    </div>

                    <!-- English -->
                    <div class="bg-gray-700 border border-indigo-500 rounded-lg shadow-lg p-3 text-center">
                        <p class="text-sm text-gray-400">English</p>
                        <p class="text-xl font-bold text-white">4/5</p>
                    </div>

                    <!-- Mandarin -->
                    <div class="bg-gray-700 border border-indigo-500 rounded-lg shadow-lg p-3 text-center">
                        <p class="text-sm text-gray-400">Mandarin</p>
                        <p class="text-xl font-bold text-white">HSK 3/6</p>
                    </div>
                </div>
            </div>

            <!-- Kolom kanan: About Me -->
            <div>
                <h2 class="text-3xl md:text-4xl font-bold mb-6 text-white">About Me</h2>

                <p class="text-gray-400 mb-6">
                    I am an undergraduate student passionate about software development and data management.
                    I have hands-on experience building full-stack web applications with Laravel,
                    developing desktop applications with JavaFX and MySQL (XAMPP),
                    and designing databases using Microsoft SQL Server and MongoDB.
                </p>

                <p class="text-gray-400 mb-8">
                    I enjoy exploring new technologies, applying analytical thinking to solve problems,
                    and creating clean, user-friendly solutions.
                    Currently, I am also learning <span class="text-indigo-400 font-semibold">Tableau, Excel, and
                        Accounting</span> to strengthen my data analysis and business knowledge.
                </p>

                <!-- Skill highlights -->
                <div class="grid grid-cols-2 gap-6 mb-8">
                    <div>
                        <h4 class="font-semibold text-lg mb-2 text-white">Full-Stack & Web</h4>
                        <p class="text-gray-400">Laravel, PHP, Tailwind, HTML/CSS</p>
                    </div>
                    <div>
                        <h4 class="font-semibold text-lg mb-2 text-white">Desktop & Database</h4>
                        <p class="text-gray-400">JavaFX, MySQL, SQL Server, MongoDB</p>
                    </div>
                    <div>
                        <h4 class="font-semibold text-lg mb-2 text-white">Data Analysis</h4>
                        <p class="text-gray-400">Tableau, Excel</p>
                    </div>
                    <div>
                        <h4 class="font-semibold text-lg mb-2 text-white">Business Knowledge</h4>
                        <p class="text-gray-400">Accounting (in progress)</p>
                    </div>
                </div>

                <!-- Tombol download resume -->
                <a href="{{ asset('file/Resume.pdf') }}" download="AlbertSumedha_Resume.pdf"
                    class="bg-indigo-500 hover:bg-purple-600 text-white px-8 py-3 rounded-lg font-semibold flex items-center gap-2 transition-colors">
                    Download Resume
                </a>

            </div>
        </div>
    </section>



    <!-- Contact Section -->
    <section id="contact" class="py-20 px-6">
        <div class="max-w-4xl mx-auto text-center">
            <h2 class="text-3xl md:text-4xl font-bold mb-4">Get In Touch</h2>
            <p class="text-gray-400 max-w-2xl mx-auto mb-12">
                Have a project in mind or want to collaborate? I'd love to hear from you!
            </p>

            <div class="grid md:grid-cols-2 gap-12">
                <!-- Contact Info -->
                <div class="text-left space-y-6">
                    <div class="flex items-center space-x-4">
                        <div class="w-12 h-12 bg-indigo-500 rounded-full flex items-center justify-center">
                            <!-- Mail Icon -->
                            <svg class="w-6 h-6 text-white" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M4 4h16v16H4z" fill="none" />
                                <path d="M4 4h16v16H4V4zm8 7L4 6v12h16V6l-8 5z" />
                            </svg>
                        </div>
                        <div>
                            <p class="font-medium">Email</p>
                            <p class="text-gray-400">albertsk2581@gmail.com</p>
                        </div>
                    </div>

                    <div class="flex items-center space-x-4">
                        <div class="w-12 h-12 bg-purple-600 rounded-full flex items-center justify-center">
                            <!-- Phone Icon -->
                            <svg class="w-6 h-6 text-white" fill="currentColor" viewBox="0 0 24 24">
                                <path
                                    d="M6.6,10.8a15.1,15.1,0,0,0,6.6,6.6l2.2-2.2a1,1,0,0,1,1-.24A11.7,11.7,0,0,0,21,16a1,1,0,0,1,1,1v3a1,1,0,0,1-1,1A17,17,0,0,1,3,5a1,1,0,0,1,1-1H7a1,1,0,0,1,1,1,11.7,11.7,0,0,0,1.78,4.6,1,1,0,0,1-.24,1Z" />
                            </svg>
                        </div>
                        <div>
                            <p class="font-medium">Phone</p>
                            <p class="text-gray-400">+62 857 5322 0875</p>
                        </div>
                    </div>

                    <!-- LinkedIn -->
                    <div class="flex items-center space-x-4">
                        <div class="w-12 h-12 bg-blue-600 rounded-full flex items-center justify-center">
                            <svg class="w-6 h-6 text-white" fill="currentColor" viewBox="0 0 24 24">
                                <path
                                    d="M4.98 3.5a2.5 2.5 0 11-.01 5.01 2.5 2.5 0 01.01-5.01zM4 9h2v12H4zM9 9h2v1.71h.03c.28-.53.98-1.09 2.02-1.09 2.16 0 2.95 1.42 2.95 3.26V21h-2v-6.16c0-1.47-.03-3.36-2.05-3.36-2.05 0-2.36 1.6-2.36 3.25V21H9V9z" />
                            </svg>
                        </div>
                        <div>
                            <p class="font-medium">LinkedIn</p>
                            <p class="text-gray-400">
                                <a href="https://www.linkedin.com/in/albert-sumedha-kusuma-the" target="_blank"
                                    class="hover:underline"> https://www.linkedin.com/in/albert-sumedha-kusuma-the </a>
                            </p>
                        </div>
                    </div>
                    <!-- GitHub -->
                    <div class="flex items-center space-x-4">
                        <div class="w-12 h-12 bg-gray-700 rounded-full flex items-center justify-center">
                            <svg class="w-6 h-6 text-white" fill="currentColor" viewBox="0 0 24 24">
                                <path
                                    d="M12 .5C5.65.5.5 5.65.5 12c0 5.1 3.29 9.41 7.86 10.94.58.11.79-.25.79-.55v-2.02c-3.2.69-3.87-1.54-3.87-1.54-.53-1.34-1.28-1.7-1.28-1.7-1.04-.71.08-.7.08-.7 1.15.08 1.76 1.18 1.76 1.18 1.02 1.76 2.68 1.25 3.34.95.1
                            -.74.4-1.25.72-1.54-2.55-.29-5.24-1.28-5.24-5.69 0-1.26.45-2.29 1.18-3.1-.12-.29-.51-1.46.11-3.05 0 0 .96-.31 3.15 1.18a10.97 10.97 0 015.74 0c2.19-1.49 3.15-1.18 3.15-1.18.62 1.59.23 2.76.11 3.05.74.81 1.18 1.84 1.18 3.1 0 4.42-2.7 5.39-5.28 5.67.41.35.77 1.04.77 2.1v3.12c0 .31.21.67.8.55A10.52 10.52 0 0023.5 12C23.5 5.65 18.35.5 12 .5z" />
                            </svg>
                        </div>
                        <div>
                            <p class="font-medium">GitHub</p>
                            <p class="text-gray-400">
                                <a href="https://github.com/AlbertSumedha" target="_blank" class="hover:underline">
                                    https://github.com/AlbertSumedha </a>
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Contact Form -->
                <form action="{{ route('contact.store') }}" method="POST" class="space-y-6 text-left">
                    @csrf
                    <input type="text" name="name" placeholder="Name"
                        class="w-full p-4 rounded-lg bg-gray-700 border border-gray-600 text-white focus:outline-none focus:ring-2 focus:ring-indigo-500">
                    <input type="email" name="email" placeholder="Email"
                        class="w-full p-4 rounded-lg bg-gray-700 border border-gray-600 text-white focus:outline-none focus:ring-2 focus:ring-indigo-500">
                    <textarea name="message" placeholder="Message"
                        class="w-full p-4 rounded-lg bg-gray-700 border border-gray-600 text-white focus:outline-none focus:ring-2 focus:ring-indigo-500"></textarea>
                    <button type="submit"
                        class="bg-indigo-500 hover:bg-purple-600 text-white px-8 py-3 rounded-lg font-semibold transition-colors">
                        Send Message
                    </button>
                </form>
            </div>
        </div>
    </section>



    <footer class="bg-gray-950 text-gray-400 text-center py-6">
        © 2025 Albert Sumedha | Building reliable solutions, one project at a time.
    </footer>





    <!-- Typing Script -->
    <script>
        const name = "Albert Sumedha Kusuma The";
        const target = document.getElementById("typed-name");
        let index = 0;

        function typeName() {
            if (index < name.length) {
                target.textContent += name[index];
                index++;
                setTimeout(typeName, 150);
            }
        }
        window.addEventListener('DOMContentLoaded', typeName);
    </script>

</body>

</html>
