<?php
namespace Admin\Controller;

class CategoryController extends BaseController{
    public function create(){
        $option=$this->getCategory();
       
        $this->assign('option',$option);
        $this->display();
    }
    public function insert(){
        $result=M('category')->add($_POST);
        if($result>0){
            $this->success('添加栏目成功',__APP__.'/Category/listing');
        }else{
            $this->success('添加栏目失败',__APP__.'/Category/create');
        }
    }
    public function listing(){
        $rowset=M('category')->select();
        $this->assign('rowset',$rowset);
        $this->display();
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
}
