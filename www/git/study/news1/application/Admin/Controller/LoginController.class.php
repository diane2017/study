<?php
namespace Admin\Controller;
use Think\Controller;
use Think\Verify;

class LoginController extends Controller{
    public function index(){
        
        $this->display();
    }
    public function codeImg(){
        $verify=new Verify();
        $verify->fontSize=10;
        $verify->length=4;
        $verify->entry();
    }
    public function login(){
        $model=D('Users');
        $result=$model->create();
        if($result>0){
            $ver=new Verify();
            $result=$ver->check($_POST['check_code']);
            if($result>0){
                $row=M('admin')->where("admin_name='{$_POST['admin_name']}' and admin_pass='{$_POST['admin_pass']}'")->find();
               
                if($row){
                    $_SESSION['admin']=$row;
                    $this->success('登录成功！',__APP__.'/Index/menu');
                }else{
                    $this->success('登录失败！',__APP__.'/Loginindex');
                }
            }else{
                $this->success('验证码输入有误！',U('Login/index'));
            }
        }else{
            $msg=$model->getError();
            $this->success($msg,U('Login/index'));
        }
    }
}
