<?php 
namespace App\Controllers;
use App\Models\DetailModel;
use CodeIgniter\Controller;

class DetailController extends Controller
{
    public function detailList()
    {
        $DetailModel = new DetailModel();
        $data['users'] = $DetailModel
            ->join('checkout', 'checkout.c_id = detail.d_id')
            ->join('produk', 'produk.p_id = detail.d_id')
            ->join('user', 'user.u_id = detail.d_id')
            ->findAll(); 

        return view('detail_list', $data);
    }

    public function history()
    {
        $DetailModel = new DetailModel();
        $data['users'] = $DetailModel
            ->join('checkout', 'checkout.c_id = detail.d_id')
            ->join('produk', 'produk.p_id = detail.d_id')
            ->join('user', 'user.u_id = detail.d_id')
            ->findAll(); 

        return view('history_list', $data);
    }
}