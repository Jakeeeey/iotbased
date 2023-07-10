<?php 
    namespace App\Models;
    use CodeIgniter\Model;

    class LoginModel extends Model{

        public function verifyUsername($username){
            $builder = $this->db->table('users');
            $builder->select();
            $builder->where('username', $username);
            $result = $builder->get();

            if(count($result->getResultArray()) > 0){
                return $result->getRowArray();
            }else{
                return false;
            }
        }

    }
?>