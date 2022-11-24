<!DOCTYPE html>
<html lang="{{ $page->language ?? 'en' }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="canonical" href="{{ $page->getUrl() }}">
        <meta name="description" content="{{ $page->description }}">
        <title>{{ $page->getTitle() }}</title>
        <link rel="stylesheet" href="{{ mix('css/main.css', 'assets/build') }}">
        <script defer src="{{ mix('js/main.js', 'assets/build') }}"></script>
    </head>
    <body class="font-sans antialiased">
        <div class="bg-cyan-500 text-white">
            <div class="container mx-auto flex flex-col md:flex-row items-center justify-between md:py-6 md:px-2">
                <div class="flex flex-row items-center p-2 md:p-0">
                    <a href="/">
                    <img src="/assets/images/ASPAB_logo.png" class="w-12 md:w-20">
                    </a>
                    <a href="/" class="no-underline hover:text-current ">
                    <p class="px-2 text-slate-800 font-bold">Australasian Society for Phycology and Aquatic Botany</p>
                    </a>
                </div>
                <nav id="nav-menu" class="flex items-start text-xs pb-2 md:pb-0">
                    <!-- <a href="/" class="border-2 border-black rounded-md mx-1 px-1 py-1 bg-cyan-800">Home</a> -->
                    <a href="/join" class="border-2 border-black rounded-md mx-1 px-1 py-1 bg-cyan-800 hover:border-gold no-underline hover:text-current">Join</a>
                    <a href="/about" class="border-2 border-black rounded-md mx-1 px-1 py-1 bg-cyan-800 hover:border-gold no-underline hover:text-current ">About</a>
                    <a href="/newsletter" class="border-2 border-black rounded-md mx-1 px-1 py-1 bg-cyan-800 hover:border-gold no-underline hover:text-current ">Newsletter</a>
                    <a href="/conference" class="border-2 border-black rounded-md mx-1 px-1 py-1 bg-cyan-800 hover:border-gold no-underline hover:text-current ">Conference</a>
                    <a href="/funding" class="border-2 border-black rounded-md mx-1 px-1 py-1 bg-cyan-800 hover:border-gold no-underline hover:text-current">Funding</a>
                </nav>
            </div>
        </div>

        <div class="bg-cyan-100 text-slate-800">
            <div id="main" class="container mx-auto flex flex-col py-3 px-2">
                @yield('body')
            </div>
        </div>

        <div id="footer" class="bg-cyan-500 text-white">
            <div class="container flex mx-auto justify-between align-center py-2 px-2 text-sm">
                <div class="flex items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" class="fill-current w-5 h-5 pr-2" viewBox="0 0 16 16">
                        <path d="M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8Zm15 0A8 8 0 1 1 0 8a8 8 0 0 1 16 0ZM8.146 4.992c-1.212 0-1.927.92-1.927 2.502v1.06c0 1.571.703 2.462 1.927 2.462.979 0 1.641-.586 1.729-1.418h1.295v.093c-.1 1.448-1.354 2.467-3.03 2.467-2.091 0-3.269-1.336-3.269-3.603V7.482c0-2.261 1.201-3.638 3.27-3.638 1.681 0 2.935 1.054 3.029 2.572v.088H9.875c-.088-.879-.768-1.512-1.729-1.512Z"/>
                    </svg>
                    <p class="my-0">Australasian Society for Phycology and Aquatic Botany</p>
                </div>
                <div class="flex items-center">
                    <a href="https://twitter.com/ASPABites" class="text-white hover:text-gold">
                    <svg xmlns="http://www.w3.org/2000/svg" class="fill-current w-5 h-5" viewBox="0 0 16 16">
                        <path d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z"/>
                    </svg>
                    </a>
                </div>
            </div>
        </div>
        </div>
    </body>
</html>
