<?php
namespace app\common\model;
use think\Model;
	class Course extends Model{
		public function getALLCourse(){
			$date=[];
			$order=["id"=>"desc"];
			return $this->order($order)
						->paginate(1);
		}
	}
?>