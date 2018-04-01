<?php
namespace app\index\controller;
use think\Controller;

class Teacher2Controller extends controller{
	public function index(){
	return $this->fetch("index",[
			'name'=>'lisi',
			'age'=>20]);
	}



//获取所有教师的信息
public function getTeacher(){
	$teachers=model('Teacher')->getAllTeacher();
	//传参数
	return $this->fetch('',['teachers'=>$teachers]);
	
	}
}
?>