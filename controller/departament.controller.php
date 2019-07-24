<?php
	require 'model/departament.class.php';

	class DepartamentController{

		private $model;

		public function __CONSTRUCT(){
	        $this->model = new Departament();
	    }

		public function getAlls(){
			$dep = new Departament();
			return $dep->findAlls();
		}

		public function getByName($name){
			$dep = new Departament();
			return $dep->getByName($name);
		}

		public function newDepartament(){
			$data = json_decode(file_get_contents('php://input'), true);

			if(isset($data['name'], $data['description'], $data['slogan'])){
				$dep = new Departament();
				return $dep->create($data['name'], $data['description'], $data['slogan']);	
			}else{
				header('HTTP/1.0 404 Not Found');
				return json_decode('{"error": "Rellene toda la informacion"}');
			}
			
		}

		public function updateDepartament(){
			$data = json_decode(file_get_contents('php://input'), true);
			$id = $data['id'];
			$name = $data['name'];
			$description = $data['description'];
			$slogan = $data['slogan'];
			
			if(isset($id, $name, $description, $slogan)){
				$net = new Departament();
				return $net->update($id, $name, $description, $slogan);
			}else{
				header('HTTP/1.0 404 Not Found');
				return json_decode('{"error": "Rellene toda la informacion"}');
			}
		}

		public function deleteDepartament(){
			$id = json_decode(file_get_contents('php://input'), true)['id'];
			if(isset($id)){
				$net = new Departament();
				return $net->delete($id);
			}else{
				header('HTTP/1.0 404 Not Found');
				return json_decode('{"error": "Rellene toda la informacion"}');
			}
		}
	}
?>