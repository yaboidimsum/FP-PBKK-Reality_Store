<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reality Store</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href='https://fonts.googleapis.com/css?family=Inter' rel='stylesheet'>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <style>
      /* @import url("https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;500;600;700;800&display=swap"); */
      @font-face{
        font-family:monument extended;
        font-style:normal;
        font-weight:400;
        src:local('Monument Extended'),
        url(https://fonts.cdnfonts.com/s/19595/MonumentExtended-Regular.woff) format('woff')
    }@font-face
    {font-family:monument extended bold;font-style:normal;font-weight:800;src:local('Monument Extended'),url(https://fonts.cdnfonts.com/s/19595/MonumentExtended-Ultrabold.woff) format('woff')
    }

    body {
    font-family: 'Inter';
    }

    .mnt{
        font-family: monument extended;
    }
    </style>
</head>
<body>
<header class="px-16 py-4 bg-white  flex flex-row gap-8 z-[999999] w-full justify-between items-center">
        <div class="flex flex-row gap-8 items-center">
            <div>
                <a href="/" class="text-black mnt font-semibold text-xl">
                    Reality Store
                </a>
            </div>
            <div class="flex flex-row gap-4">
                <a href="/">
                    <h2 class="text-slate-500 font-semibold text-md transition hover:text-[#2F3E5D]">About</h2>
                </a>
                <a href="/">
                    <h2 class="text-slate-500 font-semibold text-md transition hover:text-[#2F3E5D]">Merch</h2>
                </a>
            </div>
        </div>
        <div class="flex flex-row gap-8">
            <a href="/history-list">
                <h2 class="text-slate-500 font-semibold text-md transition hover:text-[#2F3E5D]">My Item</h2>
            </a>
        </div>
</header>

<div>
        <div class="h-screen flex items-center justify-center">
        <div class="w-1/2 flex flex-col">
               <div class="m-auto">
               <div class="bg-white flex flex-col gap px-8 py-10 shadow-xl shadow-gray-500" data-aos="fade-up" data-aos-delay='300'>
                   <div class="flex flex-col gap-4">
                    <div class="flex flex-col gap-4">
                    <h2 class="text-3xl font-medium max-w-xs">
                        Transaction Successfully!
                    </h2>
                    <p class="text-justify text-sm max-w-md">
                    Your payment is on pending. Proceed to pay and the admin will proceed your item                    
                </p>
                    </div>
                    <hr class="h-px my-8 bg-gray-200 border-0 dark:bg-gray-700">
   
                   </div>
                   <div class="flex flex-row gap-4 w-full ">
                   
                   <!-- <div class="flex flex-col gap-2">
                           <h2 class="text-black font-semibold text-md">Warna</h2>
                           <input name="p_warna" id="p_warna" type="text" placeholder="Masukan Jumlah Tiket" class="rounded-md px-4 py-2 w-[480px]">
                       </div> -->
                           <button type='submit' onclick="window.location.href='/'" class="bg-slate-600 hover:bg-[#14213D] text-white w-full py-2 px-4 transition ease-in-out">
                           <a href="/">    
                           Home
                           </a>
                           </button>
                           <button type='submit' onclick="window.location.href='/history-list'" class="bg-blue-900 hover:bg-[#14213D] text-white w-full py-2 px-4 transition ease-in-out">
                           <a href="/history-list">    
                           Cek Status
                           </a>
                           </button>
                   </div>
   
                   </div>
               </div>
           </div>
    </div>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
  <script>
    AOS.init();
  </script>
</body>
</html>