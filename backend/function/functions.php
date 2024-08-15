<?php
// require '../mailchimp-api-master/src/MailChimp.php';
require '../vendor/PHPMailer/src/Exception.php';
require '../vendor/PHPMailer/src/PHPMailer.php';
require '../vendor/PHPMailer/src/SMTP.php';
require '../vendor/autoload.php';
require '../config/dbc.php';
// use DrewM\MailChimp\MailChimp;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

function contactForm($payload, $con)
{
    if (empty($payload['name']) || empty($payload['email'])) {
        echo 'Empty Request';
    } else {
        try {
            $page = $_POST['page'];
            $date = date("Y-m-d H:i:s");
            $name = mysqli_real_escape_string($con, $payload['name']);
            $email = mysqli_real_escape_string($con, $payload['email']);
            $phone = mysqli_real_escape_string($con, $payload['phone']);
            $message = mysqli_real_escape_string($con, $payload['message']);
            mysqli_query($con, "INSERT INTO leads(page,date,name,email,phone,message) VALUES('$page','$date','$name','$email','$phone','$message')") or die(mysqli_error($con));
            // EMAIL NOTIFICATION
            $emailContent = "<p>Page : $page</p>";
            $emailContent .= "<p>Name : $name</p>";
            $emailContent .= "<p>Email : $email</p>";
            $emailContent .= "<p>Phone : $phone</p>";
            $emailContent .= "<p>Message : $message</p>";
            sendEmail($emailContent);

        } catch (Exception $e) {
            die($e->getMessage());
        }
    }
}

function contactFormTwo($payload, $con)
{
    if (empty($payload['name']) || empty($payload['email'])) {
        echo 'Empty Request';
    } else {
        try {
            $page = $_POST['page'];
            $date = date("Y-m-d H:i:s");
            $name = mysqli_real_escape_string($con, $payload['name']);
            $email = mysqli_real_escape_string($con, $payload['email']);
            $phone = mysqli_real_escape_string($con, $payload['phone']);
            mysqli_query($con, "INSERT INTO leads(page,date,name,email,phone) VALUES('$page','$date','$name','$email','$phone')") or die(mysqli_error($con));
            // EMAIL NOTIFICATION
            $emailContent = "<p>Page : $page</p>";
            $emailContent .= "<p>Name : $name</p>";
            $emailContent .= "<p>Email : $email</p>";
            $emailContent .= "<p>Phone : $phone</p>";
            sendEmail($emailContent);

        } catch (Exception $e) {
            die($e->getMessage());
        }
    }
}

function sendEmail($message, $subject = 'Lead from Get My Certification Done', $to = 'info@getmycertificationdone.com', $fromName = 'Online Exams Master')
{
    $mail = new PHPMailer(true);
    try {
        // Server settings
        $mail->SMTPDebug = SMTP::DEBUG_SERVER;
        $mail->isSMTP();
        $mail->Host = 'smtp.hostinger.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'noreply@getmycertificationdone.com';
        $mail->Password = 'Certificate@2024';
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
        $mail->Port = 465;

        // Recipients for the main email
        $mail->setFrom('noreply@getmycertificationdone.com');
        $mail->addAddress($to);

        // Content for the main email
        $mail->isHTML(true);
        $mail->Subject = $subject;
        $mail->Body = $message;
        $mail->send();

        // echo 'Message has been sent';
    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
}

// GET CURRENT REQUEST
function current_url()
{
    $protocol = ((!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != 'off') || $_SERVER['SERVER_PORT'] == 443) ? "https://" : "http://";
    $url = $protocol . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
    return $url;
}
function clean($string)
{
    $string = str_replace(' ', '-', $string);
    return preg_replace('/[^A-Za-z0-9\-]/', '', $string);
}

