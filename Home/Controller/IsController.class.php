<?php
namespace Home\Controller;
use Think\Controller;
class IsController extends Controller {
  public function index(){
        $Data = M('test'); // 实例化Data数据模型
        $this->da = $Data->select();
        $this->display();
    }
	
	
}


?>