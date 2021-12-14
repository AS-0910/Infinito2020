<?php
session_start();
$showerror = false;

include "connect.php";

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $inf = $_POST['infid'];

    if ($inf == $_SESSION["infid"]) {

        $name=$_SESSION['name'];
        $email=$_SESSION['email'];
        $infid=$_SESSION['infid'];
        $clg=$_SESSION['clg'];
        $oth_clg_name=$_SESSION['oth_clg_name'];
        $gen=$_SESSION['gen'];
        $phno=$_SESSION['phone'];
        $pass=$_SESSION['password'];
        $clgid=$_SESSION['clgid'];
        $hash=password_hash($pass , PASSWORD_DEFAULT);
        
        if($clg == "other")
        {
            $clg = $oth_clg_name;
        }
        $sql = "INSERT INTO `infinito2021php` (`Serial Number`,`InfId`, `Name`, `Email`,`Password`, `College`, `ID`, `Phone Number`, `Gender`, `dt`) VALUES (NULL, '$infid' , '$name', '$email', '$hash', '$clg', '$clgid', '$phno', '$gen', current_timestamp())";
        $result = mysqli_query($conn, $sql);
        
        if ($result) {
            //Sending confirmation mail
            $to = $email;
            $subject = "Infinito 2021 Registration Complete.";
            $message = "Hello ".$name." (".$infid.")".",<br>Thank you for registering.".
                        "<br>You have been successfully registered.".
                        "<br>Kindly note your Infinito ID, it will be required to register for any events.".
                        "Your Infinito ID is your unique verification ID for the fest.<br>".
                        "Wish you a great time ahead.".
                        "<br><br>".
                        "Regards,<br>".
                        "Team Infinito";
            //$headers = 'From: testmailinfinito@gmail.com' . "\r\n" .
                        //'MIME-Version:1.0'. "\r\n" .
                        //'Content-Type: text/html; charset=utf-8';
            require 'mail.php';
            $mail->send();
            header("location:index.php");
            session_unset();
            session_destroy();
        } else {
            $showerror = "Error! Please register again";
            session_unset();
            session_destroy();
        }
    } else {

        $showerror = "Error! Incorrect infinito id. Please try again.";
    }
}
