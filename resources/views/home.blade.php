<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Website dengan Tailwind CSS</title>
    <!-- Tailwind CSS -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <!-- DaisyUI -->
    <link href="https://cdn.jsdelivr.net/npm/daisyui@4.10.2/dist/full.min.css" rel="stylesheet" type="text/css" />
    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <!-- Poppins Font -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap" rel="stylesheet">
    <style>
        /* Additional CSS styles */
        .fixed-navbar {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            z-index: 1000;
        }

        .main-content {
            margin-top: 80px;
        }

        .explore-text {
            font-family: 'Poppins', sans-serif;
            font-size: 55px;
            font-weight: bold;
            color: #006041;
        }

        .user-icon {
            background-color: transparent !important;
        }

        .user-icon i {
            color: black;
        }

        .additional-text {
            font-family: 'Poppins', sans-serif;
            font-size: 20px;
            color: #006041;
        }
    </style>
</head>

<body class="bg-gray-100">
    <!-- Navbar -->
    <nav class="fixed-navbar bg-white shadow-md p-5">
        <div class="container mx-auto">
            <div class="flex items-center justify-between">
                <div class="flex items-center">
                    <span class="text-xl font-semibold">Logo</span>
                    <div class="ml-5">
                        <a href="/home" class="mr-5">Beranda</a>
                        <a href="/product" class="mr-5">Produk</a>
                        <a href="#" class="mr-5">Tentang</a>
                        <a href="/lokasi" class="mr-5">Lokasi</a>
                    </div>
                </div>
                <div class="flex justify-center items-center w-1/3">
                    <div class="relative flex items-center"> <!-- Menambahkan kelas flex untuk mengatur posisi ikon dan input -->
                        <input type="text" placeholder="Search" class="border border-gray-300 rounded-md py-1 px-3 w-full sm:w-64 focus:outline-none focus:border-blue-500 pr-10">
                        <div class="absolute inset-y-0 right-0 flex items-center mr-3 pointer-events-none">
                            <i class="fas fa-search text-gray-400"></i> <!-- Ikon pencarian -->
                            <button class="flex items-center py-1 px-3 rounded-md ml-2 user-icon"> <!-- Tombol pengguna -->
                                <i class="fas fa-user text-black"></i> <!-- Ikon pengguna -->
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </nav>

    <!-- Main content -->
    <div class="main-content container mx-auto p-4 flex items-center justify-between">
        <div>
            <p class="explore-text mb-2">Jelajahi Aroma dan</p>
            <p class="explore-text mb-5">Citra Rasa Terbaik</p>
            <p class="additional-text mb-2">Dibuat dari biji kopi pilihan untuk pengalaman</p>
            <p class="additional-text mb-2">meminum kopi terbaik setiap hari</p>
            <a href="/login" class="inline-block bg-green-600 hover:bg-green-700 text-white py-2 px-4 rounded-md sign-in-btn">Sign In</a>
        </div>
        <div class="w-1/2">
            <img src="{{ asset('image/gambarlayar.jpg') }}" alt="Gambar Kopi Besar" class="w-full h-auto">
        </div>
    </div>

    <!-- Cards -->
    <div class="main-content container mx-auto p-4 flex flex-wrap justify-between">
        <!-- Card pertama -->
        <div class="max-w-sm rounded overflow-hidden shadow-lg mb-4">
            <img class="w-full" src="{{ asset('image/1.jpg') }}" alt="Gambar Biji Kopi 1">
            <div class="px-6 py-4">
                <div class="font-bold text-xl mb-2">The Coldest Sunset</div>
                <p class="text-gray-700 text-base">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus quia, nulla! Maiores et perferendis eaque, exercitationem praesentium nihil.
                </p>
            </div>
            <div class="px-6 pt-4 pb-2">
                <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">#Coffee</span>
                <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">#Arabica</span>
            </div>
        </div>

        <!-- Card kedua -->
        <div class="max-w-sm rounded overflow-hidden shadow-lg mb-4">
            <img class="w-full" src="{{ asset('image/2.jpg') }}" alt="Gambar Biji Kopi 2">
            <div class="px-6 py-4">
                <div class="font-bold text-xl mb-2">The Warm Sunrise</div>
                <p class="text-gray-700 text-base">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus quia, nulla! Maiores et perferendis eaque, exercitationem praesentium nihil.
                </p>
            </div>
            <div class="px-6 pt-4 pb-2">
                <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">#Coffee</span>
                <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">#Robusta</span>
            </div>
        </div>

        <!-- Card ketiga -->
        <div class="max-w-sm rounded overflow-hidden shadow-lg mb-4">
            <img class="w-full" src="{{ asset('image/3.jpg') }}" alt="Gambar Biji Kopi 3">
            <div class="px-6 py-4">
                <div class="font-bold text-xl mb-2">The Cozy Evening</div>
                <p class="text-gray-700 text-base">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus quia, nulla! Maiores et perferendis eaque, exercitationem praesentium nihil.
                </p>
            </div>
            <div class="px-6 pt-4 pb-2">
                <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">#Coffee</span>
                <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">#Esspresso</span>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer class="footer p-10 bg-neutral text-neutral-content">
  <aside>
    <svg width="50" height="50" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" fill-rule="evenodd" clip-rule="evenodd" class="fill-current"><path d="M22.672 15.226l-2.432.811.841 2.515c.33 1.019-.209 2.127-1.23 2.456-1.15.325-2.148-.321-2.463-1.226l-.84-2.518-5.013 1.677.84 2.517c.391 1.203-.434 2.542-1.831 2.542-.88 0-1.601-.564-1.86-1.314l-.842-2.516-2.431.809c-1.135.328-2.145-.317-2.463-1.229-.329-1.018.211-2.127 1.231-2.456l2.432-.809-1.621-4.823-2.432.808c-1.355.384-2.558-.59-2.558-1.839 0-.817.509-1.582 1.327-1.846l2.433-.809-.842-2.515c-.33-1.02.211-2.129 1.232-2.458 1.02-.329 2.13.209 2.461 1.229l.842 2.515 5.011-1.677-.839-2.517c-.403-1.238.484-2.553 1.843-2.553.819 0 1.585.509 1.85 1.326l.841 2.517 2.431-.81c1.02-.33 2.131.211 2.461 1.229.332 1.018-.21 2.126-1.23 2.456l-2.433.809 1.622 4.823 2.433-.809c1.242-.401 2.557.484 2.557 1.838 0 .819-.51 1.583-1.328 1.847m-8.992-6.428l-5.01 1.675 1.619 4.828 5.011-1.674-1.62-4.829z"></path></svg>
    <p>VoidCoffe<br>Grand KDA jalan parkit 6 no 6</p>
  </aside> 
  <nav>
    <h6 class="footer-title">Social</h6> 
    <div class="grid grid-flow-col gap-4">
      <a><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" class="fill-current"><path d="M24 4.557c-.883.392-1.832.656-2.828.775 1.017-.609 1.798-1.574 2.165-2.724-.951.564-2.005.974-3.127 1.195-.897-.957-2.178-1.555-3.594-1.555-3.179 0-5.515 2.966-4.797 6.045-4.091-.205-7.719-2.165-10.148-5.144-1.29 2.213-.669 5.108 1.523 6.574-.806-.026-1.566-.247-2.229-.616-.054 2.281 1.581 4.415 3.949 4.89-.693.188-1.452.232-2.224.084.626 1.956 2.444 3.379 4.6 3.419-2.07 1.623-4.678 2.348-7.29 2.04 2.179 1.397 4.768 2.212 7.548 2.212 9.142 0 14.307-7.721 13.995-14.646.962-.695 1.797-1.562 2.457-2.549z"></path></svg></a>
      <a><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" class="fill-current"><path d="M19.615 3.184c-3.604-.246-11.631-.245-15.23 0-3.897.266-4.356 2.62-4.385 8.816.029 6.185.484 8.549 4.385 8.816 3.6.245 11.626.246 15.23 0 3.897-.266 4.356-2.62 4.385-8.816-.029-6.185-.484-8.549-4.385-8.816zm-10.615 12.816v-8l8 3.993-8 4.007z"></path></svg></a>
      <a><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" class="fill-current"><path d="M9 8h-3v4h3v12h5v-12h3.642l.358-4h-4v-1.667c0-.955.192-1.333 1.115-1.333h2.885v-5h-3.808c-3.596 0-5.192 1.583-5.192 4.615v3.385z"></path></svg></a>
    </div>
  </nav>
</footer> 
</body>

</html>