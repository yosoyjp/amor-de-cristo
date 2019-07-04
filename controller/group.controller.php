<?
	class GroupController{

		public function getAlls(){
			$response = new stdClass;
			$response->hola = "mundo";
			return $response;
		}
	}
?>