<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
  public function index(){
      $topRow=M('category')->where("parent_id=0")->select();
      $chinaRow=M('article')->where("cate_id=4  and is_checked=1")->order('id desc')->select();
      
      $hongRow=M('article')->where("cate_id=5  and is_checked=1")->order('id desc')->select();
      $worldRow=M('article')->where("cate_id=7  and is_checked=1")->order('id desc')->select();
      $newsRow=M('article')->where("cate_id=6  and is_checked=1")->order('id desc')->select();
      $click=M('article')->where('is_checked=1')->order('click_num desc')->limit(0,10)->select();
      $cmt_num=M('article')->where('is_checked=1')->order('cmt_num desc')->limit(0,10)->select();
      $society=M('article')->where("cate_id=24 and is_checked=1")->order('id desc')->limit(0,8)->select();
 //     var_dump($society);
foreach ($society as $key=>$row){
    
      $art_content=$row['art_content'];

      $img=$this->preg($art_content);
      $society[$key]['img']=$img;
}

      $this->assign('topRow',$topRow);
      $this->assign('chinaRow',$chinaRow);
      $this->assign('hongRow',$hongRow);
      $this->assign('worldRow',$worldRow);
      $this->assign('newsRow',$newsRow);
      $this->assign('click',$click);
      $this->assign('cmt_num',$cmt_num);
      $this->assign('society',$society);
      
      $this->display();
  }
  function preg($art_content){
      $art_content= htmlspecialchars($art_content);
      $art_content="\"".$art_content;
      $preg='/(\/\w+){6}\.(jpg|jpeg|png|gif)/';
      preg_match($preg, $art_content,$matches);
      return $matches[0];
  }
}





















