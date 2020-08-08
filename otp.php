<?php 

// Function to generate OTP 
function generateNumericOTP($n) { 
	
	// Take a generator string which consist of 
	// all numeric digits 
	$generator = "1357902468"; 

	// Iterate for n-times and pick a single character 
	// from generator and append it to $result 
	
	// Login for generating a random character from generator 
	//	 ---generate a random number 
	//	 ---take modulus of same with length of generator (say i) 
	//	 ---append the character at place (i) from generator to result 

	$result = ""; 

	for ($i = 1; $i <= $n; $i++) { 
		$result .= substr($generator, (rand()%(strlen($generator))), 1); 
	} 

	// Return result 
	return $result; 
} 

// Main program 
$n = 4; 
// print_r(generateNumericOTP($n)); 
$otp=generateNumericOTP($n);

$to_email = "parikhvaibhav19@gmail.com";   
// here there will be name of email id to you wan to send
$subject = "Verification of Email address";
$body = "Your OTP is $otp";
$headers = "From: vaibpatel02@gmail.com";
 
if (mail($to_email, $subject, $body, $headers)) {
    echo "Email successfully sent to $to_email... and otp is $otp";
} else {
    echo "Email sending failed...";
}

?> 
