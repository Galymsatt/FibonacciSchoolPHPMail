<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // collect value of input field
    $name = $_POST['name'];
    $num = $_POST['num'];
    $courseName = $_POST['courseName'];


    $to      = 'galymsatt@gmail.com';
	$subject = 'Новая заявка';
	$message = 'hello';
	// $headers = 'From: fibonaccischool@fibonacci-school.kz' . "\r\n" .
	//     'Reply-To: fibonaccisch@gmail.com' . "\r\n" .
	//     'X-Mailer: PHP/' . phpversion();

	$from = "fibonaccischool@fibonacci-school.kz";
	$headers = "From:" . $from;
	


    if (mail($to, $subject, $message, $headers)) {
    	echo "successs";
    } 
    else {
        echo "Name is empty";
    }
}
?>