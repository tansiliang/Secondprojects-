<?php
class UserModel extends Model{
    /**
     * 验证用户名
     * @param $name string 
     * @param $pass string 
     * @return bool
     */
    public function checkPass($name,$pass){
        $model = D("insider");
        $name_info = $model->getByinsider_name($name);
        
        if($name_info != null){
            if($name_info['insider_pass'] !== $pass){
                return false;
            }else{
                return $name_info;
            }
        }else{
            return false;
        }
    }
}