# Design of Information
Project Group 2 - Redesign of Cook Counseling Center Website

[See the website!](http://ec2-3-135-184-38.us-east-2.compute.amazonaws.com/)

"There should be a README file that gives an overview of the system, platform, etc. so that a person "skilled in the art" can re-create the system."

We started our project using Angular JS and hosting on Firebase, but many of us didn't have enough experience and it seemed to be more complicated than what we actually needed for this implementation.

For this website, we used Bootstrap, PHP, and Javascript to create a user-first experience that feels and looks refreshing. We hosted our project on AWS, which is also home to our SQL database. Inside the database we have three tables:
1. **counselors**: stores each counselor's name and available times
2. **closed-dates**: stores a list of dates when the university is closed
3. **appointments**: stores a list of appointments that have been scheduled through the website. Each appointment has the student's ID, counselor's ID (corresponds to the counselor's table), and the time and date of the appointment. There is also an optional field for "notes" which can be edited by the database admin and could be used for a client-side feature in the future.

The database we use can be easily manipulated using the PHPMyAdmin feature that AWS supplies hosting for. We believe that the staff of the Cook Counseling Center would not have any difficulty integrating the website's backend with their current database. 

The appointment scheduler behavior is almost all defined with Javascript in *appointments.js*. All of the code that retrieves and manipulates the database is in PHP. The appointment scheduler uses HTML forms, JS form validation & manipulation, the [Flatpickr](https://flatpickr.js.org/) JQuery plugin as a calendar, and an HTTP POST request to send the user's requested appointment to the server.

The actual behavior of our site is controlled by a system called Apache. The list of URL redirects is defined in our top-level *.htaccess* file. Once a user goes to a certain URL, the PHP site controllers direct them to the correct content by loading data from the database, including PHP files, and importing Javascript files. Each page's content uses PHP to dynamically include different content for each user.

For the Bootstrap styling, we added some custom color and font changes in order to comply with some of Virginia Tech's standards. These are written in *custom.css*. We also added some more styles in *global.css*.

> Barbara O’Connor, barb424@vt.edu

> Nicole Moore, ncmoore@vt.edu

> Hithesh Peddamekala, hitp98@vt.edu

> Heather Robinson, hnr2800@vt.edu
