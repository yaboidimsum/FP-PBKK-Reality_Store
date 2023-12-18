<?php 
namespace App\Controllers;
use App\Models\UserModel;
use CodeIgniter\Controller;

class UserCrud extends Controller
{
    
    public function admin(){
        $userModel = new UserModel();
        $data['users'] = $userModel->orderBy('u_id', 'ASC   ')->findAll();
        return view('user_view', $data);
    }

    public function create(){
        return view('add_user');
    }
 
    public function store() {
        $userModel = new UserModel();
        $data = [
            'u_nama' => $this->request->getVar('u_nama'),
            'u_telepon'  => $this->request->getVar('u_telepon'),
            'u_email'  => $this->request->getVar('u_email'),
            'u_pass'  => $this->request->getVar('u_pass'),
            'u_alamat'  => $this->request->getVar('u_alamat'),
        ];
        $userModel->insert($data);
        return $this->response->redirect(site_url('/user-list'));
    }

    public function singleUser($id = null){
        $userModel = new UserModel();
        $data['user_obj'] = $userModel->where('u_id', $id)->first();
        return view('edit_user', $data);
    }

    public function update(){
        $userModel = new UserModel();
        $id = $this->request->getVar('u_id');
        $data = [
            'u_nama' => $this->request->getVar('u_nama'),
            'u_telepon'  => $this->request->getVar('u_telepon'),
            'u_email'  => $this->request->getVar('u_email'),
            'u_pass'  => $this->request->getVar('u_pass'),
            'u_alamat'  => $this->request->getVar('u_alamat'),
        ];
        $userModel->update($id, $data);
        return $this->response->redirect(site_url('/user-list'));
    }

    public function delete($id = null){
        $userModel = new UserModel();
        $data['user'] = $userModel->where('u_id', $id)->delete($id);
        return $this->response->redirect(site_url('/user-list'));
    }    

}