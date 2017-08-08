<?php
namespace Home\Controller;
use Think\Controller;

class LoginController extends Controller{
    public function login(){
        $this->display();
    }
    /**用户提交登录信息，连接数据库，比对信息是否一致
     * 
     */
    public function enter(){
        
    }
    public function register(){
        $this->display();
    }
    /**
     * 用户提交合法注册后写入数据库
     */
    public function insert(){
        
    }
}