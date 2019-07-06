<?
	require 'model/group.class.php';

	class GroupController{

		public function getAlls(){
			$group = new Group();
			return $group->findAlls();
		}
	}
?>