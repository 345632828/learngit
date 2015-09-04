<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
  public function index(){
        $Data = M('form'); // 实例化Data数据模型
        $this->da = $Data->select();
        $this->display();
    }
	
	
}


?>