<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel</title>
    
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />
    
    <!-- Styles -->
    @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    @else
        <link href="{{ asset('css/styles.css') }}" rel="stylesheet">
    @endif
    <link rel="stylesheet" href="/styles/style-cahya.css">
</head>
<body class="bg-[#FDFDFC] dark:bg-[#0a0a0a] text-[#1b1b18] flex p-6 lg:p-8 items-center lg:justify-center min-h-screen flex-col">
    <header class="w-full lg:max-w-4xl max-w-[335px] text-sm mb-6 not-has-[nav]:hidden">
        @if (Route::has('login'))
            <nav class="flex items-center justify-end gap-4">
                @auth
                    <a href="{{ url('/dashboard') }}" class="btn-secondary">
                        Dashboard
                    </a>
                @else
                    <a href="{{ route('login') }}" class="btn-primary">
                        Log in
                    </a>

                    @if (Route::has('register'))
                        <a href="{{ route('register') }}" class="btn-secondary">
                            Register
                        </a>
                    @endif
                @endauth
            </nav>
        @endif
    </header>
    
    <div class="flex items-center justify-center w-full transition-opacity opacity-100 duration-750 lg:grow starting:opacity-0">
        <main class="flex max-w-[335px] w-full flex-col-reverse lg:max-w-4xl lg:flex-row">
            <div class="text-[13px] leading-[20px] flex-1 p-6 pb-12 lg:p-20 bg-white dark:bg-[#161615] dark:text-[#EDEDEC] shadow-[inset_0px_0px_0px_1px_rgba(26,26,0,0.16)] dark:shadow-[inset_0px_0px_0px_1px_#fffaed2d] rounded-bl-lg rounded-br-lg lg:rounded-tl-lg lg:rounded-br-none">
                <h1 class="mb-1 font-medium">Let's get started</h1>
                <p class="mb-2 text-[#706f6c] dark:text-[#A1A09A]">
                    Laravel has an incredibly rich ecosystem. <br>We suggest starting with the following.
                </p>
                
                <ul class="flex flex-col mb-4 lg:mb-6">
                    <li class="list-item">
                        <span class="list-bullet"></span>
                        <span>
                            Read the
                            <a href="https://laravel.com/docs" target="_blank" class="link">
                                <span>Documentation</span>
                                <svg class="link-icon" viewBox="0 0 10 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M7.70833 6.95834V2.79167H3.54167M2.5 8L7.5 3.00001" stroke="currentColor" stroke-linecap="square"/>
                                </svg>
                            </a>
                        </span>
                    </li>
                    <li class="list-item">
                        <span class="list-bullet"></span>
                        <span>
                            Watch video tutorials at
                            <a href="https://laracasts.com" target="_blank" class="link">
                                <span>Laracasts</span>
                                <svg class="link-icon" viewBox="0 0 10 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M7.70833 6.95834V2.79167H3.54167M2.5 8L7.5 3.00001" stroke="currentColor" stroke-linecap="square"/>
                                </svg>
                            </a>
                        </span>
                    </li>
                </ul>
                
                <ul class="flex gap-3 text-sm leading-normal">
                    <li>
                        <a href="https://cloud.laravel.com" target="_blank" class="btn-deploy">
                            Deploy now
                        </a>
                    </li>
                </ul>
            </div>
            
            <div class="bg-[#fff2f2] dark:bg-[#1D0002] relative lg:-ml-px -mb-px lg:mb-0 rounded-t-lg lg:rounded-t-none lg:rounded-r-lg aspect-[335/376] lg:aspect-auto w-full lg:w-[438px] shrink-0 overflow-hidden">
                <!-- Laravel Logo -->
                <svg class="laravel-logo" viewBox="0 0 438 104" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M17.2036 -3H0V102.197H49.5189V86.7187H17.2036V-3Z" fill="currentColor"/>
                    <!-- Other SVG paths would go here -->
                </svg>

                <!-- Light/Dark Mode SVG -->
                <svg class="laravel-illustration light-mode" viewBox="0 0 440 376" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <!-- SVG paths would go here -->
                </svg>
                
                <svg class="laravel-illustration dark-mode" viewBox="0 0 440 376" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <!-- SVG paths would go here -->
                </svg>
                
                <div class="absolute inset-0 rounded-t-lg lg:rounded-t-none lg:rounded-r-lg shadow-[inset_0px_0px_0px_1px_rgba(26,26,0,0.16)] dark:shadow-[inset_0px_0px_0px_1px_#fffaed2d]"></div>
            </div>
        </main>
    </div>

    <!-- Additional content you wanted to add -->
    <div class="w-full lg:max-w-4xl max-w-[335px] mt-8">
        <h1>Welcome To Potretine</h1>
        <div class="flex flex-wrap gap-4 mt-4">
            <img src="{{ asset('images/foto1.jpg') }}" width="300" alt="Foto 1">
            <img src="{{ asset('images/foto2.png') }}" width="300" alt="Foto 2">

        </div>
    </div>

    @if (Route::has('login'))
        <div class="h-14.5 hidden lg:block"></div>
    @endif
</body>
</html>