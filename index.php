<?php 
include 'includes/header.php';
include("config/db.php");

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
    <link rel="stylesheet" href="/blogwebsite/css/style.css"">
</head>
<body>
    <h1>Welcome to BlogWebsite!!</h1> 
</body>
</html>

<?php

mySqli_close($conn);

?>