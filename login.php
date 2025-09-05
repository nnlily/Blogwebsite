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
    <link rel="stylesheet" href="/blogwebsite/css/style.css">
</head>
<body>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]) ?>" method="post">
        <label>Username</label>
        <input type="text" name="username" >
        <label>Password</label>
        <input type="password" name="password" >
        <input type="submit" name="login">

    </form>
</body>
</html>

<?php

if ($_SERVER["REQUEST_METHOD"] === "POST"){
        $username = filter_input(INPUT_POST, "username", FILTER_SANITIZE_SPECIAL_CHARS);
        $password = filter_input(INPUT_POST, "password", FILTER_SANITIZE_SPECIAL_CHARS);    
    
    if(empty($username) || empty($password)){
        echo"Please enter a username/password";    
    }
             
    
    else{
        $sql = "SELECT password, role FROM users WHERE username = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("s", $username);
        $stmt->execute();
        $result = $stmt->get_result();

            if ($result->num_rows === 1) {
            $row = $result->fetch_assoc();
            $hashedPassword = $row['password'];
            

       

                if(password_verify($password, $hashedPassword)){
                    $_SESSION['username'] = $username;
                    $_SESSION['role'] = $row['role'];
                    header("Location:index.php");
                    exit();
                }
            
                else{
                    echo"Your password is incorrect!";
                }
            }
            else{
                echo"No such username!";
            }
            $stmt->close();
            
        
    }
}


mysqli_close($conn);
?>