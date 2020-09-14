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

	mail($to, $subject, $message, $headers);


    if (empty($name)) {
        echo "Name is empty";
    } else {
        echo "success";
    }
}
?>