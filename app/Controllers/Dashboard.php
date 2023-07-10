<?php

namespace App\Controllers;

use App\Models\DashboardModel;
use CodeIgniter\Controller;

class Dashboard extends Controller
{
    public $dashboardModel;
    public function __construct(){
        $this->dashboardModel = new dashboardModel();
    }
    public function index()
    {
        $data['title'] = 'Dashboard';
        $data['q'] = "16.054573,120.375732";
        $data['arduino_data'] = $this->dashboardModel->getArduinoData();
        if(!(session()->has('user_id'))){
            return redirect()->to(base_url().'login');
        }

        return view('pages/dashboard_view', $data);
    }

    public function getCurrentArduinoData(){
        $info = $this->dashboardModel->getCurrentArduinoData();
        $q = $info['longitude'].','.$info['latitude'];
        echo "https://google.com/maps?q=".$q."&hl=es;z=14&output=embed";
        //echo '<pre>';
        //print_r($data);
        //echo '</pre>';
    }

    public function getAllOverspeed(){
        $arduino_data = $this->dashboardModel->getAllOverspeed();
        // echo '<pre>';
        // print_r($overspeed);
        // echo '</pre>';

        //print_r($overspeed);
        echo '<table class="table table-hover">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Speed</th>
                        <th>Latitude</th>
                        <th>Longitude</th>
                        <th>Time</th>
                    </tr>
                </thead>
                <tbody>';
                    foreach($arduino_data as $data){
        echo        '<tr class="table-row">
                        <td class="id">'.$data["arduino_id"].'</td>
                        <td class="speed">'.$data["speed"].'</td>
                        <td class="latitude">'.$data["latitude"].'</td>
                        <td class="longitude">'.$data["longitude"].'</td>
                        <td class="datetime">'.date('F j, Y h:i a', strtotime($data['created_at'])).'</td>
                    </tr>';
                    }
        echo    '</tbody>
            </table>';
    }
}
