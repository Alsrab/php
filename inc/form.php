<?php
$fname = $_POST['fname'] ?? '';
$lname = $_POST['lname'] ?? '';
$email = $_POST['email'] ?? '';
$errors = [
    'firstnameError' => '',
    'lastNameError' => '',
    'emailError' => '',

];
if (isset($_POST['submit'])) {

    if (empty($fname)) {
        $errors['firstnameError'] = "First name is required";
    } if (empty($lname)) {
        $errors['lastNameError'] = "Last name is required";
    } if (empty($email)) {
        $errors['emailError'] = "Email is required";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors['emailError'] = "Invalid email format";
    } 
    if (!array_filter($errors)) {
        $fname = mysqli_real_escape_string($con, $_POST['fname']);
        $lname = mysqli_real_escape_string($con, $_POST['lname']);
        $email = mysqli_real_escape_string($con, $_POST['email']);
        $sql = "INSERT INTO users (firstname, lastname, email) 
    VALUES ('$fname', '$lname', '$email')"; 

        if (mysqli_query($con, $sql)) {
            echo "Data saved" . header("Location:" . $_SERVER['PHP_SELF']);
        } else {
            echo "Error: " . mysqli_error($con);
        }
    }
}
