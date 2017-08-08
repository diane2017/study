<?php
namespace Admin\Controller;
use Think\Page;

class ArticleController extends BaseController{
    public function listing(){
        //分页
        $totalrows=M('article')->count();
        $page=new Page($totalrows,10);
        
        $sql='select art.id,art_subject,add_time,is_checked,filepath,ptr_name,cate_name,ptr_url,true_name from article as art'
            .' left join category as c on cate_id=c.id '
            .' left join partner as p on ptr_id=p.id '
            .' left join admin as a on admin_id=a.id '
            .' order by id desc '
            .' limit '.$page->firstRow.','.$page->listRows;
        $rowset=M()->query($sql);
              
        $this->assign('rowset',$rowset);
        $this->assign('pagelist',$page->show());
        $this->assign('selected',$selected);
        $this->display();
    }
    public function create(){

        //读取栏目列表
        $cate_row=$this->getCategory();
        //读取合作伙伴列表
        $ptr_row=M('partner')->select();
        
        
        $this->assign('ptr_row',$ptr_row);
        $this->assign('cate_row',$cate_row);
        $this->display();
    }
    public function insert(){
        $timestamp = time();
        $folderName = date('Y-m-d');
        $folderPath = 'public/articles/' . $folderName;
        
        if(!file_exists($folderPath)){
            mkdir($folderPath);
        }
        $filename = md5(uniqid(microtime() . mt_rand())) . '.html';
        $filepath = $folderPath . '/' . $filename;
       
        //获取模板文件内容
        $html = file_get_contents("public/template.html");
       
        //将占位符替换为真实的信息
        $html = str_replace('{art_subject}',$_POST['art_subject'],$html);
        $html = str_replace('{pub_time}',date('Y年m月d日 H:i',$timestamp),$html);
        //以提交的ptn_id为条件,查找合作合伴的信息
        $ptr_row=M('partner')->where("id='{$_POST['ptr_id']}'")->find();
//        $ptr_row = $this->_model->fetch('select ptr_name,ptr_url from partner where id=' . $_POST['ptr_id']);
        //继承替换合作伙伴的信息
        $html = str_replace('{ptr_url}',$ptr_row['ptr_url'],$html);
        $html = str_replace('{ptr_name}',$ptr_row['ptr_name'],$html);
        $html = str_replace('{cmt_num}','0',$html);
        $html = str_replace('{art_content}',$_POST['art_content'],$html);
        
         $_POST['add_time']=$timestamp;
         $_POST['admin_id']=1;
         $_POST['filepath']=$folderName . '/' . $filename; 
        
        //写入数据库
        $result=M('article')->add($_POST);
         if($result>0){
             $newsid=M()->getLastInsID();
             echo $newsid;
             $html = str_replace('{newsid}',$newsid,$html);
             file_put_contents($filepath, $html);
            $this->success('添加新闻成功！',__APP__.'/Article/listing');
        }else{
            $this->success('添加新闻失败！',__APP__.'/Article/creact');
        } 
    }
    
    public function getCategory($parent_id = 0, $selectedValue = 0) {
        static $html = '';
        static $n = 0;
        $sql = "select * from category where parent_id=" . $parent_id;
        $rowset = M()->query( $sql );
        if ($rowset) {
            foreach ( $rowset as $key => $row ) {
                $html .= '<option value="' . $row ['id'] . '"' . ($row ['id'] == $selectedValue ? ' selected' : null) . '>' . str_repeat ( '&nbsp;&nbsp;&nbsp;&nbsp;', $n ) . $row ['cate_name'] . '</option>';
                $n ++;
                $this->getCategory ( $row ['id'],$selectedValue );
            }
        }
        $n --;
        // $html .= "</ul>\n";
        return $html;
    }
    public function remove(){
    
      $string=join(',', $_POST['article_checkbox']);
//      var_dump($string);
        $result=M('article')->where("id in($string)")->delete();
        if($result>0){
            $this->success('删除新闻成功！',__APP__.'/Article/listing');
        }else{
            $this->success('删除新闻失败！',__APP__.'/Article/listing');
        }
    }
    public function recycle(){
        $string=join(',',$_POST['article_checkbox']);
//        echo $string;
        $result=M('article')->where("id in($string)")->save(array('is_deleted'=>1));
        if($result>0){
            $this->success('删除新闻成功！',__APP__.'/Article/recyclelist');
        }else{
            $this->success('删除新闻失败！',__APP__.'/Article/listing');
        }
    }
    public function recyclelist(){
        $rowset=M('article')->where("is_deleted=1")->select();
        $this->assign('rowset',$rowset);
        $this->display();
    }
    public function restore(){
        $string=join(',', $_POST['article_checkbox']);
        $result=M('article')->where("id in($string)")->save(['is_deleted'=>0]);
        if($result>0){
            $this->success('还原成功！',__APP__.'/Article/listing');
        }else {
            $this->success('还原失败！',__APP__.'/Article/recyclelist');
        }
    }
    public function checked(){
        $result=M('article')->where("id={$_GET['id']}")->save(['is_checked'=>1]);
    }
    public function unchecked(){
        $result=M('article')->where("id={$_GET['id']}")->save(['is_checked'=>0]);
    }
    public function modify(){
                
        $sql="select a.id,art_subject,art_content,cate_name,ptr_name,cate_id,ptr_id from article as a left join category as c on a.cate_id=c.id left join partner as p on a.ptr_id=p.id where a.id=".$_GET['id'];
        
        $row=M()->query($sql);
       
        $ptr_row=M('partner')->select();
        $cate_row=$this->getCategory(0,$row[0]['cate_id']);
        
        $this->assign('cate_row',$cate_row);
        $this->assign('ptr_row',$ptr_row);
        $this->assign('row',$row);
        $this->display();
    }
    public function update(){
        
        $result=M('article')->where("id={$_GET['id']}")->save($_POST);
        if($result>0){
            
            $this->success('修改成功！',__APP__.'/Article/listing');
        }else{
                $this->success('修改失败！',__APP__.'/Article/modfiy');
            }
    }
}



















