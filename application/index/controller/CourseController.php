<?php
namespace app\index\controller;
use think\Controller;
class CourseController extends Controller{
	public function index(){
		$courses=model('course')->getALLCourse();

		return $this->fetch("",["courses"=>$courses]);
	}
}
?>