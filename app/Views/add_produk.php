<!DOCTYPE html>
<html>

<head>
  <title>Input New Product</title>
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

<body>

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
      <form method="post" id="add_create" name="add_create" action="<?= site_url('/submit-produk') ?>" class="bg-[#14213D] shadow-md rounded p-6">
        <div class="mb-4">
          <label for="nama" class="block text-sm font-medium text-white">Nama</label>
          <input type="varchar" name="p_nama" id="name" class="mt-1 p-2 w-full border rounded-md">
        </div>

        <div class="mb-4">
          <label for="p_deskripsi" class="block text-sm font-medium text-white">Deskripsi</label>
          <input type="text" name="p_deskripsi" id="deskripsi" class="mt-1 p-2 w-full border rounded-md">
        </div>

        <div class="mb-4">
          <label for="warna" class="block text-sm font-medium text-white">Warna</label>
          <input type="varchar" name="p_warna" id="warna" class="mt-1 p-2 w-full border rounded-md">
        </div>

        <div class="mb-4">
          <label for="ukuran" class="block text-sm font-medium text-white">Ukuran</label>
          <input type="varchar" name="p_ukuran" id="ukuran" class="mt-1 p-2 w-full border rounded-md">
        </div>

        <div class="mb-4">
          <label for="harga" class="block text-sm font-medium text-white">Harga</label>
          <input type="decimal" name="p_harga" id="harga" class="mt-1 p-2 w-full border rounded-md">
        </div>

        <div class="mb-4">
          <label for="gambar" class="block text-sm font-medium text-white">Gambar</label>
          <input type="longtext" name="p_gambar" id="gambar" class="mt-1 p-2 w-full border rounded-md">
        </div>

        <div class="mb-4">
          <button type="submit" class="w-full bg-[#FCA311] hover:bg-white hover:text-[#14213D] font-semibold text-white py-2 px-4 rounded-md transition ease-in-out">Insert Product</button>
        </div>
      </form>
    </div>
  </div>

  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.2/jquery.validate.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.2/additional-methods.min.js"></script>
  <script>
    if ($("#add_create").length > 0) {
      $("#add_create").validate({
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
