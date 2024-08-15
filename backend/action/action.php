<?php

require '../function/functions.php';

if (isset($_POST['type'])) {
	$_POST['page'] = $_SERVER['HTTP_REFERER'];
	date_default_timezone_set("Asia/Karachi");

	switch ($_POST['type']) {
		case 'contactForm':
			contactForm($_POST, $connection);
			break;
		case 'contactFormTwo':
			contactFormTwo($_POST, $connection);
			break;

	}

	header('Location: ../../thankyou');
}
