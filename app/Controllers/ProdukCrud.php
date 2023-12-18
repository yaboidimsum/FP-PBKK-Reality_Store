<?php 
namespace App\Controllers;
use App\Models\ProdukModel;
use CodeIgniter\Controller;

class ProdukCrud extends Controller
{
    public function admin(){
        $produkModel = new ProdukModel();
        $data['users'] = $produkModel->orderBy('p_id', 'ASC   ')->findAll();
        return view('produk_view', $data);
    }
    
    public function index(){
        $produkModel = new ProdukModel();
        $data['users'] = $produkModel->orderBy('p_id', 'ASC   ')->findAll();
        return view('home', $data);
    }

    public function create(){
        return view('add_produk');
    }

    public function store() {
        $produkModel = new ProdukModel();
        $data = [
            'p_nama' => $this->request->getVar('p_nama'),
            'p_deskripsi'  => $this->request->getVar('p_deskripsi'),
            'p_warna'  => $this->request->getVar('p_warna'),
            'p_ukuran'  => $this->request->getVar('p_ukuran'),
            'p_harga'  => $this->request->getVar('p_harga'),
            'p_gambar'  => $this->request->getVar('p_gambar'),
        ];
        $produkModel->insert($data);
        return $this->response->redirect(site_url('/produk-list'));
    }

    public function singleProduk($id = null){
        $produkModel = new ProdukModel();
        $data['produk_obj'] = $produkModel->where('p_id', $id)->first();
        return view('edit_produk', $data);
    }

    public function update(){
        $produkModel = new ProdukModel();
        $id = $this->request->getVar('p_id');
        $data = [
            'p_nama' => $this->request->getVar('p_nama'),
            'p_deskripsi'  => $this->request->getVar('p_deskripsi'),
            'p_warna'  => $this->request->getVar('p_warna'),
            'p_ukuran'  => $this->request->getVar('p_ukuran'),
            'p_harga'  => $this->request->getVar('p_harga'),
            'p_gambar'  => $this->request->getVar('p_gambar'),
        ];
        $produkModel->update($id, $data);
        return $this->response->redirect(site_url('/produk-list'));
    }
 
    public function delete($id = null){
        $produkModel = new ProdukModel();
        $data['user'] = $produkModel->where('p_id', $id)->delete($id);
        return $this->response->redirect(site_url('/produk-list'));
    }    

    public function confirmation(){
        $produkModel = new ProdukModel();
        $data['users'] = $produkModel->orderBy('p_id', 'ASC   ')->findAll();
        return view('confirmation', $data);
    }

}