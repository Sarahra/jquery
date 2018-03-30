<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2018 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Date 03-26
// +----------------------------------------------------------------------
// | Author: liu21st <liu21st@gmail.com>
// +----------------------------------------------------------------------
namespace app\admin\controller;

use controller\basicAdmin;
use think\Db;

class Manager extends basicAdmin
{
    public function book()
    {
    	$list = Db::table('book')->where('is_deleted',0)->order('id asc')->select();
    	$this->assign('list',$list);
        return $this->fetch();
    }
}
