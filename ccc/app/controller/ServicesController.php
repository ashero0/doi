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
else if ($route == 'schedule-appointment-get-info') {
	// Get Information about appointments from database
	$servc->getAppointmentInfo();
}
else if ($route == 'schedule-appointment-process') {
	// Process Schedule Appointmnent
	$servc->scheduleAppointmentProcess();
}
else if ($route == 'individual-counseling') {
	// Services / Individual Counseling
	$servc->individualCounseling();
}
else if ($route == 'group-counseling') {
	// Services / Group Counseling
	$servc->groupCounseling();
}
else if ($route == 'group-list') {
	// Services / Group Counseling / List of Group Counseling Programs
	$servc->groupList();
}
else if ($route == 'psychiatric-services') {
	// Services / Psychiatric Services
	$servc->psychiatricServices();
}
else if ($route == 'sport-psychology') {
	// Services / Sport Psychology
	$servc->sportPsychology();
}

class ServicesController {

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
		$script = 'appointments';
		// $stylesheet = '';

		include_once SYSTEM_PATH.'/view/header.php';
		include_once SYSTEM_PATH.'/view/services/schedule-appointment.php';
		include_once SYSTEM_PATH.'/view/footer.php';
    }

    /* --- Get information about Appointments from server --- */
    public function getAppointmentInfo() {
    	$counselors = Counselor::loadAllCounselors();
		$closedDates = ClosedDate::loadAllDates();
		$appointments = Appointment::loadAllAppointments();

		if ($counselors == null) {
			$json = array(
				'error' => 'Could not fetch list of counselors from server.'
			);
		}
		else if ($closedDates == null) {
			$json = array(
				'error' => 'Could not fetch list of closed dates from server.'
			);
		}
		else if ($appointments == null) {
			$json = array(
				'error' => 'Could not fetch list of existing appointments from server.'
			);
		}
		else {
			$json = array(
				'success' => 'success',
				'counselors' => $counselors,
				'closedDates' => $closedDates,
				'appointments' => $appointments
			);
		}

		header('Content-Type: application/json');
		echo json_encode($json);
    }

    /* --- Services / Schedule and Appointment --- */
    public function scheduleAppointmentProcess() {
    	// Get form data.
  		// public $id;
		// public $counselor_id;
		// public $student_id;
		// public $date_time;
		// public $notes;
    	$counselor_id = $_POST['counselor_id'];
    	$student_id = $_POST['student_id'];
    	$date_time = $_POST['date_time'];
    	$notes = $_POST['notes'];

    	// Create new appointment using form data.
    	$appt = new Appointment();
    	$appt->counselor_id = $counselor_id;
    	$appt->student_id = $student_id;
    	$appt->date_time = $date_time;
    	$appt->notes = $notes;

    	// Send query to save new appt to database.
    	$appt = Appointment::insertAppointment($appt);

    	if ($appt) {
    		header('Location: '.BASE_URL); exit();
    		echo 'Appointment created successfully.';
    	}
    	else {
    		header('Location: '.BASE_URL.'/services/schedule-appointment');
    		echo 'Error scheduling appointment.';
    	}
    }
    
    /* --- Services / Individual Counseling --- */
	public function individualCounseling() {
		$pageTitle = 'Individual Counseling';
		// $stylesheet = '';

		include_once SYSTEM_PATH.'/view/header.php';
		include_once SYSTEM_PATH.'/view/services/individual-counseling.php';
		include_once SYSTEM_PATH.'/view/footer.php';
    }
    
    /* --- Services / Group Counseling --- */
	public function groupCounseling() {
		$pageTitle = 'Group Counseling';
		// $stylesheet = '';

		include_once SYSTEM_PATH.'/view/header.php';
		include_once SYSTEM_PATH.'/view/services/group-counseling.php';
		include_once SYSTEM_PATH.'/view/footer.php';
	}
	
	/* --- Services / Group Counseling / List of Group Counseling Programs--- */
	public function groupList() {
		$pageTitle = 'List of Group Counseling Programs';
		// $stylesheet = '';

		include_once SYSTEM_PATH.'/view/header.php';
		include_once SYSTEM_PATH.'/view/services/gcsub-list.php';
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