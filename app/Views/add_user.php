<!DOCTYPE html>
<html>

<head>
  <title>Input New User</title>
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
                <a href="/user-list">
                    <h2 class="text-white font-semibold text-xl transition hover:text-[#FCA311]">Admin</h2>
                </a>
            </div>
        </div>
    </header>
  <div class="h-screen flex items-center justify-center">
    <div class="form-container">
      <form method="post" id="add_create" name="add_create" action="<?= site_url('/submit-user') ?>" class="bg-[#14213D] shadow-md rounded p-6">
        <div class="mb-4">
          <label for="nama" class="block text-sm font-medium text-white">Nama</label>
          <input type="varchar" name="u_nama" id="nama" class="mt-1 p-2 w-full border rounded-md">
        </div>

        <div class="mb-4">
          <label for="telepon" class="block text-sm font-medium text-white">Telepon</label>
          <input type="varchar" name="u_telepon" id="telepon" class="mt-1 p-2 w-full border rounded-md">
        </div>

        <div class="mb-4">
          <label for="email" class="block text-sm font-medium text-white">Email</label>
          <input type="varchar" name="u_email" id="email" class="mt-1 p-2 w-full border rounded-md">
        </div>

        <div class="mb-4">
          <label for="pass" class="block text-sm font-medium text-white">Password</label>
          <input type="varchar" name="u_pass" id="pass" class="mt-1 p-2 w-full border rounded-md">
        </div>

        <div class="mb-4">
          <label for="alamat" class="block text-sm font-medium text-white">Alamat</label>
          <input type="text" name="u_alamat" id="alamat" class="mt-1 p-2 w-full border rounded-md">
        </div>

        <div class="mb-4">
          <button type="submit" class="w-full bg-[#FCA311] hover:bg-white hover:text-[#14213D] font-semibold text-white py-2 px-4 rounded-md transition ease-in-out">Insert User</button>
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
          u_nama: {
            required: true,
          },
          u_telepon: {
            required: true,
          },
          u_email: {
            required: true,
          },
          u_pass: {
            required: true,
          },
          u_alamat: {
            required: true,
          },
        },
        messages: {
          u_nama: {
            required: "Name is required.",
          },
          u_telepon: {
            required: "Phone Number is required.",
          },
          u_email: {
            required: "Email is required.",
          },
          u_pass: {
            required: "Password is required.",
          },
          u_alamat: {
            required: "Address is required.",
          },
        },
      });
    }
  </script>
</body>

</html>
