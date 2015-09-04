<?php
namespace Home\Controller;
use Think\Controller;
class FormController extends Controller{
	 public function index(){
     
    }
 	public function insert(){
        $Form   =   D('Form');
        if($Form->create()) {
            $result =   $Form->add();
            if($result) {
                $this->success('操作成功！'.$result);
            }else{
                $this->error('写入错误！');
            }
        }else{
            $this->error($Form->getError());
        }
    }
	
	public function insert2(){
        $Form2   =   M('Form2');
        if($Form2->create()) {
            $result2 =   $Form2->add();
            if($result2) {
                $this->success('操作成功！');
            }else{
                $this->error('写入错误！');
            }
        }else{
            $this->error($Form2->getError());
        }
    }

	public function read($id=0)
	{
    	$Form   =   M('Form');
    	// 读取数据
    	$data =   $Form->find($id);
		if($data) 
		{
			$this->data =   $data;// 模板变量赋值
		}else{
			$this->error('数据错误');
		}
    	$this->display();
	}
	
	public function form2(){
		$Data = M('Form'); // 实例化Data数据模型
        //$this->da = $Data->select();
		//$this->da = [['id'=>1,'name'=>2],['id'=>2,'name'=>2],['id'=>3,'name'=>3]];
		//$condition['title'] = ["like","54%"];
		//$condition['title'] = ["gt",50000];

		$condition['title'] = ["GT",1];
		$this->da=$Data->where($condition)->select();
		$this->da['1']['title']=11;
        $this->display();
	}
	
	public function edit($id=0)
	{
		$Form= M('Form');
		$this->vo=$Form->find($id);
		$this->display();
 	}
 	public function update()
	{
		$Form   =   D('Form');
		if($Form->create()) {
			$result =   $Form->save();
			if($result) {
				$this->success('操作成功！');
			}else{
				$this->error('写入错误！');
			}
		}else{
			$this->error($Form->getError());
		}
	 }


}



?>