<?php 
	use Phalcon\Mvc\Controller;
	use Phalcon\Mvc\Model\Query;
	use Phalcon\Mvc\Model\Criteria;

	/**
	 * 
	 */
	 class ViewController extends Controller
	 {
	 	
	 	function indexAction ()
	 	{
	 		# code...
	 		$this->view->show_navigation = true;
	 		$query = $this->modelsManager->createQuery("SELECT * FROM users");
	 		$user = $query->execute();
	 		$this->view->setVar("page",$user);
	 	}

	 	public function showAction() {
	 		
	 	}
	 } 
?>