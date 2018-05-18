<?php
class GoodsAction extends Action(){
    /**
     * 显示商品列表页
     */
    public function list(){
        $this->display();
    }
    /**
     * 显示商品详细页
     */
    public function detailpage(){
        $this->display();
    }
    /**
     * 显示商品订单页
     */
    public function orderform(){
        $this->display();
    }
}