<?php 
namespace App\Controllers;
use App\Models\CheckoutModel;
use CodeIgniter\Controller;

class CheckoutController extends Controller
{
    public function checkoutList()
    {
        $CheckoutModel = new CheckoutModel();
        $data['users'] = $CheckoutModel->orderBy('c_id', 'ASC')->findAll();
        return view('checkout_list', $data);
    }
    
    public function create(){
        return view('produk_formuser');
    }

    public function store() {
        $CheckoutModel = new CheckoutModel();
        $data = [
            'c_warna' => $this->request->getVar('c_warna'),
            'c_ukuran'  => $this->request->getVar('c_ukuran'),
            'c_pembayaran'  => $this->request->getVar('c_pembayaran'),
            'c_shipment'  => $this->request->getVar('c_shipment'),
            'c_tanggal'  => date('Y-m-d H:i:s'),
            
        ];
        $CheckoutModel->insert($data);
        return $this->response->redirect(site_url('/confirmation'));
    }

    public function confirm(){
        return view('produk_formuser');
    }

}