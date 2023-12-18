<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Reality Store</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body >

<header>
        <div class="px-16 py-8 bg-[#14213D] flex flex-row justify-between">
            <div class="flex flex-row gap-8">
                <a href="/" class="text-white font-semibold text-xl">
                    Reality Store
                </a>
                <div class="flex flex-row items-center gap-8">
                  <a href="/checkout-list" class="text-white font-semibold text-md hover:text-[#FCA311] transition">Checkout</a>
                  <a href="/detail-list" class="text-white font-semibold text-md hover:text-[#FCA311] transition">Detail</a>
                  <a href="/user-list" class="text-white font-semibold text-md hover:text-[#FCA311] transition">User</a>
                  <a href="/produk-list" class="text-white font-semibold text-md hover:text-[#FCA311] transition">Produk</a>
                </div>
            </div>
            <div>
                <a href="/checkout-list">
                    <h2 class="text-white font-semibold text-xl transition hover:text-[#FCA311]">Admin</h2>
                </a>
            </div>
        </div>
    </header>

    <div class="container mx-auto mt-4">
  <div class="flex justify-end mb-2">
    <a href="<?= site_url('/user-form') ?>" class="bg-green-500 hover:bg-green-600 text-white py-2 px-4 rounded">Tambah User</a>
  </div>
  <?php
  if(isset($_SESSION['msg'])){
    echo $_SESSION['msg'];
  }
  ?>
  <div class="mt-3">
    <table class="table-auto w-full border border-collapse border-gray-400" id="user-list">
      <thead>
        <tr>
          <th class="border p-2">Nomor</th>
          <th class="border p-2">Nama</th>
          <th class="border p-2">Telepon</th>
          <th class="border p-2">Email</th>
          <th class="border p-2">Password</th>
          <th class="border p-2">Alamat</th>
        </tr>
      </thead>
      <tbody>
          <?php if($users): ?>
         <?php $nomor = 1 ?> 
          <?php foreach($users as $user): ?>
          <tr>
             <td class="border p-2"><?php echo $nomor++; ?></td>
             <td class="border p-2"><?php echo $user['u_nama']; ?></td>
             <td class="border p-2"><?php echo $user['u_telepon']; ?></td>
             <td class="border p-2"><?php echo $user['u_email']; ?></td>
             <td class="border p-2"><?php echo $user['u_pass']; ?></td>
             <td class="border p-2"><?php echo $user['u_alamat']; ?></td>
             <td class="border p-2">
             <div class="flex flex-row">
              <a href="<?php echo base_url('edit-user/'.$user['u_id']);?>" class="bg-blue-500 hover:bg-blue-600 text-white py-1 px-2 rounded-sm text-sm">Edit</a>
              <a href="<?php echo base_url('delete-user/'.$user['u_id']);?>" class="bg-red-500 hover:bg-red-600 text-white py-1 px-2 rounded-sm text-sm ml-1">Delete</a>
              </div>
              </td>
          </tr>
         <?php endforeach; ?>
         <?php endif; ?>
       </tbody>
     </table>
  </div>
</div>
 
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css">
<script type="text/javascript" src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
<script>
    $(document).ready( function () {
      $('#user-list').DataTable();
  } );
</script>
</body>
</html>