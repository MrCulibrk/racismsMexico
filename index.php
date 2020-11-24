<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

if (!empty($_POST)) {
    $message = $_POST["message"];
    if (!empty($_POST["name"])) {
        $name = $_POST["name"];
    } else {
        $name = "Anonymous";
    }
    if (!empty($message)) {
        $serverName = "localhost";
        $userName = "root";
        $password = "";
        $dbName = "racism";
        
        $conn = new mysqli($serverName, $userName, $password, $dbName);

        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        $sql = "INSERT into stories (name, message) values ('$name', '$message')";

        if ($conn->query($sql) === true) {
            
        } 
    }
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Roboto&display=swap" rel="stylesheet">
    <title>Racism</title>
</head>

<body>
    <div class="background">
    </div>
    <div class="quote">
        <h1>&ldquo; quote &bdquo;</h1>
    </div>
    <div class="quote">
        <h1>Share your story</h1>
        <div class="container">
            <form action="" method="post">
                <label for="name">Your name</label><br>
                <input type="text" id="name" name="name" placeholder="Leave open if anonymous"><br>

                <label for="message">What do you want to share?</label><br>
                <textarea name="message" id="message" cols="100" rows="20"></textarea><br>

                <input id="button" type="submit" value="Submit">

            </form>
        </div>
    </div>
</body>

</html>