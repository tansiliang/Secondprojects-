<?php
class LoginModel extends Model{
    public function checkNamePwd($name,$pass){
        
        //检查用户名是否存在
        $info = D('admin_user');
        $name_info = $info->getByad_username($name);
        //用户名如果存在，就把对应的密码信息获取到，然后与用户传递过来的密码进行比较
        if($name_info != null){
            if($name_info['ad_userpass'] != $pass){
                //用户名存在，密码不正确
                return false;
            }else{
                return $name_info;
            }
        }else{
            //用户名不存在
            return false;
        }
    }
}