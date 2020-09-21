<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // collect value of input field
    $name = $_POST['name'];
    $num = $_POST['num'];
    $courseName = $_POST['courseName'];

	date_default_timezone_set('UTC+6');
    $regDate = date("Y-m-d H:i:s");

    $to      = 'galymsatt@gmail.com';
	$subject = 'Новая заявка';
	$message = 'Registration date: ' . $regDate . 
				"\nName: " . $name .
				"\nNumber: " . $num .
				"\nCourse name: " . $courseName;
	


	// $headers = 'From: fibonaccischool@fibonacci-school.kz' . "\r\n" .
	//     'Reply-To: fibonaccisch@gmail.com' . "\r\n" .
	//     'X-Mailer: PHP/' . phpversion();

	$from = "fibonaccischool@fibonacci-school.kz";
	$headers = "From:" . $from;
	


    if (mail($to, $subject, $message, $headers)) {
    	echo "success";
    } 
    else {
        echo "Went wrong...";
    }
}
?>