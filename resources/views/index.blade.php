<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Page</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Glicker:wght@600&display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Averia+Sans+Libre&display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nanum+Pen+Script&display=swap">
    <script src="https://cdn.tailwindcss.com"></script>
    @vite('resources/css/app.css')

</head>
<body class="bg-gray-100 font-sans">

    <!-- Navigation -->
    <div class="container mx-auto p-4">
        <nav class="flex justify-between items-center bg-white p-4 shadow-md rounded-lg">
            <div class="brand flex items-center space-x-2">
                <div class="firstname font-glicker text-xl">Nafi</div>
                <div class="lastname font-nanum text-xl">Abqory</div>
            </div>
            <ul class="flex space-x-6">
                <li><a href="opening.html" class="text-gray-700 hover:text-red-500">Homepage</a></li>
                <li><a href="aboutme.html" class="text-gray-700 hover:text-red-500">About me</a></li>
                <li><a href="data.html" class="text-gray-700 hover:text-red-500">Data</a></li>
                <li><a href="gallery.html" class="text-gray-700 hover:text-red-500">Gallery</a></li>
                <li><a href="contact.html" class="text-gray-700 hover:text-red-500">Contact</a></li>
            </ul>
        </nav>
    </div>

    <!-- Homepage Content -->
    <div class="homepage flex justify-center items-center h-screen bg-gray-100">
        <div class="content-container flex flex-col items-center md:flex-row space-y-6 md:space-y-0 md:space-x-8">
            <img src="aset/images/skull cuy.jpg" height="500" alt="aku" class="w-80 h-auto border-4 border-black rounded-lg shadow-lg">
            <div class="text-container text-center md:text-left">
                <h1 class="text-4xl font-bold mb-4">Hi!</h1>
                <h2 class="text-2xl mb-4">I am Nafi Kusuma Abqory. Welcome to my website.<br> Explore, discover, and enjoy your time here.</h2>
                <div class="button mt-6">
                    <a href="aboutme.html" class="bg-red-500 text-white px-6 py-2 rounded-full hover:bg-red-700 transition duration-300 ease-in-out">Explore Here!</a>
                </div>
            </div>
        </div>
    </div>

</body>
</html>
