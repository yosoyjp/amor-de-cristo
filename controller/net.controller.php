<?
	require 'model/net.class.php';

	class NetController{

		private $model;

		public function __CONSTRUCT(){
	        $this->model = new Net();
	    }

		public function getAlls(){
			$net = new Net();
			return $net->findAlls();
		}

		public function newNet($name){
			$net = new Net();

			return $net->create($data->name = $name);
		}
	}
?>