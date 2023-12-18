<?php 
namespace App\Models;
use CodeIgniter\Model;

class ProdukModel extends Model
{
    protected $table = 'produk';

    protected $primaryKey = 'p_id';
    
    protected $allowedFields = ['p_nama', 'p_deskripsi', 'p_warna', 'p_ukuran', 'p_harga', 'p_gambar']; 
}