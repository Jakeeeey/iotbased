<?php

namespace App\Controllers;

use App\Models\ArduinoModel;
use CodeIgniter\Controller;

class Arduino extends Controller
{
    public $arduinoModel;
    public function __construct(){
        $this->arduinoModel = new ArduinoModel();
    }
    public function index()
    {
        //POST page to receive data
        $longitude = $_GET["longitude"];
        $latitude = $_GET["latitude"];
        $speed = $_GET["speed"];
        //$created_at = $_GET["created_at"];

        //GET page to receive data
        // $longitude = $_GET["longitude"];
        // $latitude = $_GET["latitude"];
        // $speed = $_GET["speed"];
        //$time = $_POST["time"];

        $data = [
            'longitude' => $longitude,
            'latitude' => $latitude,
            'speed' => $speed,
            //'created_at' => $created_at
        ];

        if($this->arduinoModel->insertData($data)){
            echo "Data inserted succesfully";
        }else{
            echo "Data doesn't send";
        }


        //return view('pages/dashboard_view', $data);
    }
}
