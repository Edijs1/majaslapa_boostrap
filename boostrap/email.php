<?php

if(!isset($_POST['submit']))
{
    echo "Error: Vispirms jāaizpilda anketa!";
}

$email = $_POST['email'];

if (empty($email))
{
    echo "Epasta lauks ir obligāti jāaizpilda!";
}

$email_from = 'outcast.id.lv';
$email_subject = 'Outcast jaunumi';
$email_body = "Jūsu ēpasts ticis apstiprināts Outcast jaunumiem";

$header = "No: $email_from";

mail($email, $email_subject, $email_body, $header);
header('sazina.hmtl');