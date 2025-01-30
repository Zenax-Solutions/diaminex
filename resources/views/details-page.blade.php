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
                    <h1 class="text-4xl md:text-5xl font-heading font-bold mb-6">{{$gem->name}}</h1>
                    <p class="text-metal-200 italic mb-8 text-xl font-display">{{$gem->tagline}}</p>
                    <div class="gem-model-container">
                        <model-viewer
                            src="{{ Storage::url($gem->model_path) }}"
                            auto-rotate
                            rotation-per-second="30deg"
                            environment-image="neutral"
                            shadow-intensity="1"
                            disable-zoom
                            camera-controls
                            exposure="1"
                            style="width: 100%; height: 100%">
                            <div class="progress-bar" slot="progress-bar"></div>
                        </model-viewer>
                    </div>
                </div>

                <br>
                @if($gem->gallery_images && count($gem->gallery_images) > 0)
                <div class="grid grid-cols-1 md:grid-cols-3 gap-3 border border-metal-700 rounded-lg p-3">


                    @foreach($gem->gallery_images as $image)

                    <div class="w-80 bg-white p-3 rounded-lg">
                        <img class="h-52 w-full object-cover " src="{{Storage::url($image)}}" />
                    </div>
                    &nbsp;

                    @endforeach


                </div>
                @endif
                <br>

                <div class="prose prose-invert max-w-none">
                    {!! $gem->long_description !!}
                </div>
            </div>
        </div>
    </main>
</body>

</html>