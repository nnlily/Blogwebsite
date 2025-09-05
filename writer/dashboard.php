<?php 
include 'Blogwebsite/includes/header.php';
include("Blogwebsite/config/db.php");

if(isset($_POST["logout"])) {
    session_destroy();
    header('Location: index.php');
    exit(); // important
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>