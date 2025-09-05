<?php
include'includes/header.php';
include("config/db.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="/Blogwebsite/css.style.css">
</head>
<body>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]) ?>" method="post">
        <h2>SIGNUP PAGE</h2>
        <label>Username</label>
        <input type="text" name="username" required>
        <label>Email</label>
        <input type="email" name="email" required>
        <label>Password</label>
        <input type="password" name="password" value="password" required>
        <label for="role">Role:</label>
        <select name="role" required>
        <option value="">Select role</option>
        <option value="writer">Writer</option>
        <option value="reader">Reader</option>
        </select>

        <input type="submit" name="Submit">
    </form>
</body>
</html>

<?php

    if ($_SERVER["REQUEST_METHOD"] === "POST"){
        $username = filter_input(INPUT_POST, "username", FILTER_SANITIZE_SPECIAL_CHARS);
        $email = filter_input(INPUT_POST, "email", FILTER_SANITIZE_SPECIAL_CHARS);
        $password = filter_input(INPUT_POST, "password", FILTER_SANITIZE_SPECIAL_CHARS);
        $role = filter_input(INPUT_POST, "role", FILTER_SANITIZE_SPECIAL_CHARS);
        
        
    
    if(empty($username || $email || $password || $role )){
        echo"Please enter a username/email/password/role";    
    }
    else{
        $hash=password_hash($password, PASSWORD_DEFAULT);
        $sql = "INSERT INTO users(username, email, password, role)
                VALUES ('$username','$email','$hash','$role')";
        try{
        mysqli_query($conn, $sql);
        header("Location:login.php");
         exit();
        }
        catch(mysqli_sql_exception){
            echo"That username is already taken";
        }
    }
}
mysqli_close($conn);
?>

    