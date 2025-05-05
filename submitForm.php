<?php
// filepath: /Users/johnsmacbookpro/Desktop/fmga_website/fmga/submitForm.php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $fname = htmlspecialchars($_POST['fname']);
    $lname = htmlspecialchars($_POST['lname']);
    $email = htmlspecialchars($_POST['email']);
    $phone = htmlspecialchars($_POST['phone']);

    $data = "First Name: $fname\nLast Name: $lname\nEmail: $email\nPhone: $phone\n\n";

    // Write the data to a file
    file_put_contents('registrations.txt', $data, FILE_APPEND);

    echo "Registration successful!";
}
?>