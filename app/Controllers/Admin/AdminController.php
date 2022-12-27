<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\UserModel;
use CodeIgniter\Session\Session;

class AdminController extends BaseController
{



    public function index()
    {
        return view('Admin/Login');
    }

    public function login()
    {
        $users = new UserModel();
        $username = $this->request->getPost('username');
        $password = $this->request->getPost('password');

        $cek = $users->get()->getRowArray();

        if (($cek['username'] == $username) && ($cek['password'] == $password)) {
            $data = [
                'userdata' => [
                    'username' => $cek['username'],
                    'nama' => $cek['nama'],
                    'logged_in' => true
                ]
            ];

            session()->set($data);
            return redirect()->to(base_url('/dashboard'));
        } else {
            session()->setFlashdata('gagal', 'Username / Password salah');
            return redirect()->to(base_url('/'));
        }

        // return view('Admin/Login');
    }

    public function logout()
    {
        session()->destroy();
        return redirect()->to(base_url('/'));
    }
}
