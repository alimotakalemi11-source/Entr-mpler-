<?php
$secret = "6LfpeDYtAAAAANg0PmEb7CRoqOghgNnlFzy5Bz7b";

$response = $_POST['g-recaptcha-response'];

$verify = file_get_contents(
    "https://www.google.com/recaptcha/api/siteverify?secret=$secret&response=$response"
);

$result = json_decode($verify);

if (!$result->success) {
    die("Bitte bestätige, dass du kein Roboter bist.");
}