<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ceylon Sapphire - DIAMINEX</title>
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
</head>

<body class="bg-metal-900 text-metal-100 font-sans">
    <header class="py-4 md:py-6 bg-metal-800">
        <div class="container mx-auto px-4">
            <div class="flex justify-between items-center">
                <a href="/" class="text-metal-100 text-xl md:text-2xl font-heading font-bold tracking-widest">DIAMINEX</a>
                <a href="/" class="text-metal-100 hover:text-metal-300">Back to Home</a>
            </div>
        </div>
    </header>

    <main class="py-16 md:py-20">
        <div class="container mx-auto">
            <div class="max-w-4xl mx-auto">
                <div class="mb-12">
                    <h1 class="text-4xl md:text-5xl font-heading font-bold mb-6">About Us</h1>
                </div>

                <div class="prose prose-invert max-w-none">

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
        </div>
    </main>
</body>

</html>