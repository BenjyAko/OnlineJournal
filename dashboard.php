<?php
    session_start();
    $username = $_SESSION['username'];
?>
<!DOCTYPE html>
<html>
<head>
    <title>Journal</title>
</head>
<body>
    <h1><?php echo "Welcome ".$username; ?></h1>
    <h1>What would you like to do today?</h1>
    <p><a href="list-journal-entries.php"> Read your journal entries?</a></p>
    <p><a href="write-journal-entry.php"> Write an entry</a></p>
    <p><a href="sign-up.php">Logout</a></p>
</body>
</html>