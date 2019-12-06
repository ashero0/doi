<?php

include_once '../global.php';
$route = $_GET['route'];
$acc = new AcademicController();

if ($route == 'academic-relief') {
	// Academic Help / Academic Relief
	$acc->academicRelief();
}
else if ($route == 'study-skills') {
	// Academic Help / Study Skills
	$acc->studySkills();
}
else if ($route == 'checklist') {
	// Academic Help / Study Skills / Checklist
	$acc->checklist();
}
else if ($route == 'time-management') {
	// Academic Help / Study Skills / Time Management
	$acc->timeManagement();
}
else if ($route == 'where-time') {
	// Academic Help / Study Skills / Time Management / Where Does Time Go
	$acc->whereTime();
}
else if ($route == 'sched-strat') {
	// Academic Help / Study Skills / Time Management / Scheduling Strategies
	$acc->schedStrat();
}
else if ($route == 'sched-strat') {
	// Academic Help / Study Skills / Time Management / Scheduled Strategies
	$acc->schedStud();
}
else if ($route == 'environment') {
	// Academic Help / Study Skills / Environment
	$acc->environment();
}
else if ($route == 'sq3r') {
	// Academic Help / Study Skills / SQ3R Improving Reading Comprehension
	$acc->sq3r();
}
else if ($route == 'concentration') {
	// Academic Help / Study Skills / Concentration
	$acc->concentration();
}
else if ($route == 'motivation') {
	// Academic Help / Study Skills / Motivation
	$acc->motivation();
}
else if ($route == 'motivation-checklist') {
	// Academic Help / Study Skills / Motivation / Motivation Checklist
	// this is not going to the right page!!! going to motivation page instead of motivation checklist page
	$acc->motChecklist();
}

class AcademicController {

	/* --- Academic Help / Academic Relief --- */
	public function academicRelief() {
		$pageTitle = 'Academic Relief';
		// $stylesheet = '';

		include_once SYSTEM_PATH.'/view/header.php';
		include_once SYSTEM_PATH.'/view/academic-help/academic-relief.php';
		include_once SYSTEM_PATH.'/view/footer.php';
    }
    /* --- Academic Help / Study Skills --- */
	public function studySkills() {
		$pageTitle = 'Study Skills';
		// $stylesheet = '';

		include_once SYSTEM_PATH.'/view/header.php';
		include_once SYSTEM_PATH.'/view/academic-help/study-skills.php';
		include_once SYSTEM_PATH.'/view/footer.php';
    }
    /* --- Academic Help / Study Skills / Checklist --- */
	public function checklist() {
		$pageTitle = 'Checklist';
		// $stylesheet = '';

		include_once SYSTEM_PATH.'/view/header.php';
		include_once SYSTEM_PATH.'/view/academic-help/checklist.php';
		include_once SYSTEM_PATH.'/view/footer.php';
    }
    /* --- Academic Help / Study Skills / Time Management --- */
	public function timeManagement() {
		$pageTitle = 'Time Management';
		// $stylesheet = '';

		include_once SYSTEM_PATH.'/view/header.php';
		include_once SYSTEM_PATH.'/view/academic-help/time-management.php';
		include_once SYSTEM_PATH.'/view/footer.php';
	}
	/* --- Academic Help / Study Skills / Time Management / Where Does Time Go --- */
	public function whereTime() {
		$pageTitle = 'Where Does Time Go';
		// $stylesheet = '';

		include_once SYSTEM_PATH.'/view/header.php';
		include_once SYSTEM_PATH.'/view/academic-help/tmsub-where-time.php';
		include_once SYSTEM_PATH.'/view/footer.php';
	}
	/* --- Academic Help / Study Skills / Time Management / Scheduling Strategies --- */
	public function schedStrat() {
		$pageTitle = 'Scheduling Strategies';
		// $stylesheet = '';

		include_once SYSTEM_PATH.'/view/header.php';
		include_once SYSTEM_PATH.'/view/academic-help/tmsub-sched-strat.php';
		include_once SYSTEM_PATH.'/view/footer.php';
	}
	/* --- Academic Help / Study Skills / Time Management / Scheduled Studying --- */
	public function schedStud() {
		$pageTitle = 'Scheduled Studying';
		// $stylesheet = '';

		include_once SYSTEM_PATH.'/view/header.php';
		include_once SYSTEM_PATH.'/view/academic-help/tmsub-sched-stud.php';
		include_once SYSTEM_PATH.'/view/footer.php';
	}
	/* --- Academic Help / Study Skills / Environment --- */
	public function environment() {
		$pageTitle = 'Environment';
		// $stylesheet = '';

		include_once SYSTEM_PATH.'/view/header.php';
		include_once SYSTEM_PATH.'/view/academic-help/environment.php';
		include_once SYSTEM_PATH.'/view/footer.php';
	}
	/* --- Academic Help / Study Skills / SQ3R Improving Reading Comprehension --- */
	public function sq3r() {
		$pageTitle = 'SQ3R Improving Reading Comprehension';
		// $stylesheet = '';

		include_once SYSTEM_PATH.'/view/header.php';
		include_once SYSTEM_PATH.'/view/academic-help/sq3r.php';
		include_once SYSTEM_PATH.'/view/footer.php';
	}
	/* --- Academic Help / Study Skills / Concentration --- */
	public function concentration() {
		$pageTitle = 'Concentration';
		// $stylesheet = '';

		include_once SYSTEM_PATH.'/view/header.php';
		include_once SYSTEM_PATH.'/view/academic-help/concentration.php';
		include_once SYSTEM_PATH.'/view/footer.php';
	}
	/* --- Academic Help / Study Skills / Motivation --- */
	public function motivation() {
		$pageTitle = 'Motivation';
		// $stylesheet = '';

		include_once SYSTEM_PATH.'/view/header.php';
		include_once SYSTEM_PATH.'/view/academic-help/motivation.php';
		include_once SYSTEM_PATH.'/view/footer.php';
	}
	/* --- Academic Help / Study Skills / Motivation / Motivation Checklist --- */
	public function motChecklist() {
		$pageTitle = 'Motivation Checklist';
		// $stylesheet = '';

		include_once SYSTEM_PATH.'/view/header.php';
		include_once SYSTEM_PATH.'/view/academic-help/motsub-checklist.php';
		include_once SYSTEM_PATH.'/view/footer.php';
	}
}