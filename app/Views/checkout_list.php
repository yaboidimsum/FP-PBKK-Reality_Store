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
  <?php
  if(isset($_SESSION['msg'])){
    echo $_SESSION['msg'];
  }
  ?>
  <div class="mt-3">
    <table class="table-auto w-full border border-collapse border-gray-400" id="checkout-list">
      <thead>
        <tr>
        <th class="border p-2">Nomor</th>
          <th class="border p-2">Tanggal</th>
          <th class="border p-2">Warna</th>
          <th class="border p-2">Ukuran</th>
          <th class="border p-2">Shipment</th>
          <th class="border p-2">Pembayaran</th>
        </tr>
      </thead>
      <tbody>
          <?php if($users): ?>
         <?php $nomor = 1 ?> 
          <?php foreach($users as $user): ?>
          <tr>
          <td class="border p-2"><?php echo $nomor++; ?></td>
             <td class="border p-2"><?php echo $user['c_tanggal']; ?></td> 
             <td class="border p-2"><?php echo $user['c_warna']; ?></td>
             <td class="border p-2"><?php echo $user['c_ukuran']; ?></td>             
             <td class="border p-2"><?php echo $user['c_shipment']; ?></td>
             <td class="border p-2"><?php echo $user['c_pembayaran']; ?></td>
             <td class="border p-2">
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
    $(document).ready(function () {
      $('#checkout-list').DataTable();
  });
</script>
</body>
</html>