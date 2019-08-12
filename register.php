<?php


$msg = '';

if (array_key_exists('email', $_POST)) {
    date_default_timezone_set('Etc/UTC');

    require 'PHPMailerAutoload.php';

    //Create a new PHPMailer instance
    $mail = new PHPMailer;
    
   // $mail->isSMTP();
    $mail->IsSMTP();
    $mail->SMTPDebug = 2;
    $mail->Debugoutput = "html";
    $mail->Host = 'smtp.gmail.com';
    $mail->Port = 587;
    $mail->SMTPSecure = 'tls';
    $mail->SMTPAuth = true;
    $mail->Username = "32pinewooddrive@gmail.com";
    $mail->Password = "genesis@123";

    //Use a fixed address in your own domain as the from address
    //**DO NOT** use the submitter's address here as it will be forgery
    //and will cause your messages to fail SPF checks
    $mail->setFrom('32pinewooddrive@gmail.com', '32PinewoodDrive',0);

    //Send the message to yourself, or whoever should receive contact for submissions
    $mail->addAddress('imaginehomeland@gmail.com', 'imaginehomeland');

    //Put the submitter's address in a reply-to header
    //This will fail if the address provided is invalid,
    //in which case we should ignore the whole request
    if ($mail->addReplyTo($_POST['email'], $_POST['name']))
     {
        $mail->Subject = 'PHPMailer contact form';
        //Keep it simple - don't use HTML
        $mail->isHTML(false);
        //Build a simple message body
        $mail->Body = <<<EOT
Name: {$_POST['name']}
Email: {$_POST['email']}
Phone: {$_POST['phone']}
Intrested: {$_POST['intrested']}
EOT;
        //Send the message, check for errors
        if (!$mail->send()) {
            //The reason for failing to send will be in $mail->ErrorInfo
            //but you shouldn't display errors to users - process the error, log it on your server.
            $msg = 'Sorry, something went wrong. Please try again later.';
        } else {
            $msg = 'Message sent! Thanks for contacting us.';
            echo "<script type='text/javascript'>alert('$msg');</script>";
        }
    } else {
        $msg = 'Invalid email address, message ignored.';
    }
}
?>



<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "crud";

// Create connection
$conn = new mysqli($servername, $username, $password,$dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
  $name = $_POST["name"];
  $email = $_POST["email"];
  $phone = $_POST["phone"];
  $intrested= $_POST["intrested"];

  echo "connected successfully";

  $sql = "INSERT INTO pinewood(name,email,phone,intrested) VALUES('$name','$email','$phone','$intrested')";

    if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}


$conn->close();

header('Location: home.php')

?>
