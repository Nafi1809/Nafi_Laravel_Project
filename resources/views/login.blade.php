<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>LoginForm</title>
        @vite('resources/css/app.css')
    </head>
<body class="h-screen overflow-hidden flex items-center justify-center" style="background: #edf2f7;">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>Login Form</title>
        
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
        <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
        <script src="https://cdn.tailwindcss.com"></script>

    </head>
    <body>
        <div class="font-sans text-gray-900 antialiased">
            <div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-[#f8f4f3]">
                <div>
                    <a href="/">
                        <h2 class="font-bold text-3xl">Nafi <span class="bg-[#f84525] text-white px-2 rounded-md">PUNYAA!!</span></h2>
                    </a>
                </div>

                <div class="w-full sm:max-w-md mt-6 px-6 py-4 bg-white shadow-md overflow-hidden sm:rounded-lg">
                    <form id="loginForm">
                        <div class="py-8">
                            <span class="text-2xl font-semibold">Log In</span>
                        </div>
                        <div>
                            <label class="block font-medium text-sm text-gray-700" for="Username" value="Username" form="username">
                            <input type='text' 
                                name='username'
                                placeholder='Username'
                                id="username"
                                class="w-full rounded-md py-2.5 px-4 border text-sm outline-[#f84525]" />                        
                        </div>


                        <div class="mt-4">
                            <label class="block font-medium text-sm text-gray-700" for="password" value="Password" form="password">
                            <div class="relative">
                                <input id="password" type="password" name="password" placeholder="Password" required autocomplete="current-password" class = 'w-full rounded-md py-2.5 px-4 border text-sm outline-[#f84525]'>

                                <div class="absolute inset-y-0 right-0 pr-3 flex items-center text-sm leading-5">
                                    <button type="button" id="togglePassword" class="text-gray-500 focus:outline-none focus:text-gray-600 hover:text-gray-600">                 
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="flex items-center justify-center mt-4">
                            <button type="submit" class = 'ms-4 inline-flex items-center px-4 py-2 bg-[#f84525] border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-red-800 
                            focus:bg-gray-700 active:bg-gray-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-150']>
                                Login
                            </button>
                        </div>
                    </form>                
                </div>
            </div>
        </div>

    <script src="aset/js/script.js"></script>

    </body>
</html>
</body>
</html>
