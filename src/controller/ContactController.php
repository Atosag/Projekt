<?php
	

	//the require once here just to show the coupling between classes.	
	require_once(ViewPath.DS.'contact.php');
	require_once(ModelPath.DS.'validation.php');

	class ContactController {

		private $validation;
		private $contact;
		private $emailContact;


		public function __construct() {

			$this->contact = new contact();
			$this->validation = new validation();
		}


	
		//Render contact form and make sure that all is right to make a contact message.
		public function doContact() {
			$this->contact->RenderContactForm();

			

		

		}

	}