<?php
namespace Home\Controller;
use Think\Controller;

class CategoryController extends Controller{
    public function index(){
        $id=$_GET['id'];
        $cate=M('category')->where("id=$id")->find();
        $rowset=M('article')->where("cate_id=$id")->select();
        
        $this->assign('cate_name',$cate['cate_name']);
        $this->assign('rowset',$rowset);
        $this->display();
    }
    public function category(){
        $id=$_GET['id'];
        $cate=M()->where("parent_id=$id")->select();
        var_dump($cate);
        
        $this->assign('cate_name',$cate['cate_name']);
        $this->display();
    }
}
