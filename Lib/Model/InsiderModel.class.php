<?php
class InsiderModel extends Model{
    public $error_info;
    /**
     * ajax判断当前编辑输入的旧密码是否正确
     * @param $id int 
     * @param $pass int 
     * @return bool
     */
    public function cleckPass($id,$pass){
        $model_name = D("insider");
        $info = $model_name->getByinsider_id($id);
        if($info['insider_pass'] !== $pass){
            $this->error_info = "输入的旧密码不正确";
            return false;
        }else{
            $this->error_info = "<img src='".ADMIN_IMG_URL."yes.gif' />";
            return true;
        }
    }
}