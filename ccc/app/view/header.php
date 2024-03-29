<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Cook Counseling Center |
        <?= $pageTitle ?>
    </title>

    <!-- Set viewport manually so the content resizes for different devices. -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Give Javascript access to some of PHP's variables. -->
    <script>
    var base_url = '<?= BASE_URL ?>';
    </script>

    <!-- Code snippet below adapted from https://bootstrapious.com/p/bootstrap-multilevel-dropdown -->

    <script type="text/javascript">
    //<![CDATA[

    window.onload = function() {

        $(function() {
            // ------------------------------------------------------- //
            // Multi Level dropdowns
            // ------------------------------------------------------ //
            $("ul.dropdown-menu [data-toggle='dropdown']").on("click", function(event) {
                event.preventDefault();
                event.stopPropagation();

                $(this).siblings().toggleClass("show");


                if (!$(this).next().hasClass('show')) {
                    $(this).parents('.dropdown-menu').first().find('.show').removeClass("show");
                }
                $(this).parents('li.nav-item.dropdown.show').on('hidden.bs.dropdown', function(e) {
                    $('.dropdown-submenu .show').removeClass("show");
                });

            });
        });


    }

    //]]>
    </script>

    <!-- <script src="<?= BASE_URL ?>/public/js/header.js"></script> -->

    <!-- Import JQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

    <!-- Import Bootstrap stuff -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="<?= BASE_URL ?>/public/css/custom.css">

	<!-- Import Font Awesome Icons -->
	<script src="https://kit.fontawesome.com/587f22926a.js" crossorigin="anonymous"></script>
	
	<!-- Import styles. -->
	<?php if(isset($stylesheet)): ?>
	<link rel="stylesheet" href="<?= BASE_URL ?>/public/css/<?= $stylesheet ?>.css">
	<?php endif; ?>

	<link rel="stylesheet" href="<?= BASE_URL ?>/public/css/global.css" type="text/css">

    <!-- Import calendar widget. -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>

    <!-- Import JS. -->
    <?php if(isset($script)): ?>
    <script src="<?= BASE_URL ?>/public/js/<?= $script ?>.js"></script>
    <?php endif; ?>

</head>




<div class="main-container">

