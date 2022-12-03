<!DOCTYPE html>
<html class="h-full bg-white" lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap">

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>

    <!-- Styles -->
    @livewireStyles
</head>

<body class="h-full overflow-hidden">

    <!--
  This example requires updating your template:

  ```
  <html class="h-full bg-white">
  <body class="h-full overflow-hidden">
  ```
-->
    <div class="flex h-full">
        <x-mobile-menu />

        <x-desktop-menu />

        <div class="flex min-w-0 flex-1 flex-col overflow-hidden">
            <div class="lg:hidden">
                <div class="flex items-center justify-between border-b border-gray-200 bg-gray-50 px-4 py-1.5">
                    <div>
                        <img class="h-8 w-auto" src="https://tailwindui.com/img/logos/mark.svg?color=indigo&shade=600"
                            alt="Your Company">
                    </div>
                    <div x-data="">
                        <button
                            type="button"
                            class="-mr-3 inline-flex h-12 w-12 items-center justify-center rounded-md text-gray-500 hover:text-gray-900">
                            <span class="sr-only">Open sidebar</span>
                            <!-- Heroicon name: outline/bars-3 -->
                            <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                            </svg>
                        </button>
                    </div>
                </div>
            </div>
            <div class="relative z-0 flex flex-1 overflow-hidden">
                <main class="relative z-0 flex-1 overflow-y-auto focus:outline-none xl:order-last">
                    <!-- Start main area-->
                    <div class="absolute inset-0 py-6 px-4 sm:px-6 lg:px-8">
                        <div class="h-full rounded-lg border-2 border-dashed border-gray-200">
                            {{ $slot }}
                        </div>
                    </div>
                    <!-- End main area -->
                </main>
            </div>
        </div>
    </div>


    {{-- @stack('modals') --}}

    @livewireScripts
</body>

</html>
