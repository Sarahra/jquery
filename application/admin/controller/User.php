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

class User extends basicAdmin
{
    public function index()
    {
        return $this->fetch();
    }

    // 读者管理
    public function info()
    {
    	return $this->fetch();
    }

    // 修改密码
    public function changepwd()
    {
    	if (request()->isPost()) {
    		
    	}
    	return $this->fetch();
    }
}