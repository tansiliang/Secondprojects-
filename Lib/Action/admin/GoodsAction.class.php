<?php
class GoodsAction extends Action{
    /**
     * 显示列表信息
     */
    public function goods(){
        $model_name = D('goods');
        $list = $model_name->order("goods_order")->select();
        $this->assign("list",$list);
        $this->display();
    }
    /**
     * 显示添加页面
     */
    public function goods_add(){
        $category_name = new CategoryModel;
        $link = $category_name->getTreeList();
        $this->assign("link",$link);
        $this->assign("show",array('1'=>'上架','0'=>'下架'));
        $this->assign("sel",1);
        $this->assign("groom",array('1'=>'推荐','0'=>'不推荐'));
        $this->display();
    }
    /**
     * 获取添加页面的信息
     */
    public function add(){
        $model_name = D("goods");
        if(!empty($_POST)){
            $data['goods_name'] = $_POST['goods_name'];
            $data['goods_sn'] = $_POST['goods_sn'];
            $data['goods_cateid'] = $_POST['goods_cateid'];
            $data['goods_price'] = $_POST['goods_price'];
            $data['is_best'] = isset($_POST['is_best'])?$_POST['is_best']:0;
            $data['is_new'] = isset($_POST['is_new'])?$_POST['is_new']:0;
            $data['is_hot'] = isset($_POST['is_hot'])?$_POST['is_hot']:0;
            $data['goods_stutas'] = 0|$data['is_best']|$data['is_new']|$data['is_hot'];
            $data['goods_desc'] = $_POST['goods_desc'];
            $data['goods_number'] = $_POST['goods_number'];
            $data['goods_show'] = $_POST['goods_show'];
            $data['goods_order'] = $_POST['goods_order'];
            $data['goods_groom'] = $_POST['goods_groom'];
            $data['add_time'] = time();
            $data['goods_updatetime'] = time();
            import("@.components.UploadedTools");
            $upload_name = new UploadedTools(UPLOADED_DIR,100000000);
            if($upload = $upload_name->Uploaded($_FILES['goods_images'],'goods_','Goods')){
                $data['goods_images'] = $upload;
                import("@.components.ImagesTools");
                $thumn_name = new ImagesTools;
                $data['goods_thumn'] = $thumn_name->ImageMake(UPLOADED_DIR.$upload,'100','100','Goods');
            }
            $add = $model_name->add($data);
            if($add){
                $this->redirect("Goods/goods");
            }else{
                $this->redirect("Goods/goods_add",array(),3,'添加失败');
            }
        }else{
            $this->redirect("Goods/goods_add",array(),3,"添加失败，没有获取到数据");
        }
    }
    /**
     * 显示编辑页面
     */
    public function goods_edit(){
        $model_name = D("goods");
        $category_name = new CategoryModel;
        $id = $_GET['id'];
        $list = $model_name ->getBygoods_id($id);
        $link = $category_name->getTreeList();
        $sel = $list['goods_show']==1?1:0;
        $groom_sel = $list['goods_groom']==1?1:0;
        $this->assign("list",$list);
        $this->assign("link",$link);
        $this->assign("show",array('1'=>'上架','0'=>'下架'));
        $this->assign("sel",$sel);
        $this->assign("groom",array('1'=>'推荐','0'=>'不推荐'));
        $this->assign("groom_sel",$groom_sel);
        $this->display();
    }
    /**
     * 获取编辑的信息
     */
    public function edit(){
        $model_name = D("goods");
        if(!empty($_POST)){
            $data['goods_name'] = $_POST['goods_name'];
            $data['goods_sn'] = $_POST['goods_sn'];
            $data['goods_cateid'] = $_POST['goods_cateid'];
            $data['goods_price'] = $_POST['goods_price'];
            $data['is_best'] = isset($_POST['is_best'])?$_POST['is_best']:0;
            $data['is_new'] = isset($_POST['is_new'])?$_POST['is_new']:0;
            $data['is_hot'] = isset($_POST['is_hot'])?$_POST['is_hot']:0;
            $data['goods_stutas'] = 0|$data['is_best']|$data['is_new']|$data['is_hot'];
            $data['goods_desc'] = $_POST['goods_desc'];
            $data['goods_number'] = $_POST['goods_number'];
            $data['goods_show'] = $_POST['goods_show'];
            $data['goods_order'] = $_POST['goods_order'];
            $data['goods_groom'] = $_POST['goods_groom'];
            $data['goods_updatetime'] = time();
            import("@.components.UploadedTools");
            if($_FILES['goods_imgthumn']['name'] != ""){
                $upload_name = new UploadedTools(UPLOADED_DIR,1000000000);
                if($upload = $upload_name->Uploaded($_FILES['goods_imgthumn'],"goods_","Goods")){
                    $data['goods_images'] = $upload;
                    import("@.components.ImagesTools");
                    $thumn_name = new ImagesTools;
                    $data['goods_thumn'] = $thumn_name->ImageMake(UPLOADED_DIR.$upload,'100','100','Goods');
                }
            }else{
                    $data['goods_images'] = $_POST['goods_images'];
                    $data['goods_thumn'] = $_POST['goods_thumn'];
            }
            $data['goods_id'] = $_POST['goods_id'];
            $edit = $model_name->where("goods_id = '{$data['goods_id']}'")->save($data);
            if($edit){
                $this->redirect("Goods/goods");
            }else{
                $this->redirect("Goods/goods_edit",array(),3,"更改失败");
            }
        }else{
            $this->redirect("Goods/goods_edit",array(),3,"更改失败，没有获取到数据");
        }
    }

    /**
     * 删除功能
     */
    public function del($id){
        $model_name = D("goods");
        $del = $model_name->delete($id);
        if($del){
            $this->redirect("Goods/goods");
        }else{
            $this->redirect("Goods/goods_add",array(),3,"删除失败");
        }
    }
}