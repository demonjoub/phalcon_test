<?php 
	use Phalcon\Mvc\Model;
	use Phalcon\Validation;
	use Phalcon\Validation\Validator\Email as EmailValidator;
	use Phalcon\Validation\Validator\Uniqueness;
	/**
	* 
	*/
	class Users extends Model
	{
		
		public $id;
	    public $name;
	    public $email;

	    public function validation() {
	    	$validator = new Validation();

		    $validator->add(
		        'email',
		        new EmailValidator()
		    );
		   $validator->add(
		        'email',
		        new Uniqueness(['model'=>$this])
		    );

		    return $this->validate($validator);
	    }

	    public function initialize() {
	    	$this->setSource('Users');
	    }

	    public function columnMap() {
	    	return array(
	    		'id' 	=> 'id',
	    		'name'	=> 'name',
	    		'email'	=> 'email'
	    	);
	    }

	}

?>