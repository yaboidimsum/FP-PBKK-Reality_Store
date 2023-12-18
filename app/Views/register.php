<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href='https://fonts.googleapis.com/css?family=Inter' rel='stylesheet'>
    <script src="https://cdn.tailwindcss.com"></script>
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
    

    .rolling-image-container {
            position: relative;
        }

        .rolling-image {
            width: 100%;
            position: absolute;
            top: 0;
            left: 0;
            opacity: 1;
            transition: opacity 1s ease-in-out; /* Fade transition duration */
        }
    </style>
</head>
<body>
    <header class="px-16 py-4 bg-white border border-red-500 flex flex-row gap-8 z-[999999] w-full justify-center items-center">
        <div>
            <a href="/" class="text-black mnt font-semibold text-xl">
                Reality Store
            </a>
        </div>
        <div class="flex flex-row gap-4">
            <a href="/ticket-list">
                <h2 class="text-slate-500 font-semibold text-md transition hover:text-[#2F3E5D]">Music</h2>
            </a>
            <a href="/myticket">
                <h2 class="text-slate-500 font-semibold text-md transition hover:text-[#2F3E5D]">Merch</h2>
            </a>
            <a href="/myticket">
                <h2 class="text-slate-500 font-semibold text-md transition hover:text-[#2F3E5D]">Artist</h2>
            </a>
        </div>
    </header>
    <section>
        <div class="flex flex-row min-h-screen">
            <div class="border border-red-500 w-1/2 min-h-screen rolling-image-container">
                <img id="rollingImage" class="rolling-image h-full" src="https://imagetolink.com/ib/Dm765CK6hb.png" alt="Rolling Image">
                <img id="nextImage" class="rolling-image h-full" src="https://imagetolink.com/ib/HoSdBt59B9.png" alt="Next Image" style="opacity: 0;">
            </div>
            <div class="w-1/2 flex flex-col">
                <div class="m-auto">
                    <div class="flex flex-col gap-8">
                        <div class="flex flex-col gap-4">
                            <h2 class="text-black font-semibold text-xl">Nama</h2> 
                            <input name="t_jumlahtiket" id="t_jumlahtiket" type="text" placeholder="Masukan Nama" class="rounded-sm px-4 py-2 w-[480px] border border-[#CACACA]">
                        </div>
                        <div class="flex flex-col gap-4">
                            <h2 class="text-black font-semibold text-xl">Email</h2> 
                            <input name="t_jumlahtiket" id="t_jumlahtiket" type="text" placeholder="Masukan Email" class="rounded-sm px-4 py-2 w-[480px] border border-[#CACACA]">
                        </div>
                        <div class="flex flex-col gap-4">
                            <h2 class="text-black font-semibold text-xl">Nomor Telepon</h2> 
                            <input name="t_jumlahtiket" id="t_jumlahtiket" type="text" placeholder="Masukan Nomor Telepon" class="rounded-sm px-4 py-2 w-[480px] border border-[#CACACA]">
                        </div>
                        <div class="flex flex-col gap-4">
                            <h2 class="text-black font-semibold text-xl">Alamat</h2> 
                            <input name="t_jumlahtiket" id="t_jumlahtiket" type="text" placeholder="Masukan Alamat" class="rounded-sm px-4 py-2 w-[480px] border border-[#CACACA]">
                        </div>
                        <div class="flex flex-col gap-4">
                            <h2 class="text-black font-semibold text-xl">Password</h2> 
                            <input name="t_jumlahtiket" id="t_jumlahtiket" type="password" placeholder="Masukan Password" class="rounded-sm px-4 py-2 w-[480px] border border-[#CACACA]">
                        </div>
                        <div class="flex flex-col gap-4">
                            <h2 class="text-black font-semibold text-xl">Confirm Password</h2> 
                            <input name="t_jumlahtiket" id="t_jumlahtiket" type="password" placeholder="Masukan Konfirmasi Password" class="rounded-md px-4 py-2 w-[480px] border border-[#CACACA]">
                        </div>
                        <div class="flex flex-row justify-end gap-4">
                            <button type='submit' onclick="window.location.href='/confirmation.php'" class="bg-slate-400 hover:bg-slate-700 text-slate-200 font-semibold py-2 px-4 rounded transition ease-in-out">
                                <a href="/confirmation">    
                                Masuk
                                </a>
                            </button>
                            <button type='submit' onclick="window.location.href='/confirmation.php'" class="bg-blue-900 hover:bg-[#14213D] text-white font-semibold py-2 px-4 rounded transition ease-in-out">
                                <a href="/confirmation">    
                                Daftar Akun
                                </a>
                            </button>
                        </div>
                    </div>
                </div>
               
            </div>
        </div>
    </section>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            var images = [
                "https://imagetolink.com/ib/Dm765CK6hb.png",
                "https://imagetolink.com/ib/HoSdBt59B9.png",
                "https://imagetolink.com/ib/ZEwZOA2NM6.png"
            ];

            var currentImageIndex = 0;
            var rollingImage = document.getElementById("rollingImage");
            var nextImage = document.getElementById("nextImage");

            function changeImage() {
                currentImageIndex = (currentImageIndex + 1) % images.length;

                // Crossfade to the next image
                rollingImage.style.opacity = 1;
                nextImage.src = images[currentImageIndex];
                nextImage.style.opacity = 1;

                // Swap image elements after the fade transition
                setTimeout(function() {
                    rollingImage.src = nextImage.src;
                    rollingImage.style.opacity = 1;
                    nextImage.style.opacity = 0;
                }, 1000); // Set the timeout to the same duration as the fade transition
            }

            setInterval(changeImage, 5000); // Change image every 5 seconds
        });
    </script>
</body>
</html>