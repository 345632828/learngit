<?php
namespace Home\Controller;
use Think\Controller;
class UserController extends Controller{
 	 public function Register(){
         $User   =   D('User');
         if($User->create()) {
             $result =   $User->add();
             if($result) {
                 $this->success('操作成功！'.$result);
             }else{
                 $this->error('写入错误！');
             }
         }else{
             $this->error($User->getError());
         }
    }

    public function login(){
        $User = M('User');

        $condition['name'] = 'thinkphp';
        $condition['password'] = 1;
        // 把查询条件传入查询方法
        $User->where($condition)->select();
        $this->display();

    }


}



?>