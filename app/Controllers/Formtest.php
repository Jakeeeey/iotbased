<?php

namespace App\Controllers;

use App\Models\FormtestModel;
use CodeIgniter\Controller;

class Formtest extends Controller
{
    public $formtestModel;
    public function __construct()
    {
        helper('form');
        $this->formtestModel = new FormtestModel();
    }
    public function index()
    {
        $data['title'] = 'Formtest';
        //$data['q'] = "16.054573,120.375732";
        if (isset($_POST['submit'])) {
            $longitude = $this->request->getVar('longitude');
            $latitude = $this->request->getVar('latitude');
            $speed = $this->request->getVar('speed');
            $created_at = $this->request->getVar('created_at');

            $arduino = [
                'longitude' => $longitude,
                'latitude' => $latitude,
                'speed' => $speed,
                'created_at' => $created_at,
            ];
            return redirect()->to("https://speediboms.online/arduino?longitude=$longitude&latitude=$latitude&speed=$speed&created_at=$created_at");
            //$this->formtestModel->insertArduino($arduino);

        }

        return view('pages/Formtest_view', $data);
    }
}
