<?php
namespace Admin\Controller;
use Think\Controller;

class AdminController extends BaseController{
    public function index(){

        $this->display();
    }

    public function create(){
  
        $this->display();
    }
    public function insert(){
        $result=M('admin')->add($_POST);
        if($result>0){
            $this->success('添加管理员成功！',__APP__.'/Admin/listing');
        }else{
            $this->success('添加管理员失败！',__APP__.'/Admin/create');
        }
    }
    public function listing(){
        $rowset=M('admin')->select();
      
        $this->assign('rowset',$rowset);
        $this->display();
    }
}