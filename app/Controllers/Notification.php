<?php

namespace App\Controllers;

use App\Models\NotificationModel;
use CodeIgniter\Controller;

class Notification extends Controller
{
    public $notificationModel;
    public function __construct(){
        $this->notificationModel = new NotificationModel();
    }
    public function index()
    {
        $data['title'] = 'Notification';
        if(!(session()->has('user_id'))){
            return redirect()->to(base_url()."login");
        }

        return view('pages/notification_view', $data);
    }
}