<header style="position: relative">

    <div id="universal-access">
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown"
                aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            <img alt="VT Virginia Tech" style="height: 18px; margin-top: -4px;"
                                src="http://www.assets.cms.vt.edu/images/accessibility_icon_white.svg">
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" target="_blank" href="https://vt.edu/apply.html">APPLY</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" target="_blank" href="https://vt.edu/visit.html">VISIT</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" target="_blank" href="https://webapps.es.vt.edu/givingto/gift">GIVE</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" target="_blank"
                            href="http://www.hokiegear.com/?_s=bm-storefront&utm_source=vt_edu&utm_medium=referral">SHOP</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false">
                            Resources for
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item" target="_blank" href="https://vt.edu/admissions.html">Future
                                Students</a>
                            <a class="dropdown-item" target="_blank"
                                href="https://vt.edu/resources/current-students.html">Current Students</a>
                            <a class="dropdown-item" target="_blank"
                                href="https://vt.edu/resources/parents-and-families.html">Parents and Families</a>
                            <a class="dropdown-item" target="_blank"
                                href="https://vt.edu/resources/faculty-and-staff.html">Faculty and Staff</a>
                            <a class="dropdown-item" target="_blank" href="https://alumni.vt.edu/">Alumni</a>
                            <a class="dropdown-item" target="_blank" href="https://vt.edu/link.html">Industry and
                                Partners</a>
                        </div>
                    </li>
                </ul>
            </div>
        </nav>
    </div>

    <!-- Header -->
    <div id="header">
        <nav class="navbar navbar-light bg-light">
            <a href="https://vt.edu/" class="vt-logo navbar-link">
                <img src="<?=BASE_URL?>/public/assets/vt-logo.png" />
            </a>
            <a href="<?=BASE_URL?>" class="ccc-logo navbar-link">
                <img src="<?=BASE_URL?>/public/assets/ccc-logo.png" />
            </a>
            <a href="<?=BASE_URL?>services/emergency-services" class="navigation-link navbar-link">
                <i class="fas fa-exclamation-circle"></i>
                <p>Emergencies</p>
            </a>
            <a href="<?=BASE_URL?>services/schedule-appointment" class="navigation-link navbar-link">
                <i class="fas fa-calendar"></i>
                <p>Appointments</p>
            </a>
            <a href="<?=BASE_URL?>about/contact-us" class="navigation-link navbar-link">
                <i class="fas fa-phone"></i>
                <p>Contact Us</p>
            </a>
        </nav>
    </div>

    <div id="navigation">
        <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
            <ul class="navbar-nav">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        About
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="<?=BASE_URL?>about/about-cook">About Cook Counseling Center</a>
                        <a class="dropdown-item" href="<?=BASE_URL?>about/hours-and-location">Hours & Location</a>
                        <a class="dropdown-item" href="<?=BASE_URL?>about/staff">Staff</a>
                        <a class="dropdown-item" href="<?=BASE_URL?>about/contact-us">Contact Us</a>
                        <a class="dropdown-item" href="<?=BASE_URL?>about/confidentiality-policy">Confidentiality
                            Policy</a>
                        <a class="dropdown-item" href="<?=BASE_URL?>about/forms">Forms</a>
                        <a class="dropdown-item" href="<?=BASE_URL?>about/outreach">Outreach</a>
                        <a class="dropdown-item" target="_blank"
                            href="https://students.vt.edu/advancement/giving.html">Giving</a>
                        <a class="dropdown-item" href="<?=BASE_URL?>about/graduate-training">Graduate Training</a>
                        <a class="dropdown-item" target="_blank" href="https://students.vt.edu/">Student Affairs</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Services
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="<?=BASE_URL?>services/emergency-services">Emergency Services</a>
                        <a class="dropdown-item" href="<?=BASE_URL?>services/schedule-appointment">Schedule an
                            Appointment</a>
                        <a class="dropdown-item" href="<?=BASE_URL?>services/individual-counseling">Individual
                            Counseling</a>
                        <a class="dropdown-item" href="<?=BASE_URL?>services/group-counseling">Group Counseling</a>
                        <a class="dropdown-item" href="<?=BASE_URL?>services/psychiatric-services">Psychiatric
                            Services</a>
                        <a class="dropdown-item" href="<?=BASE_URL?>services/sport-psychology">Sport Psychology</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Self-Care
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="<?=BASE_URL?>self-care/alcoholism">Alcoholism</a>
                        <a class="dropdown-item" href="<?=BASE_URL?>self-care/add">Attention Deficit Disorder (ADD)</a>
                        <a class="dropdown-item" href="<?=BASE_URL?>self-care/eating-disorders">Eating Disorders</a>
                        <a class="dropdown-item" href="<?=BASE_URL?>self-care/sexual-assault">Sexual Assault</a>
                        <a class="dropdown-item" href="<?=BASE_URL?>self-care/trauma">Trauma</a>
                        <a class="dropdown-item" href="https://well-being.vt.edu/" target="_blank">Well-Being at Virginia
                            Tech</a>
                    </div>
                </li>

                <li class="nav-item dropdown">
                    <a id="navbarDropdownMenuLink" href="#" data-toggle="dropdown" role="button" aria-haspopup="true"
                        aria-expanded="false" class="nav-link dropdown-toggle">Academic Help</a>
                    <ul aria-labelledby="dropdownMenu1" class="dropdown-menu">
                        <li>
                            <a href="<?=BASE_URL?>academic-help/academic-relief" class="dropdown-item">Academic Relief</a>
                        </li>
                        <li>
                            <a href="<?=BASE_URL?>academic-help/online-workshops" class="dropdown-item">Online Workshops</a>
                        </li>

                        <li class="dropdown-submenu">
                            <a id="dropdownMenu2" href="#" role="button" data-toggle="dropdown" aria-haspopup="true"
                                aria-expanded="false" class="dropdown-item dropdown-toggle">Study Skills</a>
                            <ul aria-labelledby="dropdownMenu2" class="dropdown-menu">
                                <!-- border-0 shadow -->
                                <li>
                                    <a tabindex="-1" href="<?=BASE_URL?>academic-help/study-skills/checklist" class="dropdown-item">Checklist</a>
                                </li>
                                <li>
                                    <a tabindex="-1" href="<?=BASE_URL?>academic-help/study-skills/time-management" class="dropdown-item">Time Management</a>
                                </li>
                                <li>
                                    <a tabindex="-1" href="<?=BASE_URL?>academic-help/study-skills/sq3r" class="dropdown-item">SQ3R - Improving Reading
                                        Comprehension</a>
                                </li>
                                <li>
                                    <a tabindex="-1" href="<?=BASE_URL?>academic-help/study-skills/concentration" class="dropdown-item">Concentration</a>
                                </li>
                                <li>
                                    <a tabindex="-1" href="<?=BASE_URL?>academic-help/study-skills/motivation" class="dropdown-item">Motivation</a>
                                </li>
                                <li>
                                    <a tabindex="-1" href="<?=BASE_URL?>academic-help/study-skills/note-taking" class="dropdown-item">Note-Taking</a>
                                </li>
                                <li>
                                    <a tabindex="-1" href="<?=BASE_URL?>academic-help/study-skills/recall" class="dropdown-item">Recall</a>
                                </li>
                                <li>
                                    <a tabindex="-1" href="<?=BASE_URL?>academic-help/study-skills/difficult-questions" class="dropdown-item">Difficult Questions</a>
                                </li>
                                <li>
                                    <a tabindex="-1" href="<?=BASE_URL?>academic-help/study-skills/vocab" class="dropdown-item">Vocabulary</a>
                                </li>
                                <li>
                                    <a tabindex="-1" href="<?=BASE_URL?>academic-help/study-skills/writing-papers" class="dropdown-item">Writing Papers</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>
            </ul>
        </nav>
    </header>

    <body>

    <?php if(isset($_SESSION['message'])): ?>
        <?= $_SESSION['message'] ?>
        <?php unset($_SESSION['message']); ?>
    <?php endif; ?>

    <div class="page-content mx-auto">