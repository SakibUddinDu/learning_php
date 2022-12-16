<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="icon" href="images/favicon.ico" />
        <link
            rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
            integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
            crossorigin="anonymous"
            referrerpolicy="no-referrer"
        />
        <script src="https://cdn.tailwindcss.com"></script>
        <script>
            tailwind.config = {
                theme: {
                    extend: {
                        colors: {
                            // laravel: "#ef3b2d",
                            laravel: "#d13a62",
                        },
                    },
                },
            };
        </script>
        <title>LaraGiga | Find Laravel Jobs & Projects</title>
    </head>
    <body class="mb-48">
        <nav class="flex justify-between items-center mb-4">
            <a href="index.html"
                ><img class="w-24" src="images/logo.png" alt="" class="logo"
            /></a>
            <ul class="flex space-x-6 mr-6 text-lg">
                @if (Route::has('login'))
                {{-- <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block"> --}}
                    @auth
                        
                        <a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Dashboard</a>
                    @else
                        {{-- <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a> --}}
                       
                          <li>
                              <a href="{{ route('login') }}" class="hover:text-laravel"
                            ><i class="fa-solid fa-arrow-right-to-bracket"></i>
                            Login</a
                        ></li>
                      
                        @if (Route::has('register'))
                      
                           <li> <a href="{{ route('register') }}" class="hover:text-laravel"
                            ><i class="fa-solid fa-user-plus"></i> Register</a
                        ></li>
                      
                            {{-- <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a> --}}
                        @endif
                    @endauth
                {{-- </div> --}}
                @endif
                
                
            </ul>
        </nav>

        <!-- Hero -->
        <section
            class="relative h-72 bg-laravel flex flex-col justify-center align-center text-center space-y-4 mb-4"
        >
            <div
                class="absolute top-0 left-0 w-full h-full opacity-10 bg-no-repeat bg-center"
                style="background-image: url('images/laravel-logo.png')"
            ></div>

            <div class="z-10">
                <h1 class="text-6xl font-bold uppercase text-white">
                    Lara<span class="text-black">Giga</span>
                </h1>
                <p class="text-2xl text-gray-200 font-bold my-4">
                    Find or post Laravel jobs & projects
                </p>
                <div>
                    <a
                        href="register.html"
                        class="inline-block border-2 border-white text-white py-2 px-4 rounded-xl uppercase mt-2 hover:text-black hover:border-black"
                        >Sign Up to List a Gig</a
                    >
                </div>
            </div>
        </section>

        <main>
            @yield('search')

            @yield('items')
        </main>

        <footer
            class="fixed bottom-0 left-0 w-full flex items-center justify-start font-bold bg-laravel text-white h-24 mt-24 opacity-90 md:justify-center"
        >
            <p class="ml-2">Copyright &copy; 2022, All Rights reserved</p>

            <a
                href="create.html"
                class="absolute top-1/3 right-10 bg-black text-white py-2 px-5"
                >Post Job</a
            >
        </footer>
    </body>
</html>
