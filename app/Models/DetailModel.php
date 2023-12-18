<?php 
namespace App\Models;
use CodeIgniter\Model;

class DetailModel extends Model
{
	protected $table = 'detail'; 

	protected $primaryKey = 'd_id';

    protected $allowedFields = [
        'u_nama', 
        'p_gambar', 'p_nama', 'p_harga',
        'c_warna', 'c_ukuran', 'c_tanggal', 
        'c_shipment', 'c_pembayaran' 
    ];
}