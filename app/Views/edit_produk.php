<!DOCTYPE html>
<html>

<head>
  <title>Edit Product</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <style>
    .form-container {
      max-width: 500px;
      width: 100%;
    }

    .error {
      display: block;
      padding-top: 5px;
      font-size: 14px;
      color: red;
    }
  </style>
</head>

<body >
<header>
        <div class="px-16 py-8 bg-[#14213D] flex flex-row justify-between">
            <div>
                <h2 class="text-white font-semibold text-xl">
                    Reality Store
                </h2>
            </div>
            <div>
                <a href="/produk-list">
                    <h2 class="text-white font-semibold text-xl transition hover:text-[#FCA311]">Admin</h2>
                </a>
            </div>
        </div>
    </header>
  <div class="h-screen flex items-center justify-center">
    <div class="form-container">
      <form method="post" id="update_produk" name="update_produk" action="<?= site_url('/update-produk') ?>" class="bg-[#14213D] shadow-md rounded p-6">
        <input type="hidden" name="p_id" id="p_id" value="<?php echo $produk_obj['p_id']; ?>">
        <div class="mb-4">
          <label for="p_nama" class="block text-sm font-medium text-white">Nama</label>
          <input type="varchar" name="p_nama" id="p_nama" class="mt-1 p-2 w-full border rounded-md" value="<?php echo $produk_obj['p_nama']; ?>">
        </div>
        <div class="mb-4">
          <label for="p_deskripsi" class="block text-sm font-medium text-white">Deskripsi</label>
          <input type="text" name="p_deskripsi" id="p_deskripsi" class="mt-1 p-2 w-full border rounded-md" value="<?php echo $produk_obj['p_deskripsi']; ?>">
        </div>
        <div class="mb-4">
          <label for="p_warna" class="block text-sm font-medium text-white">Warna</label>
          <input type="varchar" name="p_warna" id="p_warna" class="mt-1 p-2 w-full border rounded-md" value="<?php echo $produk_obj['p_warna']; ?>">
        </div>
        <div class="mb-4">
          <label for="p_ukuran" class="block text-sm font-medium text-white">Ukuran</label>
          <input type="varchar" name="p_ukuran" id="p_ukuran" class="mt-1 p-2 w-full border rounded-md" value="<?php echo $produk_obj['p_ukuran']; ?>">
        </div>
        <div class="mb-4">
          <label for="p_harga" class="block text-sm font-medium text-white">Harga</label>
          <input type="decimal" name="p_harga" id="p_harga" class="mt-1 p-2 w-full border rounded-md" value="<?php echo $produk_obj['p_harga']; ?>">
        </div>
        <div class="mb-4">
          <label for="p_gambar" class="block text-sm font-medium text-white">Gambar</label>
          <input type="longtext" name="p_gambar" id="p_gambar" class="mt-1 p-2 w-full border rounded-md" value="<?php echo $produk_obj['p_gambar']; ?>">
        </div>
        <div class="mb-4">
        <button type="submit" class="w-full bg-[#FCA311] hover:bg-white hover:text-[#14213D] font-semibold text-white py-2 px-4 rounded-md transition ease-in-out">Update Product</button>
        </div>
      </form>
    </div>
  </div>

  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.2/jquery.validate.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.2/additional-methods.min.js"></script>
  <script>
    if ($("#update_produk").length > 0) {
      $("#update_produk").validate({
        rules: {
          p_nama: {
            required: true,
          },
          p_deskripsi: {
            required: true,
          },
          p_warna: {
            required: true,
          },
          p_ukuran: {
            required: true,
          },
          p_harga: {
            required: true,
          },
          p_gambar: {
            required: true,
          },
        },
        messages: {
          p_nama: {
            required: "Name is required.",
          },
          p_deskripsi: {
            required: "Description is required.",
          },
          p_warna: {
            required: "Color is required.",
          },
          p_ukuran: {
            required: "Size is required.",
          },
          p_harga: {
            required: "Price is required.",
          },
          p_gambar: {
            required: "Image is required.",
          },
        },
      });
    }
  </script>
</body>

</html>
