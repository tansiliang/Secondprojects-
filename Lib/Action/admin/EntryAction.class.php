<?php
class EntryAction extends Action{
    /**
     * 显示小图标列表
     */
    public function entry(){
        $model_name = D("entry");
        $list = $model_name ->order("entry_order")->select();
        $this->assign("list",$list);
        $this->display();
    }
    /**
     * 显示添加页面
     */
    public function entry_add(){
        $this->assign("show",array('1'=>'显示','0'=>'隐藏'));
        $this->assign("sel",1);
        $this->display();
    }
    /**
     * 添加页面信息
     */
    public function add(){
        $model_name = D("entry");
        if(!empty($_POST)){
            $data['entry_name'] = $_POST['entry_name'];
            $data['entry_url'] = $_POST['entry_url'];
            $data['entry_order'] = $_POST['entry_order'];
            $data['entry_show'] = $_POST['entry_show'];
            $data['entry_time'] = time();
            import("@.components.UploadedTools");
            $upload_name = new UploadedTools(UPLOADED_DIR,100000000);
            if($upload = $upload_name->Uploaded($_FILES['entry_images'],'entry_','Entry')){
                $data['entry_images'] = $upload;
            }
            $add = $model_name->add($data);
            if($add){
                $this->redirect("Entry/entry");
            }else{
                $this->redirect("Entry/entry_add",array(),3,"添加失败");
            }
        }else{
            
            $this->redirect("Entry/entry_add",array(),3,"添加失败,没有获取到数据");
        }
    }
    /**
     * 显示编辑页面
     */
    public function entry_edit($id){
        $model_name = D("entry");
        $list = $model_name->getByentry_id($id);
        $sel = $list['entry_show']==1?1:0;
        $this->assign("list",$list);
        $this->assign("show",array('1'=>'显示','0'=>'隐藏'));
        $this->assign("sel",$sel);
        $this->display();
    }
    /**
     * 更改编辑页面
     */
    public function edit(){
        $model_name = D("entry");
        if(!empty($_POST)){
            $data["entry_id"] = $_POST['entry_id'];
            $data["entry_name"] = $_POST['entry_name'];
            $data["entry_url"] = $_POST['entry_url'];
            $data["entry_order"] = $_POST['entry_order'];
            $data["entry_show"] = $_POST['entry_show'];
            import("@.components.UploadedTools");
            if($_FILES['entry_imgthumn']['name'] != ""){
                $upload_name = new UploadedTools(UPLOADED_DIR,1000000000);
                if($upload = $upload_name->Uploaded($_FILES['entry_imgthumn'],"entry_","Entry")){
                $data['entry_images'] = $upload;
                }
            }else{
                $data['entry_images'] = $_POST['img_images'];
            }
            $edit = $model_name->where("entry_id = '{$data['entry_id']}'")->save($data);
            if($edit){
                $this->redirect("Entry/entry");
            }else{
                $this->redirect("Entry/entry",array(),3,"编辑失败");
            }
        }else{
            $this->redirect("Entry/entry",array(),3,"创建失败，没有获取到数据");
        }
    }


    /**
     * 删除功能
     */
    public function del($id){
        $model_name = D("entry");
        $del = $model_name->delete($id);
        if($del){
            $this->redirect("Entry/entry");
        }else{
            $this->redirect("Entry/entry",array(),3,'删除失败');
        }
    }
}