<?php
namespace Admin\Controller;

class PartnerController extends BaseController{
    public function create(){
        $this->display();
    }
    public function insert(){
        
    }
    public function listing(){
        $rowset=M('partner')->select();
        $this->assign('rowset',$rowset);
        $this->display();
        
    }
}
