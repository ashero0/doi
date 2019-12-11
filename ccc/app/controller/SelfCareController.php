<?php

include_once '../global.php';
$route = $_GET['route'];
$selfc = new SelfCareController();

if ($route == 'alcoholism') {
	// Self Care / Alcoholism
	$selfc->alcoholism();
}
else if ($route == 'add') {
	// Self Care / Atention Deficit Disorder
	$selfc->add();
}
else if ($route == 'eating-disorders') {
	// Self Care / Eating Disorders
	$selfc->eatingDisorders();
}
else if ($route == 'sexual-assault') {
	// Self Care / Sexual Assault
	$selfc->sexualAssault();
}
else if ($route == 'trauma') {
	// Self Care / Trauma
	$selfc->trauma();
}
else if ($route == 'well-being') {
	// Self Care / Well Being
	$selfc->wellBeing();
}


class SelfCareController {

	/* --- Self Care / Alocholism --- */
	public function alcoholism() {
		$pageTitle = 'Alcoholism';
		// $stylesheet = '';

		include_once SYSTEM_PATH.'/view/header.php';
		include_once SYSTEM_PATH.'/view/self-care/alcoholism.php';
		include_once SYSTEM_PATH.'/view/footer.php';
    }
    
    /* --- Self Care / Atention Deficit Disorder --- */
	public function add() {
		$pageTitle = 'Attention Deficit Disoder ';
		// $stylesheet = '';
		$script = 'accordion';

		include_once SYSTEM_PATH.'/view/header.php';
		include_once SYSTEM_PATH.'/view/self-care/add.php';
		include_once SYSTEM_PATH.'/view/footer.php';

    }

    /* --- Self Care / Eating Disorders --- */
	public function eatingDisorders() {
		$pageTitle = 'Eating Disoders';
		// $stylesheet = '';

		include_once SYSTEM_PATH.'/view/header.php';
		include_once SYSTEM_PATH.'/view/self-care/eating-disorders.php';
		include_once SYSTEM_PATH.'/view/footer.php';
	}

    /* --- Self Care / Sexual Assault --- */
	public function sexualAssault() {
		$pageTitle = 'Sexual Assault';
		// $stylesheet = '';

		include_once SYSTEM_PATH.'/view/header.php';
		include_once SYSTEM_PATH.'/view/self-care/sexual-assault.php';
		include_once SYSTEM_PATH.'/view/footer.php';
    }
    
    /* --- Self Care / Trauma --- */
	public function trauma() {
		$pageTitle = 'Trauma';
		// $stylesheet = '';

		include_once SYSTEM_PATH.'/view/header.php';
		include_once SYSTEM_PATH.'/view/self-care/trauma.php';
		include_once SYSTEM_PATH.'/view/footer.php';
    }
    
    /* --- Self Care / Well Being --- */
	public function wellBeing() {
		$pageTitle = 'Well Being';
		// $stylesheet = '';

		include_once SYSTEM_PATH.'/view/header.php';
		include_once SYSTEM_PATH.'/view/self-care/well-being.php';
		include_once SYSTEM_PATH.'/view/footer.php';
	}

}