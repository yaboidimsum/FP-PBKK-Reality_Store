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

   <section>
       <div class="flex flex-row ">
           <!-- <div class="w-1/2" data-aos="fade-right" data-aos-delay='300'>
               <img src="https://imagetolink.com/ib/DGbh08KGe4.png" alt="logo" class="w-[50rem] h-[50rem] object-contain">
           </div> -->
           <div class="w-1/2" data-aos="fade-right" data-aos-delay='300'>
            <img src="" alt="Clicked Image" id="clickedImage" class="w-[50rem] h-[50rem] object-contain">
        </div>
           <div class="w-1/2 flex flex-col" data-aos="fade-left" data-aos-delay='300'>
               <div class="m-auto">
               <form action="/add-item" method="post" class="bg-white flex flex-col gap px-8 py-10 shadow-xl shadow-gray-500">
                   <div class="flex flex-col gap-4">
                       <div class="flex flex-row gap-">
                           <div class="flex items-center me-4">
                                <input id="c_warna" type="radio" value="Cream" name="c_warna" class="w-4 h-4 bg-gray-100 border-gray-300 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                <label for="cream-radio" class="ms-2 text-sm font-medium text-yellow-600">Cream</label>
                            </div>
                           <div class="flex items-center me-4">
                                <input id="c_warna" type="radio" value="Navy" name="c_warna" class="w-4 h-4 bg-gray-100 border-gray-300 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                <label for="navy-radio" class="ms-2 text-sm font-medium text-[#14213D]">Navy</label>
                            </div>
                           <div class="flex items-center me-4">
                                <input id="c_warna" type="radio" value="White" name="c_warna" class="w-4 h-4 bg-gray-100 border-gray-300 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                <label for="navy-radio" class="ms-2 text-sm font-medium text-grey">White</label>
                            </div>
                           <div class="flex items-center me-4">
                                <input id="c_warna" type="radio" value="Black" name="c_warna" class="w-4 h-4 bg-gray-100 border-gray-300 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                <label for="navy-radio" class="ms-2 text-sm font-medium text-black">Black</label>
                            </div>
                       </div>
                   
                   <div class="flex flex-col gap-4">
                               <label class="text-black font-semibold text-md" for="cars">Size</label>
                               <select name="c_ukuran" id="c_ukuran" class="rounded-md px-4 py-2 w-[480px]">
                                   <option value="S">S</option>
                                   <option value="M">M</option>
                                   <option value="L">L</option>
                                   <option value="XL">XL</option>
                               </select>
                           </div>
                       
                           <div class="flex flex-col gap-4">
                               <label class="text-black font-semibold text-md" for="cars">Shipment</label>
                               <select name="c_shipment" id="c_shipment" class="rounded-md px-4 py-2 w-[480px]">
                                   <option value="Standard Shipping">Standard Shipping</option>
                                   <option value="Express Shipping">Express Shipping</option>
                                   <option value="Free Shipping">Free Shipping</option>
                               </select>
                           </div>

                           <div class="flex flex-col gap-4">
                               <label class="text-black font-semibold text-md" for="cars">Metode Pembayaran</label>
                               <select name="c_pembayaran" id="c_pembayaran" class="rounded-md px-4 py-2 w-[480px]">
                                   <option value="Debit Card">Debit Card</option>
                                   <option value="QRIS">QRIS</option>
                                   <option value="Cash">Cash</option>
                               </select>
                           </div>

                           <button type='submit' onclick="window.location.href='/confirmation'" class="bg-slate-600 hover:bg-[#14213D] text-white py-2 px-4 transition ease-in-out">
                           <a href="/confirmation">    
                           Bayar
                           </a>
                           </button>
                   </div>
   
                   </form>
               </div>
           </div>
         </div>
   </section>
   <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
  <script>
    AOS.init();
  </script>
  <!-- Display the clicked image -->

<script>
    // Retrieve the query parameter from the URL
    const urlParams = new URLSearchParams(window.location.search);
    const gambar = urlParams.get('gambar');

    // Display the clicked image
    const clickedImage = document.getElementById('clickedImage');
    clickedImage.src = gambar;
</script>
</body>
</html>