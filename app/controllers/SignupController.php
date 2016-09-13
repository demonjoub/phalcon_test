<?php 
	use Phalcon\Mvc\Controller;
	use Phalcon\Mvc\Model\Query;

	class SignupController  extends Controller
	{
		
		public function indexAction()
		{
			# code...
		}

		public function registerAction() {
			# code...
			$user = new Users();

			// Store and check for errors
        	$success = $user->save($this->request->getPost(), ['name', 'email']);
        	if($success) {
        		echo "Thank for registering!";
        	}
        	else {
        		echo "Sorry, the following problems were generated: ";
        		foreach ($user->getMessages() as $message) {
        			# code...
        			echo $message->getMessage(), "<br>";
        		}
        	}
			$this->view->disable();
		}
	}
?>