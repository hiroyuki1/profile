<?php

// Email recipient
$EmailTo = "acting.hiro27@gmail.com";

$errors = "";

// Name
if (empty($_POST["name"])) {
    $errors = "名前を入力してください";
} else {
    $name = $_POST["name"];
}

// Email
if (empty($_POST["email"])) {
    $errors .= "メールアドレスを入力してください";
} else {
    $email = $_POST["email"];
}

// Subject
if (empty($_POST["subject"])) {
    $errors = "題名を入力してください";
} else {
    $Subject = $_POST["subject"];
}

// Message
if (empty($_POST["message"])) {
    $errors .= "メッセージ内容を入力してください";
} else {
    $message = $_POST["message"];
}

// Prepare email body text
$Body = "";
$Body .= "Name: ";
$Body .= $name;
$Body .= "\n";
$Body .= "Email: ";
$Body .= $email;
$Body .= "\n";
$Body .= "Message: ";
$Body .= $message;
$Body .= "\n";

// Send email
$success = mail($EmailTo, $Subject, $Body, "From:".$email);

// Redirect to success page
if ($success && $errors == ""){
   echo 'success';
}
else{
    echo $errors;
}
?>
