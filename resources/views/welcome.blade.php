<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>DIAMINEX - Finest Gems from Sri Lanka</title>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Cinzel:wght@400;600;700&family=Montserrat:wght@300;400;500;600;700&family=Playfair+Display:wght@400;500;600;700&display=swap"
        rel="stylesheet" />
    @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @else
    @endif
    <script
        type="module"
        src="https://ajax.googleapis.com/ajax/libs/model-viewer/3.4.0/model-viewer.min.js"></script>

    <style>
        .gem-section {
            position: relative;
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-size: 1.5rem;
            overflow: hidden;
        }

        .gem-section::after {
            content: "";
            position: absolute;
            bottom: -80px;
            /* More overlap to remove sharp edges */
            left: 0;
            width: 100%;
            height: 150px;
            /* Increased height for a longer blend */
            background: linear-gradient(to bottom, rgba(0, 0, 0, 0) 0%, rgba(0, 0, 0, 0.3) 50%, rgba(0, 0, 0, 0.8) 100%);
            filter: blur(100px);
            /* Stronger blur effect */
            z-index: 1;
            pointer-events: none;
        }
    </style>
</head>

<body class="bg-metal-900 text-metal-100 font-sans">
    <!-- Hero Section -->
    <section class="hero-section h-screen relative">
        <div class="absolute inset-0 bg-black bg-opacity-60"></div>
        <div class="container mx-auto px-4 h-full relative">

            <header class="relative flex flex-col justify-end items-center py-4 md:py-6" id="header">
                <!-- Logo centered at the top -->
                <div class="text-metal-100 text-xl md:text-2xl font-heading font-bold tracking-widest absolute top-1/2 transform -translate-y-1/2">
                    DIAMINEX
                </div>

                <!-- Navigation / Hamburger Button positioned at the bottom -->
                <nav class="w-full flex justify-center" style="margin-top: 140px;">
                    <ul class="hidden md:flex space-x-8">
                        <li>
                            <a href="/about-us" class="text-metal-100 hover:text-metal-300">About</a>
                        </li>
                        <li>
                            <a href="#gems" class="text-metal-100 hover:text-metal-300">Our Gems</a>
                        </li>
                        <li>
                            <a href="#contact" class="text-metal-100 hover:text-metal-300">Contact</a>
                        </li>
                    </ul>
                    <!-- Mobile Hamburger Button -->
                    <button class="md:hidden text-metal-100" id="hamburger-btn">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6"
                            fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M4 6h16M4 12h16M4 18h16" />
                        </svg>
                    </button>
                </nav>
            </header>

            <!-- Mobile Menu -->
            <div class="md:hidden hidden" id="mobile-menu" style="text-align: center;">
                <ul class="space-y-4 px-4 py-4">
                    <li>
                        <a href="/about-us" class="text-metal-100 hover:text-metal-300">About</a>
                    </li>
                    <li>
                        <a href="#gems" class="text-metal-100 hover:text-metal-300">Our Gems</a>
                    </li>
                    <li>
                        <a href="#contact" class="text-metal-100 hover:text-metal-300">Contact</a>
                    </li>
                </ul>
            </div>

            <!-- JavaScript to handle the hamburger menu toggle -->
            <script>
                const hamburgerBtn = document.getElementById('hamburger-btn');
                const mobileMenu = document.getElementById('mobile-menu');

                hamburgerBtn.addEventListener('click', function() {
                    mobileMenu.classList.toggle('hidden'); // Toggle the mobile menu visibility
                });
            </script>



            <div
                class="flex flex-col justify-center items-center text-center h-full px-4 md:px-0">
                <h1
                    class="text-metal-100 text-4xl md:text-7xl font-heading font-bold mb-4 opacity-0 tracking-[.25em]"
                    id="hero-title">
                    DIAMINEX
                </h1>
                <p
                    class="text-metal-200 text-lg md:text-xl mb-8 opacity-0 max-w-2xl font-display"
                    id="hero-subtitle">
                    Discover the finest gems from Sri Lanka, where centuries of
                    expertise meet unparalleled quality.
                </p>
                <button
                    id="explore-btn"
                    class="bg-transparent border-2 border-metal-100 text-metal-100 px-6 md:px-8 py-2 md:py-3 text-sm md:text-base w-max hover:bg-metal-100 hover:text-metal-900 transition-all opacity-0 font-heading tracking-wider">
                    EXPLORE COLLECTION
                </button>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <!-- <section id="about" class="py-16 md:py-20 bg-gradient-metal">
        <div class="container mx-auto px-4">
            <div class="max-w-3xl mx-auto text-center">
                <h2
                    class="text-3xl md:text-4xl font-heading font-bold mb-6 md:mb-8 text-metal-100">
                    ABOUT US
                </h2>
                <p class="text-metal-300 mb-6 leading-relaxed text-sm md:text-base">
                    At Diaminex, we specialize in bringing the finest gems from Sri
                    Lanka, a country renowned for its rich heritage in producing some of
                    the world's most exquisite gems. With centuries of expertise in gem
                    mining, Sri Lanka is known for its rare and high-quality gems that
                    captivate with their brilliance and beauty.
                </p>
                <p class="text-metal-300 leading-relaxed text-sm md:text-base">
                    Our mission is to offer these treasures to discerning clients around
                    the globe, providing unparalleled quality, authenticity, and
                    craftsmanship. Whether you're a collector, jeweler, or enthusiast,
                    we are committed to delivering exceptional gems with a promise of
                    excellence, integrity, and trust.
                </p>
            </div>
        </div>
    </section> -->

    <!-- Gem Sections -->
    <section class="gem-sec bg-black">
        <div class=" mx-auto">

            <div class="py-16 md:py-20 ">
                <h2
                    id="gem-colection"
                    class="text-3xl md:text-4xl font-heading font-bold mb-12 text-center text-metal-100">
                    OUR GEM <br>COLLECTION
                </h2>
            </div>



            <div class="grid" id="gems">
                @foreach ($sapphires as $index => $sapphire)
                <div class="grid gem-section grid-cols-1 md:grid-cols-1  items-end">
                    <div class="gem-section-content  {{ $index % 2 == 0 ? '' : 'md:flex-row-reverse' }}" style="margin-bottom: 150px;">
                        <div class="gem-model-container">
                            <model-viewer
                                id="model-viewer-front"
                                src="{{ Storage::url($sapphire->model_path) }}"
                                alt="{{ $sapphire->name }} 3D model"
                                auto-rotate
                                rotation-per-second="30deg"
                                environment-image="neutral"
                                shadow-intensity="1"
                                disable-zoom
                                exposure="1"
                                style="width: 100%; height: 100%">
                                <div class="progress-bar" slot="progress-bar"></div>
                            </model-viewer>
                        </div>
                        <div class="gem-content container">
                            <h2 class="text-3xl md:text-4xl font-heading font-bold mb-3 text-metal-100">
                                {{ $sapphire->name }}
                            </h2>
                            <p class="text-metal-200 italic mb-4 md:mb-6 font-display">
                                "{{ $sapphire->tagline }}"
                            </p>
                            <p class="text-metal-300 mb-6 md:mb-8 text-sm md:text-base">
                                {{ $sapphire->description }}
                            </p>
                            <a
                                href="{{ route('details', $sapphire->slug) }}"
                                class="bg-transparent border-2 border-metal-100 text-metal-100 px-6 md:px-8 py-2 md:py-3 text-sm md:text-base hover:bg-metal-100 hover:text-metal-900 transition-all font-heading tracking-wider">
                                VIEW MORE
                            </a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="py-16 md:py-20 bg-gradient-metal">
        <div class="container mx-auto px-4">
            <div class="max-w-3xl mx-auto text-center">
                <h2
                    class="text-3xl md:text-4xl font-heading font-bold mb-8 text-metal-100">
                    CONTACT US
                </h2>
                <p class="text-metal-300 mb-8">
                    Interested in our collection? Get in touch with us to learn more
                    about our gems or schedule a viewing.
                </p>
                <form class="max-w-lg mx-auto">
                    <div class="mb-6">
                        <input
                            type="text"
                            placeholder="Your Name"
                            class="w-full px-4 py-3 bg-metal-800 border border-metal-700 rounded-lg focus:outline-none focus:border-metal-500 text-metal-100" />
                    </div>
                    <div class="mb-6">
                        <input
                            type="email"
                            placeholder="Your Email"
                            class="w-full px-4 py-3 bg-metal-800 border border-metal-700 rounded-lg focus:outline-none focus:border-metal-500 text-metal-100" />
                    </div>
                    <div class="mb-6">
                        <textarea
                            placeholder="Your Message"
                            rows="4"
                            class="w-full px-4 py-3 bg-metal-800 border border-metal-700 rounded-lg focus:outline-none focus:border-metal-500 text-metal-100"></textarea>
                    </div>
                    <button
                        type="submit"
                        class="bg-transparent border-2 border-metal-100 text-metal-100 px-8 py-3 text-base hover:bg-metal-100 hover:text-metal-900 transition-all font-heading tracking-wider">
                        SEND MESSAGE
                    </button>
                </form>
            </div>
        </div>
    </section>

    <footer class="py-8 bg-metal-800">
        <div class="container mx-auto px-4 text-center">
            <p class="text-metal-300">&copy; 2024 DIAMINEX. All rights reserved.</p>
        </div>
    </footer>
</body>

</html>