<?php 
    namespace App\Models;
    use CodeIgniter\Model;

    class FormtestModel extends Model{

        public function insertArduino($arduino){
            $builder = $this->db->table('arduino');
            $builder->insert($arduino);

            if($this->db->affectedRows() > 0){
                return true;
            }else{
                return false;
            }
        }
        
    }
?>