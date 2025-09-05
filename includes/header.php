<?php 
session_start();

echo "Logged in as: " . ($_SESSION['username'] ?? 'Not set') . "<br>";
echo "Role is: " . ($_SESSION['role'] ?? 'Not set') . "<br>";
?>

<nav>
<a href="index.php">BlogWebsite</a>
<?php
    if(!isset($_SESSION['username'])):
?>
        <a href="login.php">Login</a>
        <a href="signup.php">Signup</a>
<?php 
    else:
?>
<?php
    if($_SESSION['role'] === 'writer'):
?>
    <a href="/blogwebsite/writer/dashboard.php">Writer Dashboard</a>
<?php
    elseif($_SESSION['role'] === 'reader'):
?>
    <a href="/blogwebsite/reader/dashboard.php">Reader Dashboard</a>
<?php
    endif;
?>
    
    <a href="index.php">BlogWebsite</a>
    <?php if (!isset($_SESSION['username'])): ?>
        <a href="login.php">Login</a>
    <?php else: ?>
        <form method="post" action="index.php" style="display:inline;">
            <button type="submit" name="logout">Logout</button>
        </form>
    <?php endif; ?>
    
<?php
    endif;
?>

</nav>