<?php
class IndexModel extends Model{
    //自动加载
    /* protected $_auto = array(
        array('ad_userpass','md5',3,'function'),
        array('ad_salt','',)
    ) */
    public $error_info;
    /**
     * ajax验证编辑输入的旧密码是否正确
     * @param $id int 
     * @param $pass int 
     * @return bool
     */
    public function chackPass($id,$pass){
        $model_name = D("admin_user");
        $name_info = $model_name->getByad_id($id);
        if($name_info['ad_userpass'] != $pass){
            //用户名存在，密码不正确
            $this->error_info = "输入的旧密码不正确";
            return false;
        }else{
            $this->error_info = "<img src='".ADMIN_IMG_URL."yes.gif' />";
            return true;
        }
    }
    /**
     * ajax验证添加的用户名是否已经存在
     * @param $name string 
     * @return bool
     */
    public function chackName($name){
        $model_name = D("admin_user");
        $name_info = $model_name->where("ad_username = '$name'")->count();
        if($name_info > 0){
            //用户名存在，密码不正确
            $this->error_info = "输入的用户名已经存在";
            return false;
        }else{
            $this->error_info = "<img src='".ADMIN_IMG_URL."yes.gif' />";
            return true;
        }
    }
}