<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "prihlaseni";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if (isset($_GET["submit"])){

    $name1 = $_GET["name"];
    $surname1 = $_GET["surname"];
    $gender1 = $_GET["gender"];
    $email1 = $_GET["email"];
    $login1 = $_GET["login"];
    $password1 = $_GET["password"];
    $age1 = $_GET["age"];
    $question1 = $_GET["question"];

     $sql = "INSERT INTO user (name, surname, gender, email, age, question, login, password) VALUES ('$name1', '$surname1','$gender1','$email1','$age1','$question1','$login1','$password1')";
    if ($conn->query($sql) === TRUE) {
        echo "Request was accepted<br>";
    } 
    else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }


}

?>

<html>
<head>
<link rel="stylesheet" href="style.css">
</head>
    <body>
        <form action="" method="get">
        <label for="name">Name:</label><br>
        <input type="text" id="name" name="name"><br> 

        <label for="surname">Surname:</label><br>
        <input type="text" id="surname" name="surname"><br>

        <label for="login">Login:</label><br>
        <input type="text" id="login" name="login"><br>

        <label for="password">Password:</label><br>
        <input type="password" id="password" name="password"><br>

        <label for="email">Email:</label><br>
        <input type="email" id="email" name="email"><br>

        <label for="age">Age:</label><br>
        <input type="number" id="age" name="age"><br><br>

        <label for="gender">Gender:</label>
            <select name="gender" id="gender">
            <option value="man">Man</option>
            <option value="woman">Woman</option>
            <option value="else">Else</option>
            </select>
            <br>

            <p>Do you like icecream?</p>
            <label for="yes">Yes</label>
            <input type="radio" id="question" name="question">
            <label for="no">No</label>
            <input type="radio" id="question" name="question">
            <br>

            <input name="submit" type="submit" value="Submit">
</body>
</html>
