<?php
class RotationAction extends Action{
    /**
     * 显示页面
     */
    public function rotation(){
        $model_name = D("rotation");
        $list = $model_name->order("rota_order")->select();
        $this->assign("list",$list);
        $this->display();
    }
    /**
     * 显示添加页面
     */
    public function rotation_add(){
        $this->assign("show",array('1'=>'显示','0'=>'隐藏'));
        $this->assign("sel",1);
        $this->display();
    }
    /**
     * 获取添加数据
     */
    public function add(){
        $model_name = D("rotation");
        if(!empty($_POST)){
            $data['rota_name'] = $_POST['rota_name'];
            $data['rota_show'] = $_POST['rota_show'];
            $data['rota_order'] = $_POST['rota_order'];
            $data['rota_time'] = time();
            import("@.components.UploadedTools");
            $upload_name = new UploadedTools(UPLOADED_DIR,100000000);
            if($upload = $upload_name->Uploaded($_FILES['rota_images'],'rota_','Rotation')){
                $data['rota_images'] = $upload;
                import("@.components.ImagesTools");
                $thumn_name = new ImagesTools;
                $data['rota_thumn'] = $thumn_name->ImageMake(UPLOADED_DIR.$upload,'100','100','Rotation');
            }
            $add = $model_name->add($data);
            if($add){
                $this->redirect("Rotation/rotation");
            }else{
                $this->redirect("Rotation/rotatioin_add",array(),3,"添加失败");
            }
        }
    }
    /**
     * 获取编辑页面
     */
    public function rotation_edit(){
        $model_name = D("rotation");
        $list = $model_name->getByrota_id($_GET['id']);
        $sel = $list['rota_show']==1?1:0;
        $this->assign("list",$list);
        $this->assign("show",array('1'=>'显示','0'=>'隐藏'));
        $this->assign("sel",$sel);
        $this->display();
    }
    /**
     * 更改编辑页面的信息
     */
    public function edit(){
        $model_name = D("rotation");
        if(!empty($_POST)){
            $data['rota_id'] = $_POST['rota_id'];
            $data["rota_name"] = $_POST['rota_name'];
            $data["rota_show"] = $_POST['rota_show'];
            $data["rota_order"] = $_POST['rota_order'];
            import("@.components.UploadedTools");
            if($_FILES['rota_imgthumn']['name'] != ""){
                $upload_name = new UploadedTools(UPLOADED_DIR,1000000000);
                if($upload = $upload_name->Uploaded($_FILES['rota_imgthumn'],"rotation_","Rotation")){
                    $data['rota_images'] = $upload;
                    import("@.components.ImagesTools");
                    $thumn_name = new ImagesTools;
                    $data['rota_thumn'] = $thumn_name->ImageMake(UPLOADED_DIR.$upload,'100','100','Rotation');
                }
            }else{
                    $data['rota_images'] = $_POST['rota_images'];
                    $data['rota_thumn'] = $_POST['rota_thumn'];
            }
            $edit = $model_name->where("rota_id = '{$data['rota_id']}'")->save($data);
            if($edit){
                $this->redirect("Rotation/rotation");
            }else{
                $this->redirect("Rotation/rotation_edit",array("id"=>"{$data['rota_id']}"),3,"更改失败");
            }
        }else{
            $this->redirect("Rotation/rotation_edit",array("id"=>"{$data['rota_id']}"),3,"更改失败");
        }
    }


    /**
     * 删除功能
     */
    public function del($id){
        $model_name = D("rotation");
        $del = $model_name->delete($id);
        if($del){
            $this->redirect("Rotation/rotation");
        }else{
            $this->redirect("Rotation/rotation",array(),3,'删除失败');
        }
    }
}