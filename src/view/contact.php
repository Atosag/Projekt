<?php

	//the require once here just to show the coupling between classes.	
	require_once(HelperPath.DS.'HTMLView.php');
	require_once(ModelPath.DS.'validation.php');

	class contact {

		private $name = "name";
		private $email = "email";
		private $msg = "message";
		private $send = "send";
		private $GetName;
		private $GetMeg;
		private $GetEmail;
		private $mainView;	
		private $validation;

		public function __construct() {
			$this->mainView = new HTMLView();
			$this->validation = new validation();
		}

		//render contact form.
		public function ContactForm($message = '') {

		
			
			
			$contactUs =
			'<h2>Har du några frågor kan du nå mig på: anton_peace@hotmail.com</h2>';
			return $contactUs;
		}

		public function RenderContactForm($errorMessage = '') {

			echo $this->mainView->echoHTML($this->ContactForm($errorMessage));
		}



	}