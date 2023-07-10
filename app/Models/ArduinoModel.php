<?php 
    namespace App\Models;
    use CodeIgniter\Model;

    class ArduinoModel extends Model{

        public function insertData($data){
            $builder = $this->db->table('arduino');
            $builder->insert($data);

            if($this->db->affectedRows() > 0){
                return true;
            }else{
                return false;
            }
        }

    }
?>