<?php
class IndexAction extends Action {
    /**
     * 显示后台首页
     */
    public function index(){
        if(!empty($_POST)){
            //校验用户名和密码是否正确
            // $model_name = D('admin_user');
            $model_name = new LoginModel;
            $user_info = $model_name->checkNamePwd($_POST['ad_username'],md5($_POST['ad_userpass']));
            //$user_info 如果不等于false，用户名和密码正确
            if($user_info !== false){
                //持久化用户信息
                session('ad_username',$user_info['ad_username']);
                session('ad_userpass',$user_info['ad_userpass']);
                // show_bug($user_info);
                $this->assign("lists",$user_info);
                $this->display();
            }else{
                $this->redirect("Login/login",array(),2,"登录信息错误，请重新登录！！！");
            }
        }else{
            if(isset($_SESSION['ad_username']) || isset($_SESSION['ad_userpass'])){
                $model_name = D("admin_user");
                $info = $model_name ->getByad_username($_SESSION['ad_username']);
                $this->assign("lists",$info);
                $this->display();
            }else{
                $this->redirect("Login/login",array(),3,"请先登录");
            }
        }
    }
    /**
     * 显示管理员列表
     */
    public function admin(){
        $model_name = D("admin_user");
        $list = $model_name->select();
        $this->assign("list",$list);
        $this->display();
    }
    /**
     * 显示添加管理员页面
     */
    public function admin_add(){
        $this->display();
    }
    /**
     * ajax判断当前的用户名是否已经存在了
     */
    public function ajaxadd(){
        $model_name = new IndexModel;
        $info = $model_name->chackName($_POST['ad_username']);
        if($info == false){
            echo $model_name ->error_info;
        }else{
            echo $model_name ->error_info;
        }
    }
    /**
     * 获取添加的信息
     */
    public function add(){
        $model_name = D("admin_user");
        if(!empty($_POST)){
            //tp框架自动收集表单数据的方法
            // $model_name ->create();
            $data['ad_username'] = $_POST['ad_username'];
            $data['ad_userpass'] = md5($_POST['ad_userpass']);
            $data['ad_email'] = $_POST['ad_email'];
            $data['ad_salt'] = mt_rand(1000,99999);
            $data['ad_addtime'] = time();
            $data['ad_updatetime'] = time();
            $data['ad_ip'] = $_SERVER['REMOTE_ADDR'];
            $state = $model_name -> add($data); 
            if($state){
                $this->redirect("Index/admin");
            }else{
                $this->redirect("Index/admin_add",array(),3,"添加失败");
            }
        }else{
            $this->redirect("Index/admin_add",array(),3,"添加失败");
        }
    }
    /**
     * 显示编辑页面
     */
    public function admin_edit(){
        // show_bug($_GET['id']);
        $model_name = D("admin_user");
        $list = $model_name->getByad_id($_GET['id']);
        $this->assign("list",$list);
        $this->display();
    }
    /**
     * 验证输入的旧密码是否是正确的
     */
    public function ajaxedit(){
        $model_name = new IndexModel;
        $info = $model_name->chackPass($_POST['id'],md5($_POST['ad_userpass']));
        if($info == false){
            echo $model_name ->error_info;
        }else{
            echo $model_name ->error_info;
        }
    }
    /**
     * 获取编辑信息的数据
     */
    public function edit(){
        $model_name = D("admin_user");
        if(!empty($_POST)){
            $data['ad_username'] = $_POST['ad_username'];//用户名
            $data['ad_userpass'] = empty($_POST["oldpass"])?$_POST['ad_userpass']:md5($_POST['ad_password']);//密码
            $data['ad_email'] = $_POST['ad_email'];//邮箱
            $data['ad_id'] = $_POST['ad_id'];
            $reg = $model_name->where("ad_id = {$data['ad_id']}")->save($data);
            if($reg){
                $this->redirect("Index/admin");
            }else{
                $this->redirect("Index/admin_edit",array(),3,"编辑失败");
            }
        }else{
            $this->redirect("Index/admin_edit",array(),3,"编辑失败，没有获取到数据");
        }
        
    }
    /**
     * 删除管理员列表
     */
    public function del(){
        $id = $_GET['id'];
        $model_name = D("admin_user");
        $del = $model_name ->delete($id);
        if($del){
            $this->redirect("Index/admin");
        }else{
            $this->redirect("Index/admin",array(),3,'删除失败');
        }
    }
    /**
     * 退出功能
     */
    public function dies(){
        session(null);
        $this->redirect("Login/login");
    }
}