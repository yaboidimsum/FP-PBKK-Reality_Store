<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reality Store</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href='https://fonts.googleapis.com/css?family=Inter' rel='stylesheet'>
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
<header class="px-16 py-4 bg-white flex flex-row gap-8 z-[999999] w-full justify-between items-center">
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
<div class="container mx-auto mt-4">
    <?php
    if(isset($_SESSION['msg'])){
        echo $_SESSION['msg'];
    }
    ?>
<div class="flex flex-row gap-8 items-center">
            <h2 class="text-2xl font-medium">Your History Transaction</h2>
        </div>

<?php if($users): ?>
    <?php foreach($users as $user): ?>
    <hr class="h-px my-8 bg-gray-200 border-0">
    <div class="px-6 flex flex-col gap-16">
        <!--  -->
            <div class="flex flex-col gap-8">
                <div class="flex flex-row w-full justify-between item-center ">
                    <div class="flex flex-row gap-8 items-center ">
                    <img src="<?php echo $user['p_gambar']; ?>" class="w-[10rem]">
                        <div class="flex flex-col gap-2">
                            <h2>Reality Club</h2>
                            <h2><?= $user['p_nama']; ?></h2>
                            <div class="flex flex-row gap-1 text-slate-400">
                                <h2><?php echo $user['c_warna']; ?></h2>
                                <span>,</span>
                                <h2><?php echo $user['c_ukuran']; ?></h2>
                            </div>
                        </div>
                     </div>
                     <div class="flex flex-row justify-between w-3/5 items-center ">
                         <div class=" flex justify-center items-center px-16">
                             <h2 class="font-semibold text-sm"><?php echo $user['p_harga']; ?></h2>
                         </div>
                         <div class=" flex justify-center items-center px-16">
                             <h2 class="font-semibold text-sm"><?php echo $user['c_shipment']; ?></h2>
                         </div>
                         <div class=" flex justify-center items-center px-16">
                             <h2 class="font-semibold text-sm"><?php echo $user['c_pembayaran']; ?></h2>
                         </div>
                     </div>
                </div>
            </div>
    </div>
        <?php endforeach; ?>
        <?php endif; ?>
    </div>
</section>
    

</body>
</html>
