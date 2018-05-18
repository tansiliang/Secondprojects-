<?php
class CategoryAction extends Action{
    /**
     * 显示列表
     */
    public function category(){
        $model_name = new CategoryModel;
        $list = $model_name->getTreeList();
        $this->assign("list",$list);
        $this->display();
    }
    /**
     * 显示添加列表
     */
    public function category_add(){
        $model_name = new CategoryModel;
        $list = $model_name->getTreeList();
        $this->assign("link",$list);
        $this->assign("show",array('1'=>'显示','0'=>'隐藏'));
        $this->assign("sel",1);
        $this->display();
    }
    /**
     * ajax判断当前的用户名是否已经存在
     */
    public function ajaxadd(){
        $model_name = new CategoryModel;
        $add = $model_name->cleckName($_POST['category_name']);
        if($add !== false){
            echo $model_name->error_info;
        }else{
            echo $model_name->error_info;
        }
    }
    /**
     * 获取添加的信息
     */
    public function add(){
        $model_info = D("category");
        if(!empty($_POST)){
            $model_info -> create();
            $add = $model_info ->add();
            if($add){
                $this-redirect("Category/category");
            }else{
                $this->reedirect("Category/category_add",array(),3,"添加失败");
            }
        }else{
            $this->reedirect("Category/category_add",array(),3,"添加失败,没有加载到数据");
        }
    }
    /**
     * 显示编辑页面
     */
    public function category_edit(){
        $model_name = new CategoryModel;
        $link = $model_name ->getTreeList();
        $list = $model_name ->getBycategory_id($_GET['id']);
        $sel = $list['category_show'] == 1?1:0;
        $this->assign("link",$link);
        $this->assign("list",$list);
        $this->assign("show",array('1'=>'显示','0'=>'隐藏'));
        $this->assign("sel",$sel);
        $this->display();
    }
    /**
     * 获取编辑页面的信息
     */
    public function edit(){
        $model_name = D("category");
        if(!empty($_POST)){
            $model_name -> create();
            $update = $model_name ->where("category_id = '{$_POST['category_id']}'")->save();
            if($update){
                $this->redirect("Category/category");
            }else{
                $this->redirect("Category/category_edit",array(),3,'修改失败');
            }
        }else{
            $this->redirect("Category/category_edit/id/{$_POST['category_id']}",array(),3,'修改失败，没有获取到数据');
        }
    }
}