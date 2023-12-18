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

    <section class="relative text-center">
    <img src="https://imagetolink.com/ib/j9GsehAYeY.png" class="w-full" data-aos="fade" data-aos-delay='300'/>
        <h2 class="absolute top-[50%] left-[50%] translate-x-[-50%] translate-y-[-50%] text-white mnt text-[72px] tracking-wider"  >
            <span data-aos="zoom-out" data-aos-delay='500'>
                REALITY CLUB
            </span>
        </h2>
    </section>

    <section id="about" class="px-6 pt-28">
    <div class="flex flex-row gap-4">
        <div class="  mr-[20rem] w-full"  >
            <h2 class="text-[#000000] mnt text-4xl" data-aos="fade-right" data-aos-delay='500' >ABOUT THE ARTIST</h2>
        </div>
        <div class="flex flex-col gap-8 text-justify" data-aos="fade-left" data-aos-delay='500'>
            <h2>Established in late 2016, Reality Club is an indie-rock band from Jakarta.</h2>
            <h2>Era Patigo on drums, Faiz Novascotia Saripudin on vocals and guitar, Fathia Izzati on vocals and keys, and Nugi Wicaksono on bass, are continuously growing since the release of their first single to the international market.</h2>
            <h2>With eyes set on worldwide presence, they have been starting their expansion in 2019 by playing in Tokyo,
Malaysia, Singapore, Jeddah and also recently completed Online World Tour, playing in online festivals for the
UK, Germany, Singapore, and the USA crowd.</h2>
        </div>
    </div>    
    </section>
    <section class="py-40 ">
        <div class="flex flex-row gap-8">
            <img src="https://imagetolink.com/ib/OYDmQccdG4.png" alt="" class="w-[65rem]" data-aos="fade-up" data-aos-delay='500'>
            <div class="flex flex-col gap-4 justify-end" data-aos="fade-left" data-aos-delay='500'>
                <h2 class="mnt text-5xl">Club Athleisure</h2>
                <h2>Elevate your comfort and style with Reality Club's Athleisure Collection. Our collection features a half-zip sweatshirt in two colorways, paired with matching joggers or short.</h2>
            </div>
        </div>
    </section>

    <section>
        <div class="flex min-h-full">
        <div class="m-auto p-8">
            <div class="grid grid-cols-3 gap-4">
                <?php foreach($users as $user): ?>
                    <div class="flex flex-col gap-8" data-aos="fade-up" data-aos-delay='500'>
                    <a href="/produk-formuser?gambar=<?php echo $user['p_gambar']; ?>" data-gambar="<?php echo $user['p_gambar']; ?>" >
                        <div>
                            <img src="<?php echo $user['p_gambar']; ?>" class="w-[30rem] h-[30rem] object-contain"/> 
                        </div>
                        <div class="flex flex-col gap-4">
                        <h2 class="text-md">Reality Club</h2>
                            <h1 class="text-[#1C1C1C] text-md mnt font-bold tracking-wider "><?php echo $user['p_nama']; ?></h1>
                           
                                    <h3 class="font-bold text-md text-[#1C1C1C] ">Rp.<?php echo $user['p_harga']; ?></h3>
                            </a>
                        </div>
                    </div>
                    <?php endforeach; ?>
             </div>
        </div>
    </section>
    <div class="py-6 px-8 flex justify-center items-center flex-col bg-black gap-8">
        <h2 class="text-white font-semibold text-xl">All Rights to <span class="mnt">Reality Store</span></h2>
        <h2 class="text-white font-md text-sm">2022-2026</h2>
    </div>

    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
  <script>
    AOS.init();
  </script>
  <!-- <script>
    function passImageSrc(imageSrc) {
        sessionStorage.setItem('clickedImageSrc', imageSrc);
    }
</script> -->
</body>
</html>
