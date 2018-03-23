<?php
namespace app\index\controller;
use app\common\model\Teacher;
use think\Controller;
class Teacher1Controller extends controller{
	public function index(){
	// $teacher1=new Teacher();
	// $teacher1_1=$teacher1->where("sex",0)
	// 					 ->limit(2)
	// 					 ->order("id","desc")
	// 					 ->select();
	// dump($teacher1_1);

	return $this->fetch('hi');
		}
	
}
?>