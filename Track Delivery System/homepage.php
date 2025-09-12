<?php

include("connect.php");

if (!isset($_SESSION['user_id'])) {
    header("Location: index.php");
    exit();
}

$user_id = $_SESSION['user_id'];
$sql = "SELECT firstname, lastname FROM accounts WHERE accountid = '$user_id'";
$result = $conn->query($sql);

$user_firstname = '';
$user_lastname = '';

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $user_firstname = htmlspecialchars($row['firstname']);
    $user_lastname = htmlspecialchars($row['lastname']);
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css" />
    <link rel="stylesheet" href="general.css" />
    <title>TDS</title>
</head>
<body class = "homepage">
    <section class="nav">
        <h1>TDS</h1>
        <ul class="nav-buttons">
            <li><span class="user-name"><?php echo $user_firstname . " " . $user_lastname; ?></span></li>
            <li class="log-out-button"><a href="logout.php">Log Out</a></li>
        </ul>
    </section>
</body>
</html>
