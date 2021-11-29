<?php
	class Car{
		var $name;
		var $color;

		public function __construct($name,$color){
			$this->name=$name;
			$this->color=$color;
		}

		public function running(){
			echo  '<br/>';
			echo $this->name.' color:'.$this->color.'-is running';
		}
		public function stop(){
			echo $this->name.'-is stopping';
		}
	}

?>