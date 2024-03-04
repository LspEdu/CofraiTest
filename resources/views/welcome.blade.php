<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>TaskManager</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="antialiased">
    <div
        class="relative sm:flex sm:justify-center sm:items-center min-h-screen bg-dots-darker bg-center bg-gray-100 dark:bg-dots-lighter dark:bg-gray-900 selection:bg-red-500 selection:text-white">
        @if (Route::has('login'))
            <livewire:welcome.navigation />
        @endif

        <div class="max-w-7xl mx-auto p-6 lg:p-8">
            <div class="flex justify-center items-center">
                <img src="{{ asset('build/assets/img/logo.svg') }}"
                    class="block h-20 w-auto fill-current text-gray-800 dark:text-gray-200" alt="">
                <h1 class="text-4xl">TaskManager</h1>
            </div>

            <div class="mt-16">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6 lg:gap-8">
                    <div
                        class="scale-100 text-lg p-6 bg-white dark:bg-gray-800/50 dark:bg-gradient-to-bl from-gray-700/50 via-transparent dark:ring-1 dark:ring-inset dark:ring-white/5 rounded-lg shadow-2xl shadow-gray-500/20 dark:shadow-none  motion-safe:hover:scale-[1.01] transition-all duration-250 focus:outline focus:outline-2 focus:outline-red-500">
                        <div class="mb-8 ">
                            <h2 class="text-xl font-bold mb-4">Challenges in Task Management</h2>
                            <p>Effective task management is essential for productivity. However, users often face various challenges:</p>
                          </div>
                          <div>
                            <ul class="list-disc pl-4">
                              <li><strong>Organization:</strong> Without proper categorization, tasks can become overwhelming.</li>
                              <li><strong>Prioritization:</strong> Determining which tasks to tackle first can be difficult.</li>
                              <li><strong>Notifications:</strong> Constant reminders can be distracting.</li>
                              <li><strong>Collaboration:</strong> Coordinating tasks in team settings can be challenging.</li>
                            </ul>
                          </div>
                    </div>

                    <div class="h-auto">
                        <img src="{{ asset('build/assets/img/image1.webp') }}" alt="">
                    </div>


                    <div>
                        <img src="{{ asset('build/assets/img/image2.webp') }}" alt="">
                    </div>

                    <div
                        class="scale-100 p-6 bg-white dark:bg-gray-800/50 dark:bg-gradient-to-bl from-gray-700/50 via-transparent dark:ring-1 dark:ring-inset dark:ring-white/5 rounded-lg shadow-2xl shadow-gray-500/20 dark:shadow-none text-lg motion-safe:hover:scale-[1.01] transition-all duration-250 focus:outline focus:outline-2 focus:outline-red-500">
                        <div class="mb-8 ">
                            <h2 class="text-xl font-bold mb-4">Challenges in Task Management</h2>
                            <p>Effective task management is essential for productivity. However, users often face various challenges:</p>
                          </div>
                          <div>
                            <ul class="list-disc pl-4">
                              <li><strong>Organization:</strong> Without proper categorization, tasks can become overwhelming.</li>
                              <li><strong>Prioritization:</strong> Determining which tasks to tackle first can be difficult.</li>
                              <li><strong>Notifications:</strong> Constant reminders can be distracting.</li>
                              <li><strong>Collaboration:</strong> Coordinating tasks in team settings can be challenging.</li>
                            </ul>
                          </div>
                    </div>
                </div>
            </div>

            <div class="flex justify-center mt-16 px-0 sm:items-center sm:justify-between">
                <div class="text-center text-sm sm:text-start">
                    &nbsp;
                </div>

                <div class="text-center text-sm text-gray-500 dark:text-gray-400 sm:text-end sm:ms-0">
                    Laravel v{{ Illuminate\Foundation\Application::VERSION }} (PHP v{{ PHP_VERSION }})
                </div>
            </div>
        </div>
    </div>
</body>

</html>
