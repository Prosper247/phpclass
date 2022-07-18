<?php

if (isset($_POST["submit"])) {
$firstname = $_POST['firstname'];
$lastname = $_POST["lastname"];
$username = $_POST["username"];
$email = $_POST["email"];
$dob = $_POST["DOB"];
$gender = $_POST["gender"];
$language = $_POST["Language"];
$qualification = $_POST["education"];
$qualification = implode(',', $qualification);
// echo $qualification;


$db = new mysqli('localhost', 'root', '', 'techone');
$sql = "INSERT INTO mealahs(firstname, lastname, username, email, DOB, gender, Language, Qualification)
VALUES('$firstname', '$lastname', '$username', '$email', '$dob', '$gender', '$language', '$qualification')";
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
<form action = "" method = "post">
        <fieldset>
            <legend><strong>BIO DATA</strong></legend>
            <P>
                FIRST NAME:
                <input type="text" placeholder="FIRSTNAME" name = "firstname">
            </P>
            <p>
                SURNAME:
                <input type="text" placeholder="SURNAME" name = "lastname">
            </p>
            <p>
                USERNAME:
                <input type="text" placeholder="USERNAME" name = "username">
            </p>
                <p>
                    EMAIL:
                    <input type="email" placeholder="EMAIL" name = "email">
            </p>
            <p>
                DATE OF BIRTH:
                <input type="date" name = "DOB">
            </p>
            <p>
                GENDER:
                <input type="radio" value="male" name="gender">MALE
                <input type="radio" value="female" name="gender">FEMALE
            </p>
            <p>
                LANGUAGE:
                <select name="Language">
                    <option>English</option>
                    <option>Yoruba</option>
                    <option>French</option>
                    <option>Greek</option>
                    <option>Latin</option>
                </select>
            </p>
            <p>
                QUALIFICATIONS:
                <input type="Checkbox" name="education[]" value="SSCE">SSCE
                <input type="Checkbox" name="education[]" value="OND">OND
                <input type="Checkbox" name="education[]" value="HND">HND
                <input type="Checkbox" name="education[]" value="BSC">BSC
                <input type="Checkbox" name="education[]" value="MSC">MSC
                <input type="Checkbox" name="education[]" value="PHD">PHD
            </p>
        </fieldset>
        <div class="photo">
        <h4>UPLOAD PHOTO:
            <input type="FILE" name="Passport">
        </h4>
        <h4>Who are you in Five sentences</h4>
        <textarea name="" id="" cols="30" rows="10"></textarea>
            <input type="Submit" value="Send to Apply" name="submit">
    </div>
    </form>

</body>
</html>