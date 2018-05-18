<?php
class InsiderAction extends Action{
    /**
     * 显示会员信息页面
     */
    public function insider(){
        $model_name = D("insider");
        $list = $model_name->select();
        $this->assign("list",$list);
        $this->display();
    }
    /**
     * 显示编辑页面的信息
     */
    public function insider_edit(){
        $model_name = D("insider");
        $list = $model_name->getByinsider_id($_GET['id']);
        $this->assign("list",$list);
        $this->display();
    }
    /**
     * 编辑页面传递过来的值
     */
    public function edit(){
        // show_bug($_POST);
        $model_name = D("insider");
        if(!empty($_POST)){
            $data['insider_id'] = $_POST['insider_id'];
            $data['insider_name'] = $_POST['insider_name'];
            $data['insider_pass'] = empty($_POST["oldpass"])?$_POST['insider_userpass']:md5($_POST['insider_password']);//密码
            $data['insider_email'] = $_POST['insider_email'];
            $data['insider_nick'] = $_POST['insider_nick'];
            
            if($_FILES['insider_imgthumn']['name'] != ""){
                import("@.components.UploadedTools");//加载图片上传类文件
                $upload_name = new UploadedTools(UPLOADED_DIR,10000000);
                if($upload = $upload_name->Uploaded($_FILES['insider_imgthumn'],'insider_','Insider')){
                    $data['insider_images'] = $upload;
                }else{
                    $this->redirect("Insider/insider_edit",array("id"=>"{$_POST['insider_id']}"),3,$upload_name->error_info);
                }
            }else{
                $data['insider_images'] = $_POST['img_thumn'];
            }
            $edit = $model_name->save($data);
            if($edit){
                $this->redirect("Insider/insider");
            }else{
                $this->redirect("Insider/insider_edit",array("id"=>"{$_POST['insider_id']}"),3,"编辑失败");
            }
        }else{
            $this->redirect("Insider/insider_edit",array("id"=>"{$_POST['insider_id']}"),3,"编辑失败,没有获取到数据");
        }
    }
    /**
     * ajax判断当前的编辑密码是否正确
     */
    public function ajaxpass(){
        $model_name = new InsiderModel;
        $pass = $model_name->cleckPass($_POST['id'],md5($_POST['insider_pass']));
        if($pass != false){
            echo $model_name->error_info;
        }else{
            echo $model_name->error_info;
        }
    }
    /**
     * 删除功能
     */
    public function del($id){
        $model_name = D("insider");
        $del = $model_name->delete($id);
        if($del){
            $this->redirect("Insider/insider");
        }else{
            $this->redirect("Insider/insider",array(),3,"删除失败");
        }
    }
}