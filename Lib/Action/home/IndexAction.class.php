<?php
class IndexAction extends Action {
    /**
     * 首页
     */
    public function index(){
        $rotation_name = M("rotation");
        $rota_list = $rotation_name->select();
        $entry_name = D("entry");
        $entry_list = $entry_name->select();
        $goods_name = D("goods");
        $goods_list = $goods_name->select();
        $this->assign("goods_list",$goods_list);
        $this->assign("entry_list",$entry_list);
        $this->assign("rota_list",$rota_list);
        $this->display();
    }
    /**
     * 分类页
     */
    public function classify(){
        $this->display();
    }
    /**
     * 购物车
     */
    public function shopcart(){
        $this->display();
    }   
    /**
     * 我的
     */
    public function home(){
        $insider_name = D("insider");
        $insider_list = $insider_name->select();
    //var_dump(VIEWMODEL_URL);
    $this->display();
    }
}