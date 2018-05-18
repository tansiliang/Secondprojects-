<?php
class CategoryModel extends Model{
    public $error_info;
    /**
     * 调用树状型分类导航
     */
    public function getTreeList($parent_id = 0){
        $list = D("category")->select();
        return $this->getTree($list,$parent_id,0);
    }
    /**
     * 递归调用
     * 树状型排序和缩进
     * @param $arr array
     * @param $parent int 
     * @param $dree int
     * @return array
     */
    public function getTree($arr,$parent=0,$dree = 0){
        static $tree = array();
        foreach($arr as $row){
            if($row['category_parentid'] == $parent){
                $row['dree'] = $dree;
                $tree[] = $row;
                $this->getTree($arr,$row['category_id'],$dree+1);
            }
        }
        return $tree;
    }
    /**
     * ajax判断当前的用户名是否已经存在
     * @param $name string 
     * @return bool
     */
    public function cleckName($name){
        $model_info = D("category");
        $info = $model_info->where("category_name = '$name'")->count();
        if($info > 0){
            //用户名存在，密码不正确
            $this->error_info = "分类名已存在";
            return false;
        }else{
            $this->error_info = "<img src='".ADMIN_IMG_URL."yes.gif' />";
            return true;
        }
    }
    
}