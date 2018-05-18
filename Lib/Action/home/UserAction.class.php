<?php
class UserAction extends Action {
    /**
     * 显示账户设置页面
     */
    public function account(){
        if(!empty($_POST)){
            //校验密码和用户名是否正确
            $model_name = new UserModel;
            $info = $model_name ->checkPass($_POST['username'],md5($_POST['userpass']));
            if($info !== false){
                session("insider_name",$info['insider_name']);
                session("insider_pass",md5($info['insider_pass']));
                session("insider",$info);
                $this->display();
            }else{
                $this->redirect("User/login",array(),3,"登录信息错误，请重新登录!!!");
            }
        }else{
            if(isset($_SESSION['insider_name']) && isset($_SESSION['insider_pass'])){
                $this->display();
            }else{
                $this->display();
            }
        }
    }
    /**
     * 退出当前用户功能
     */
    public function dies(){
        session(null);
        session('insider_name',null,-1);
        session('insider_pass',null,-1);
        $this->redirect("User/login");
    }
    /**
     * 显示修改账户页面
     */
    public function alert(){
        $this->display();
    }
    /**
     * 登录页面
     */
    public function login(){
        $this->display();
    }
    /**
     * 注册页面
     */
    public function enroll(){
        $this->display();
    }
    /**
     * 获取注册界面的信息
     */
    public function add(){
        $model_name = D("insider");
        if(!empty($_POST)){
            $data['insider_name'] = $_POST['username'];
            $data['insider_nick'] = $_POST['nick'];
            $data['insider_pass'] = md5($_POST['userpassword']);
            $data['insider_email'] = $_POST['email'];
            $data['insider_time'] = time();
            $data['insider_images'] = "default.jpg";
            $add = $model_name ->add($data);
            if($add){
                $this->redirect("User/login",array(),3,"恭喜你，注册成功");
            }else{
                $this->redirect("User/enroll",array(),3,"注册失败，请重新注册");
            }
        }else{
            $this->redirect("User/enroll",array(),3,"注册失败，没有获取到数据");
        }
    }
    /**
     * 修改昵称
     */
    public function edit_nick(){
        $model_name = D("insider");
        $data['insider_nick'] = $_POST['nick'];
        $edit = $model_name->where("insider_name = '{$_POST['name']}'")->save($data);
        if($edit){
            $this->redirect("User/account",array(),3,"修改成功");
        }else{
            $this->redirect("User/account",array(),3,"修改失败");
        }
    }
    /**
     * 修改密码
     */
    public function editPass(){
        if(!empty($_POST)){
            //校验密码和用户名是否正确
            $model_name = new UserModel;
            $info = $model_name ->checkPass($_POST['name'],md5($_POST['oldpass']));
            if($info !== false){
                $insider_name = D("insider");
                $data['insider_pass'] = md5($_POST['userpassword']);
                $edit_pass = $insider_name ->where("insider_name = '{$_POST['name']}'")->save($data);
                if($edit_pass){
                    $this->redirect("User/account");
                }else{
                    $this->redirect("User/alert",array(),3,"更改密码失败！！！");
                }
            }else{
                $this->redirect("User/alert",array(),3,"输入的旧密码不正确！！！");
            }
        }else{
            $this->redirect("User/alert",array(),3,"更改失败，没有获取到更改的数据");
        }
    }
}