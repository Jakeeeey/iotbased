<?php

namespace App\Controllers;

use App\Models\LoginModel;
use CodeIgniter\Controller;

class Login extends Controller
{
    public $loginModel;
    public function __construct()
    {
        helper('form');
        $this->loginModel = new LoginModel();
    }
    public function index()
    {
        $data['title'] = 'Login';

        if (isset($_POST['login'])) {
            $username = $this->request->getVar('username');
            $password = $this->request->getVar('password');
            //echo $username . $password;
            $userdata = $this->loginModel->verifyUsername($username);
            if ($userdata['username'] == $username) {
                if ($userdata['password'] == $password) {
                    session()->set('user_id', $userdata['user_id']);
                    return redirect()->to(base_url() . "dashboard");
                } else {
                    session()->setTempdata('error', 'Sorry! email or password does not match', 3);
                }
            } else {
                session()->setTempdata('error', 'Sorry! email or password does not match', 3);
            }
        }

        return view('pages/login_view', $data);
    }

    public function logout()
    {
        session()->remove('user_id'); 
        session()->destroy('user_id');
        return redirect()->to(base_url() . "login");
    }
}
