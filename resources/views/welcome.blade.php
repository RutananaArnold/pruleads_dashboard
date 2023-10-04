<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>PruLeads - Dashboard</title>

         <!-- Add the favicon link -->
   <link rel="icon" href="{{ asset('images/pruHub.jpeg') }}" type="image/x-icon">

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="antialiased">
        <div class="relative sm:flex sm:justify-center sm:items-center min-h-screen bg-dots-darker bg-center bg-gray-100 dark:bg-dots-lighter dark:bg-gray-900 selection:bg-red-500 selection:text-white">
            @if (Route::has('login'))
                <livewire:welcome.navigation />
            @endif

            <div class="max-w-7xl mx-auto p-6 lg:p-8">
                <div class="flex justify-center">
                    <p><H2>WELCOME TO PRUHUB ADMIN DASHBOARD</H2></p>
                </div>

                 <!-- Centered image -->
                <div class="flex justify-center mt-16">
                    <img src="{{ asset('images/pruHub.jpeg') }}" alt="Your Image" class="centered-image">
                </div>


                <div class="flex justify-center mt-16 px-0 sm:items-center sm:justify-between">
                    <div class="text-center text-sm text-gray-500 dark:text-gray-400 sm:text-left">
                            <div class="flex items-center gap-4">
                                <a href="https://prudential.ug/" class="group inline-flex items-center hover:text-gray-700 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">
                                    <img src="{{ asset('images/prudentialLogo.jpeg') }}" alt="Image Alt Text" class="w-5 h-5 stroke-gray-400 dark:stroke-gray-600 group-hover:stroke-gray-600 dark:group-hover:stroke-gray-400">
                                    Prudential
                                </a>
                            </div>
                        </div>


                        <div class="ml-4 text-center text-sm text-gray-500 dark:text-gray-400 sm:text-right sm:ml-0">
                           &copy; <?php echo date("Y"); ?>
                        </div>

                </div>

            </div>
        </div>

        <style>
    /* CSS for centering the image */
    .centered-image {
        max-width: 100%; /* Ensure the image doesn't exceed its container width */
        max-height: 100%; /* Ensure the image doesn't exceed its container height */
        display: block; /* Center horizontally */
        margin: 0 auto; /* Center vertically and horizontally */
    }
</style>
    </body>
</html>
