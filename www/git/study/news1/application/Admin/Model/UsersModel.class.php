<?php
namespace Admin\Model;
use Think\Model;

class UsersModel extends Model{
    public $tableName='admin';
    public $_validate=array(
        array('admin_name','require','用户名不能为空！'),
        array('admin_pass','require','密码不能为空！'),
        array('check_code','require','验证码不能为空！'),
    );
}
