<?php 
    namespace App\Models;
    use CodeIgniter\Model;

    class DashboardModel extends Model{
        public function getArduinoData(){
            $builder = $this->db->table('arduino');
            $builder->select();
            $builder->orderBy('arduino_id', "DESC");
            $result = $builder->get();

            if(count($result->getResultArray()) > 0){
                return $result->getResultArray();
            }else{
                return false;
            }
        }

        public function getCurrentArduinoData(){
            $builder = $this->db->table('arduino');
            $builder->select();
            $builder->orderBy('arduino_id', "DESC");
            $builder->limit(1);
            $result = $builder->get();
            
            if(count($result->getRowArray()) > 0){
                return $result->getRowArray();
            }else{
                return false;
            }
        }

        public function getAllOverspeed(){
            $builder = $this->db->table('arduino');
            $builder->select();
            $builder->where('speed >=', 40);
            $result = $builder->get();
            
            if(count($result->getResultArray()) > 0){
                return $result->getResultArray();
            }else{
                return false;
            }
        }
    }
?>