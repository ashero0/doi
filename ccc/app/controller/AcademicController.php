<?php

include_once '../global.php';
$route = $_GET['route'];
$acc = new AcademicController();

if ($route == 'academic-relief') {
	// Academic Help / Academic Relief
	$acc->academicRelief();
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
else if ($route == 'sched-stud') {
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
	$acc->motChecklist();
}
else if ($route == 'note-taking') {
	// Academic Help / Study Skills / Note-Taking
	$acc->noteTaking();
}
else if ($route == 'lecture-notes') {
	// Academic Help / Study Skills / Note-Taking / Editing Lecture Notes
	$acc->lectureNotes();
}
else if ($route == 'recall') {
	// Academic Help / Study Skills / Recall
	$acc->recall();
}
else if ($route == 'diff-questions') {
	// Academic Help / Study Skills / Difficult Questions
	$acc->diffQuestions();
}
else if ($route == 'vocab') {
	// Academic Help / Study Skills / Vocabulary
	$acc->vocab();
}
else if ($route == 'writing-papers') {
	// Academic Help / Study Skills / Writing Papers
	$acc->writingPapers();
}
else if ($route == 'online-workshops') {
	// Academic Help / Online Workshops
	$acc->onlineWorkshops();
}
else if ($route == 'time-workshop') {
	// Academic Help / Online Workshops / Time Management Strategies Workshop
	$acc->timeWorkshop();
}
else if ($route == 'test-workshop') {
	// Academic Help / Online Workshops / Improving Test Performance Workshop
	$acc->testWorkshop();
}
else if ($route == 'sq3r-workshop') {
	// Academic Help / Online Workshops / SQ3R Improving Reading Comprehension Workshop
	$acc->sq3rWorkshop();
}
else if ($route == 'concentration-workshop') {
	// Academic Help / Online Workshops / Improving Concentration/Memory Workshop
	$acc->concentrationWorkshop();
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
	/* --- Academic Help / Study Skills / Motivation / Motivation Checklist --- */
	public function noteTaking() {
		$pageTitle = 'Note-Taking';
		// $stylesheet = '';

		include_once SYSTEM_PATH.'/view/header.php';
		include_once SYSTEM_PATH.'/view/academic-help/note-taking.php';
		include_once SYSTEM_PATH.'/view/footer.php';
	}
	/* --- Academic Help / Study Skills / Note-Taking / Editing Lecture Notes --- */
	public function lectureNotes() {
		$pageTitle = 'Lecture Notes';
		// $stylesheet = '';

		include_once SYSTEM_PATH.'/view/header.php';
		include_once SYSTEM_PATH.'/view/academic-help/ntsub-lecture-notes.php';
		include_once SYSTEM_PATH.'/view/footer.php';
	}
	/* --- Academic Help / Study Skills / Recall --- */
	public function recall() {
		$pageTitle = 'Recall';
		// $stylesheet = '';

		include_once SYSTEM_PATH.'/view/header.php';
		include_once SYSTEM_PATH.'/view/academic-help/recall.php';
		include_once SYSTEM_PATH.'/view/footer.php';
	}
	/* --- Academic Help / Study Skills / Difficult Questions --- */
	public function diffQuestions() {
		$pageTitle = 'Difficult Questions';
		// $stylesheet = '';

		include_once SYSTEM_PATH.'/view/header.php';
		include_once SYSTEM_PATH.'/view/academic-help/diff-questions.php';
		include_once SYSTEM_PATH.'/view/footer.php';
	}
	/* --- Academic Help / Study Skills / Difficult Questions --- */
	public function vocab() {
		$pageTitle = 'Vocabulary';
		// $stylesheet = '';

		include_once SYSTEM_PATH.'/view/header.php';
		include_once SYSTEM_PATH.'/view/academic-help/vocab.php';
		include_once SYSTEM_PATH.'/view/footer.php';
	}
	/* --- Academic Help / Study Skills / Writing Papers --- */
	public function writingPapers() {
		$pageTitle = 'Writing Papers';
		// $stylesheet = '';

		include_once SYSTEM_PATH.'/view/header.php';
		include_once SYSTEM_PATH.'/view/academic-help/writing-papers.php';
		include_once SYSTEM_PATH.'/view/footer.php';
	}
	/* --- Academic Help / Online Workshops --- */
	public function onlineWorkshops() {
		$pageTitle = 'Online Workshops';
		// $stylesheet = '';

		include_once SYSTEM_PATH.'/view/header.php';
		include_once SYSTEM_PATH.'/view/academic-help/online-workshops.php';
		include_once SYSTEM_PATH.'/view/footer.php';
	}
	/* --- Academic Help / Online Workshops / Time Management Strategies--- */
	public function timeWorkshop() {
		$pageTitle = 'Time Management Strategies Workshop';
		// $stylesheet = '';

		include_once SYSTEM_PATH.'/view/header.php';
		include_once SYSTEM_PATH.'/view/academic-help/owsub-time.php';
		include_once SYSTEM_PATH.'/view/footer.php';
	}
	/* --- Academic Help / Online Workshops / Improving Test Performance--- */
	public function testWorkshop() {
		$pageTitle = 'Improving Test Performance Workshop';
		// $stylesheet = '';

		include_once SYSTEM_PATH.'/view/header.php';
		include_once SYSTEM_PATH.'/view/academic-help/owsub-test-perf.php';
		include_once SYSTEM_PATH.'/view/footer.php';
	}
	/* --- Academic Help / Online Workshops / SQ3R Improving Reading Comprehension --- */
	public function sq3rWorkshop() {
		$pageTitle = 'SQ3R Improving Reading Comprehension Workshop';
		// $stylesheet = '';

		include_once SYSTEM_PATH.'/view/header.php';
		include_once SYSTEM_PATH.'/view/academic-help/owsub-sq3r.php';
		include_once SYSTEM_PATH.'/view/footer.php';
	}
	/* --- Academic Help / Online Workshops / Improving Concentration/Memory --- */
	public function concentrationWorkshop() {
		$pageTitle = 'Improving Concentration/Memory Workshop';
		// $stylesheet = '';

		include_once SYSTEM_PATH.'/view/header.php';
		include_once SYSTEM_PATH.'/view/academic-help/owsub-concentration.php';
		include_once SYSTEM_PATH.'/view/footer.php';
	}
}