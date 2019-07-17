<?php
	require 'model/group.class.php';

	class GroupController{

		public function getAlls(){
			$group = new Group();
			return $group->findAlls();
		}

		public function newGroup(){
			$data = json_decode(file_get_contents('php://input'), true);
			$name = $data['name'];
			$netId = $data['netId'];
			if(isset($name, $netId)){
				$group = new Group();
				return $group->create($name, $netId);	
			}else{
				header('HTTP/1.0 404 Not Found');
				return json_decode('{"error": "Rellene toda la informacion"}');
			}
			
		}

		public function updateGroup(){
			$data = json_decode(file_get_contents('php://input'), true);
			$id = $data['id'];
			$name = $data['name'];
			$netId = $data['netId'];
			if(isset($id, $name, $netId)){
				$group = new Group();
				return $group->update($id, $name, $netId);
			}else{
				header('HTTP/1.0 404 Not Found');
				return json_decode('{"error": "Rellene toda la informacion"}');
			}
		}

		public function deleteGroup(){
			$id = json_decode(file_get_contents('php://input'), true)['id'];
			if(isset($id)){
				$group = new Group();
				return $group->delete($id);
			}else{
				header('HTTP/1.0 404 Not Found');
				return json_decode('{"error": "Rellene toda la informacion"}');
			}
		}
	}
?>