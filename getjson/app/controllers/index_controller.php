<?php 
/**
* 
*/
class index_controller extends appcontroller
{
	
	function __construct(){
   		parent::__construct();
	} 
	public function index($id=null){
		$base = new image;
		$this->view->datos = $base->findAll();
		
		$this->render();
	}
	public function getUserData($id=null){
		//alert("dvnajvn");
		//$usrObj = new image();
      	//$datos = $usrObj->getUserComputers($id);      
    	echo json_encode($datos);
	}


}



 ?>