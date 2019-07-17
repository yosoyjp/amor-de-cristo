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

		public function newNet(){
			$name = json_decode(file_get_contents('php://input'), true)['name'];
			if(isset($name)){
				$net = new Net();
				return $net->create($name);	
			}else{
				header('HTTP/1.0 404 Not Found');
				return json_decode('{"error": "Rellene toda la informacion"}');
			}
			
		}

		public function updateNet(){
			$data = json_decode(file_get_contents('php://input'), true);
			$id = $data['id'];
			$name = $data['name'];
			if(isset($id, $name)){
				$net = new Net();
				return $net->update($id, $name);
			}else{
				header('HTTP/1.0 404 Not Found');
				return json_decode('{"error": "Rellene toda la informacion"}');
			}
		}

		public function deleteNet(){
			$id = json_decode(file_get_contents('php://input'), true)['id'];
			if(isset($id)){
				$net = new Net();
				return $net->delete($id);
			}else{
				header('HTTP/1.0 404 Not Found');
				return json_decode('{"error": "Rellene toda la informacion"}');
			}
		}
	}
?>