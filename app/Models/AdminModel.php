<?php 
namespace App\Models;
use CodeIgniter\Model;

class AdminModel extends Model
{
    protected $table = 'admin';

    protected $primaryKey = 'a_id';
    
    protected $allowedFields = ['a_nama', 'a_email', 'a_pass'];
}