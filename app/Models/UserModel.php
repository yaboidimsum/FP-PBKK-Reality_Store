<?php 
namespace App\Models;
use CodeIgniter\Model;

class UserModel extends Model
{
    protected $table = 'user';

    protected $primaryKey = 'u_id';
    
    protected $allowedFields = ['u_nama', 'u_email','u_telepon', 'u_alamat', 'u_pass'];
}