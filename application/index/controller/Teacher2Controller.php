<?php
namespace app\index\controller;
use think\Controller;
use app\common\model\Teacher;

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
//
	public function add(){
		return $this->fetch();
		}




	public function save(){
// --提交方式post,判断是否为post
		if(!request()->isPost()){
			$this->error('非法提交');
		}
// --获取提交数据
		$date=input('post.');
// --验证数据合法性
		$validate=validate('Teacher2');
		if(!$validate->scene('add')->check($date)){
			$this->error($validate->getError());
		}
// --数据再加工
		$teacherDate=[
			'name'=>$date['name'],
			'username'=>$date['username'],
			'password'=>$date['password'],
			'sex'=>$date['sex'],
			'email'=>$date['email'],
		];
// --调用模型里的增加数据方法
		$teacherId=model('Teacher')->add($teacherDate);
// --根据返回结果判断是否保存成功
		if($teacherId){
			$this->success('增加数据成功，teacherId为'.$teacherId,'teacher2/getTeacher');
		}
		else{
			$this->error('添加数据错误！');
		}				
		
	}
}
?>