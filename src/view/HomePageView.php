<?php
	
	//the require once here just to show the coupling between classes.	
	require_once(HelperPath.DS.'HTMLView.php');
	
	class HomePageView {

		private $mainView;

		public function __construct() {

			$this->mainView = new HTMLView();
		}


		

		public function homePageForm() {
			$htmlHomePage = '<div id="middelText">';
			$htmlHomePage .= '<h2>Välkommen till min blogg, MagnussonsGalleri. Här kommer du hitta diverse äventyr som jag lägger upp under veckan. <a href="?page=Avaliable">Till bilderna</a></h2>';
			$htmlHomePage .= '</div>';
			
			return $htmlHomePage;
		}

		public function renderHomePage() {
			$htmlHomePage  = $this->homePageForm();
			echo $this->mainView->echoHTML($htmlHomePage);
		}
	}