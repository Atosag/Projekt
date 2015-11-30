<?php
	

	

	require_once("data/pathConfig.php");
	$navigationController = new NavigationController();
	// Run Application
    $navigationController->doControll();
    

    //Show time and date in swedish.

	setlocale(LC_ALL, 'swedish');
	$day = utf8_encode(ucfirst(strftime("%A")));
 	$date = ucwords(strftime($day .'en. Den %d %B år %Y. Klockan [%X].'));
	echo '<div class="navbar navbar-default"><div class="container-fluid">'.$date;	

    					



    			


