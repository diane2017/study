<?php
namespace Admin\Controller;

class IndexController extends BaseController {


  public function index(){
       $php_os=PHP_OS;
       $php_ver=PHP_VERSION;
       $php_sapi=PHP_SAPI;
    
      
      $this->assign('php_os',$php_os);
      $this->assign('php_ver',$php_ver);
      $this->assign('php_sapi',$php_sapi); 
    
      $this->display();
  }
}