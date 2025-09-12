<?php

include("connect.php");

if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $password = md5($password);

    $sql = "SELECT accountid, username FROM accounts WHERE username='$username' AND passwords='$password'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $_SESSION['user_id'] = $row['accountid'];
        $_SESSION['username'] = $row['username'];
        header("Location: homepage.php");
        exit();
    } else {
        $login_error = "Invalid username or password";
        echo "<script>
                alert('$login_error');
                window.location.href = 'index.php';
              </script>";
    }
}

if (isset($_POST['register'])) {
    $reg_username = $_POST['register-username'];
    $reg_password = $_POST['register-password'];
    $reg_password = md5($reg_password);  
    $reg_firstname = $_POST['register-firstname'];
    $reg_lastname = $_POST['register-lastname'];
    $reg_sex_type = $_POST['sex-type'];
    $reg_email = $_POST['register-email'];
    $reg_contactno = $_POST['register-contactno'];

    $checkUsername = "SELECT * FROM accounts WHERE username='$reg_username'";
    $result = $conn->query($checkUsername);

    if ($result->num_rows > 0) {
        $registration_error = "Username already exists!";
        echo "<script>
                alert('$registration_error');
                window.location.href = 'index.php';
              </script>";
    } else {
        $insertQuery = "INSERT INTO accounts (username, passwords, firstname, lastname, sex, email, contactno) 
                        VALUES (?, ?, ?, ?, ?, ?, ?)";

        $stmt = $conn->prepare($insertQuery);
        $stmt->bind_param("sssssss", $reg_username, $reg_password, $reg_firstname, $reg_lastname, $reg_sex_type, $reg_email, $reg_contactno); 

        if ($stmt->execute()) {
            header("location: index.php");
            exit();
        } else {
            $registration_error = "Error: " . $stmt->error;
            echo "<script>
                alert('$registration_error');
                window.location.href = 'index.php';
              </script>";
        }
        $stmt->close();
    }
}