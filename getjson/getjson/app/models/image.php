<?php

class image extends models
{
	public function getUserComputers($name = null){
		$where = "";
		if(!is_null($user_id)){
			$where .= " WHERE name = $name;";
		}
		$sql = "
			SELECT *
			FROM users ORDER BY user_id DESC 
		";
		return $this->findAllBySQL($sql);
	}
	
}

?>