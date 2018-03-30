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

use think\Controller;
use think\Session;
use think\Db;

class Login extends Controller
{
    public function index()
    {
    	if (request()->isPost()) {
    		$post = input('post.');
    		$userInfo = Db::table('system_user')->where(['username'=>$post['username'],'password'=>md5($post['password'])])->find();
    		empty($userInfo) && $this->error('您输的账号或密码不正确！');
    		Session::set('user',$userInfo);
    		$this->redirect('@admin/index/index');
    	}
        return $this->fetch();
    }

    public function logout()
    {
    	Session::set('user',null);
    	$this->redirect('@admin/login/index');
    }

    
}
