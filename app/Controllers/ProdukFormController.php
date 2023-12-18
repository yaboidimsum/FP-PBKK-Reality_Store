<?php
namespace App\Controllers;
use App\Models\ProdukForm;
use CodeIgniter\Controller;

class ProdukFormController extends Controller{
    public function create(){
        return view('produk_formuser');
    }

    public function confirm(){
        return view('produk_formuser');
    }
}