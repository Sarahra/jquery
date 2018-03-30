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
use think\Session;

class Book extends basicAdmin
{
    public function form($id = 0)
    {
    	if ($id != 0) {

    	}else{
    		$post = input('post.');
    		Session::get('user')['username'] == 'admin' && $post['author_by'] = 10000;
    		$res = Db::name('book')->insert($post);
    		$res && $this->success('保存成功');
    		$this->error('保存失败');
    	}
    }
}
