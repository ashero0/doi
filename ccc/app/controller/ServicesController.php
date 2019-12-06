<?php

include_once '../global.php';
$route = $_GET['route'];
$servc = new ServicesController();

if ($route == 'emergency-services') {
	// Services / Emergency Services
	$servc->emergencyServices();
}
else if ($route == 'schedule-appointment') {
	// Services / Schedule an Appointment
	$servc->scheduleAppointment();
}
else if ($route == 'individual-counseling') {
	// Services / Individual Counseling
	$servc->individualCounseling();
}
else if ($route == 'group-counseling') {
	// Services / Group Counseling
	$servc->groupCounseling();
}
else if ($route == 'psychiatric-services') {
	// Services / Psychiatric Services
	$servc->psychiatricServices();
}
else if ($route == 'sport-psychology') {
	// Services / Sport Psychology
	$servc->sportPsychology();
}

class SiteController {

	/* --- Services / Emergency Services --- */
	public function emergencyServices() {
		$pageTitle = 'Emergency Services';
		// $stylesheet = '';

		include_once SYSTEM_PATH.'/view/header.php';
		include_once SYSTEM_PATH.'/view/services/emergency-services.php';
		include_once SYSTEM_PATH.'/view/footer.php';
    }
    
    /* --- Services / Schedule an Appointment --- */
	public function scheduleAppointment() {
		$pageTitle = 'Schedule an Appointment';
		// $stylesheet = '';

		include_once SYSTEM_PATH.'/view/header.php';
		include_once SYSTEM_PATH.'/view/services/schedule-appointment.php';
		include_once SYSTEM_PATH.'/view/footer.php';
    }
    
    /* --- Services / Individual Counseling --- */
	public function individualCounseling() {
		$pageTitle = 'Individual Counseling';
		// $stylesheet = '';

		include_once SYSTEM_PATH.'/view/header.php';
		include_once SYSTEM_PATH.'/view/services/individual-counsleing.php';
		include_once SYSTEM_PATH.'/view/footer.php';
    }
    
    /* --- Services / Group Counseling --- */
	public function groupCounseling() {
		$pageTitle = 'Group Counseling';
		// $stylesheet = '';

		include_once SYSTEM_PATH.'/view/header.php';
		include_once SYSTEM_PATH.'/view/services/group-counsleing.php';
		include_once SYSTEM_PATH.'/view/footer.php';
    }
    
    /* --- Services / Psychiatric Services --- */
	public function psychiatricServices() {
		$pageTitle = 'Psychiatric Services';
		// $stylesheet = '';

		include_once SYSTEM_PATH.'/view/header.php';
		include_once SYSTEM_PATH.'/view/services/psychiatric-services.php';
		include_once SYSTEM_PATH.'/view/footer.php';
    }
    
    /* --- Services / Psychiatric Services --- */
	public function sportPsychology() {
		$pageTitle = 'Sport Psychology';
		// $stylesheet = '';

		include_once SYSTEM_PATH.'/view/header.php';
		include_once SYSTEM_PATH.'/view/services/sport-psychology.php';
		include_once SYSTEM_PATH.'/view/footer.php';
	}
}