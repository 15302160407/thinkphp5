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

	public function add(){
		return $this->fetch();
		}

	public function save(){
		$data=[
				'username'=>'wangwu2',
				'name'=>'王五2',
				'sex'=>0,
				'password'=>md5('123456')

		];
		$teacher=new Teacher($data);
		$teacher->save();
		if($teacher->id){
			$this->success('ok',url('teacher2/getTeacher'));
		}
		else{
			$this->error('错误');
		}
	}
}
?>