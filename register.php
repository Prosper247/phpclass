<?php
if ($_POST["submit"]) {

$firstname = $_POST["firstname"];
$lastname = $_POST["lastname"];
$username = $_POST["username"];
$email = $_POST["email"];

$db = new mysqli('localhost', 'root', '', 'techone');
$sql = "INSERT INTO users(firstname, lastname, username, email) values('$firstname', '$lastname', '$username', '$email')";

$db->query($sql);
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="" method = "post">
        <input type="text" placeholder= "Firstname" name = "firstname">
        <br>
        <input type="text" placeholder= "Lastname" name = "lastname">
        <br>
        <input type="text" placeholder= "Username" name = "username">
        <br>
        <input type="email" placeholder= "Email" name = "email">
        <br>

        <input type="Submit" value= "Submit" name = "submit">
        <br>
    </form>
</body>
</html>