<?php

include_once '../global.php';
$route = $_GET['route'];
$ac = new AboutController();

if ($route == 'contact-us') {
	// About / Contact Us
	$ac->contactUs();
}
else if ($route == 'staff') {
    // About / Staff
    $ac->staff();
}
else if ($route == 'about-cook') {
    // About / About Cook Counseling Center
    $ac->aboutCook();
}
else if ($route == 'hours-and-location') {
    // About / Hours and Location
    $ac->hoursAndLocation();
}
else if ($route == 'confidentiality-policy') {
    // About / Confidentiality Policy
    $ac->confidentialityPolicy();
}
else if ($route == 'forms') {
    // About / Forms
    $ac->forms();
}
else if ($route == 'outreach') {
    // About / Outreach
    $ac->outreach();
}
else if ($route == 'giving') {
    // About / Giving
    $ac->giving();
}
else if ($route == 'graduate-training') {
    // About / Graduate Training
    $ac->graduateTraining();
}
else if ($route == 'graduate-practicum') {
    // About / Graduate Practicum (subpage under Graduate Training)
    $ac->graduatePracticum();
}
else if ($route == 'doctoral-internship') {
    // About / Doctoral Internship (subpage under Graduate Training)
    $ac->doctoralInternship();
}
else if ($route == 'vcom-clerkship') {
    // About / VCOM Clerkship (subpage under Graduate Training)
    $ac->vcomClerkship();
}

class AboutController {

	/*-- About / Contact Us --- */
	public function contactUs() {
		$pageTitle = 'Contact Us';
        // $stylesheet = '';

		include_once SYSTEM_PATH.'/view/header.php';
		include_once SYSTEM_PATH.'/view/about/contact-us.php';
		include_once SYSTEM_PATH.'/view/footer.php';
    }

    /*-- About / Staff --- */
	public function staff() {
		$pageTitle = 'Staff';
        // $stylesheet = '';

		include_once SYSTEM_PATH.'/view/header.php';
		include_once SYSTEM_PATH.'/view/about/staff.php';
		include_once SYSTEM_PATH.'/view/footer.php';
    }

    /*-- About / About Cook Counseling Center --- */
	public function aboutCook() {
		$pageTitle = 'About Cook Counseling Center';
        // $stylesheet = '';

		include_once SYSTEM_PATH.'/view/header.php';
        include_once SYSTEM_PATH.'/view/about/about-cook.php';
		include_once SYSTEM_PATH.'/view/footer.php';
    }

    /*-- About / Hours and Location --- */
	public function hoursAndLocation() {
		$pageTitle = 'Hours and Location';
        // $stylesheet = '';

		include_once SYSTEM_PATH.'/view/header.php';
        include_once SYSTEM_PATH.'/view/about/hours-and-location.php';
		include_once SYSTEM_PATH.'/view/footer.php';
    }

    /*-- About / Confidentiality Policy --- */
	public function confidentialityPolicy() {
		$pageTitle = 'Confidentiality Policy';
        // $stylesheet = '';

		include_once SYSTEM_PATH.'/view/header.php';
        include_once SYSTEM_PATH.'/view/about/confidentiality-policy.php';
		include_once SYSTEM_PATH.'/view/footer.php';
    }

    /*-- About / Forms --- */
	public function forms() {
		$pageTitle = 'Forms';
        // $stylesheet = '';

		include_once SYSTEM_PATH.'/view/header.php';
        include_once SYSTEM_PATH.'/view/about/forms.php';
		include_once SYSTEM_PATH.'/view/footer.php';
    }

    /*-- About / Outreach --- */
	public function outreach() {
		$pageTitle = 'Outreach';
        // $stylesheet = '';

		include_once SYSTEM_PATH.'/view/header.php';
        include_once SYSTEM_PATH.'/view/about/outreach.php';
		include_once SYSTEM_PATH.'/view/footer.php';
    }

    /*-- About / Giving --- */
	public function giving() {
		$pageTitle = 'Giving';
        // $stylesheet = '';

		include_once SYSTEM_PATH.'/view/header.php';
        include_once SYSTEM_PATH.'/view/about/giving.php';
		include_once SYSTEM_PATH.'/view/footer.php';
    }

    /*-- About / Graduate Training --- */
	public function graduateTraining() {
		$pageTitle = 'Graduate Training';
        // $stylesheet = '';

		include_once SYSTEM_PATH.'/view/header.php';
        include_once SYSTEM_PATH.'/view/about/graduate-training.php';
		include_once SYSTEM_PATH.'/view/footer.php';
    }

    /*-- About / Graduate Training / Practicum --- */
	public function graduatePracticum() {
		$pageTitle = 'Graduate Practicum';
        // $stylesheet = '';

		include_once SYSTEM_PATH.'/view/header.php';
        include_once SYSTEM_PATH.'/view/about/graduate-practicum.php';
		include_once SYSTEM_PATH.'/view/footer.php';
    }

    /*-- About / Graduate Training / Doctoral Internship --- */
	public function doctoralInternship() {
		$pageTitle = 'Doctoral Internship';
        // $stylesheet = '';

		include_once SYSTEM_PATH.'/view/header.php';
        include_once SYSTEM_PATH.'/view/about/doctoral-internship.php';
		include_once SYSTEM_PATH.'/view/footer.php';
    }
    
    /*-- About / Graduate Training / VCOM Clerkship --- */
	public function vcomClerkship() {
		$pageTitle = 'VCOM Medical Student Clerkship';
        // $stylesheet = '';

		include_once SYSTEM_PATH.'/view/header.php';
        include_once SYSTEM_PATH.'/view/about/vcom-clerkship.php';
		include_once SYSTEM_PATH.'/view/footer.php';
    }
    
}