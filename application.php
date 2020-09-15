<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // collect value of input field
    $name = $_POST['name'];
    $num = $_POST['num'];
    $courseName = $_POST['courseName'];


    $to      = 'galymsatt@gmail.com';
	$subject = 'Новая заявка';
	$message = 'hello';
	$headers = 'From: fibonaccisch@gmail.com' . "\r\n" .
	    'Reply-To: fibonaccisch@gmail.com' . "\r\n" .
	    'X-Mailer: PHP/' . phpversion();

	


    if (mail($to, $subject, $message, $headers)) {
    	echo "successs";
    } 
    else {
        echo "Name is empty";
    }
}
?>