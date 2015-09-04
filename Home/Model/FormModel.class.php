<?php

namespace Home\Model;
use Think\Model;
class FormModel extends Model {
    // 定义自动验证
    protected $_validate    =  [
        ['title','require','标题必须'],
        ['content',"require",'内容必须']
    ];
    // 定义自动完成
    protected $_auto    =  [['create_time','time',1,'function']];

 }


?>