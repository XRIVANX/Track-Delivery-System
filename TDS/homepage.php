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

    <section class = "hero">
        <div class = "hero-buttons">   
                <button id ="dashboard-button">Dashboard</button>
                <button id ="drivers-button">Drivers</button>
                <button id ="trucks-button">Trucks</button>
                <button id ="deliveries-button">Deliveries</button>
                <button id ="history-button">History Reports</button>
        </div>

        <section class ="hero-main">
            <div class ="hero-dashboard" id ="hero-dashboard">
                <h1>Dashboard</h1>
                    <div class = "dashboard-display">
                        <h1>Dashboard Management</h1>
                            <ul class ="dashboard-content">
                            </ul>
                    </div>
            </div>

            <div class = "hero-drivers" id = "hero-drivers" style ="display: none">
                <h1>Drivers</h1>
                    <div class ="drivers-display">
                        <div class = "mini-nav">
                        <h1>Driver Management</h1>
                        <button id ="add-driver-button"> + Add Driver</button>
                        </div>
                            <ul class ="drivers-content">
                            </ul>
                    </div>
            </div>

            <div class ="hero-trucks" id ="hero-trucks" style ="display: none">
                <h1>Trucks</h1>
                    <div class = "trucks-display">
                        <div class = "mini-nav">
                        <h1>Trucks Management</h1>
                        <button id = "add-trucks-button"> + Add Trucks</button>
                        </div>
                            <ul class ="trucks-content">
                            </ul>
                    </div>
            </div>

            <div class = "hero-deliveries" id = "hero-deliveries" style ="display: none">
                <h1>Deliveries</h1>
                    <div class = "deliveries-display">
                        <div class = "mini-nav">
                        <h1>Delivery Management</h1>
                        <button id = "add-deliveries-button"> + Add Deliveries</button>
                        </div>
                            <ul class ="devlieries-content">
                            </ul>
                    </div>
            </div>
        </section>
    </section>
<script src="homepage-script.js"></script>
</body>
</html>
