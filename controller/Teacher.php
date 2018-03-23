<?php
namespace app\index\controller;
use think\Db;
use think\Controller;
class Teacher extends Controller{
	public function index(){
		 $teacher=Db::name('teacher')->where('id',1)->select();
		
		// $teacher=Db::table('yunzhi_teacher')->where('id',1)->find();
		echo '<pre>';
		var_dump($teacher);
		echo '</pre>';
	}
}
?>