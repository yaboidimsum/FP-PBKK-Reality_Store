<?php
namespace App\Models;
use CodeIgniter\Model;

class CheckoutModel extends Model
{
    protected $table = 'checkout';
    protected $primaryKey = 'c_id';
    protected $allowedFields = [
        'c_tanggal', 'c_warna', 'c_ukuran', 
        'c_shipment', 'c_pembayaran',
    ];
    
    protected $useTimestamps = false; 
    protected $beforeInsert = ['addTimestamp'];
    protected $beforeUpdate = ['updateTimestamp'];

    protected function addTimestamp(array $data)
    {
        // Set timezone to WIB
        date_default_timezone_set('Asia/Jakarta');
        // Add timestamp to the data before inserting
        $data['c_tanggal'] = date('Y-m-d H:i:s');
        return $data;
    }

    protected function updateTimestamp(array $data)
    {
        // Set timezone to WIB
        date_default_timezone_set('Asia/Jakarta');
        // Update timestamp to the data before updating
        $data['c_tanggal'] = date('Y-m-d H:i:s');
        return $data;
    }
}
