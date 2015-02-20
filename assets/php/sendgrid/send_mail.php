<?php

$dir = $_SERVER['DOCUMENT_ROOT'] . "/assets/php/";
@require_once $dir . "vendor/sendgrid-php/sendgrid-php.php";


// ** Heroku Postgres settings - from Heroku Environment ** //
$user = ($_ENV["SENDGRID_USERNAME"]) ? $_ENV["SENDGRID_USERNAME"] : "guest";
$pass = ($_ENV["SENDGRID_PASSWORD"]) ? $_ENV["SENDGRID_PASSWORD"] : "password";


$user_name      = ($_POST['name']) ? $_POST['name'] : "NOT PROVIDED";
$user_email     = $_POST['email'];
$user_budget    = ($_POST['budget']) ? $_POST['budget'] : "NOT PROVIDED";
$user_location  = ($_POST['location']) ? $_POST['location'] : "NOT PROVIDED";
$user_summary   = ($_POST['summary']) ? $_POST['summary'] : "NOT PROVIDED";

$message = '<b>User: </b>' . $user_name . '<br/>' .
'<b>Email: </b>' . $user_email . '<br/>' .
'<b>Budget: </b>' . $user_budget . '<br/>' .
'<b>location: </b>' . $user_location . '<br/>' .
'<b>Summary: </b>' . $user_summary;

$sendgrid       = new SendGrid($user, $pass);
$email_content  = new SendGrid\Email();
$email_content  ->addTo('bot@adorable.io')->
        setFrom($user_email)->
        setSubject('[Hire form] - ' . $user_name . ' - ' . $user_budget)->
        setText(strip_tags($message))->
        setHtml($message);

$sendgrid->send($email_content);

?>
