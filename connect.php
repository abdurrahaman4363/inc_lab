<?php
$name = filter_input(INPUT_POST, 'name');
$email = filter_input(INPUT_POST, 'email');
$password = filter_input(INPUT_POST, 'password');

if (!empty($email)) {
    if (!empty($password)) {
        $servername = "localhost";
        $username = "root";
        $passW = "";
        $dbname = "users_info";

        $conn = new mysqli($servername, $username, $passW, $dbname);
        if (mysqli_connect_error()) {
            die('Connect Error(' . mysqli_connect_error() . ')' . mysqli_connect_error());
        } else {
            $sql = "INSERT INTO users (name, email, password) values ('$name', '$email', '$password')";
            if ($conn -> query($sql)) {
                echo " <li style='text-align:center; list-style: none; margin-top:50px;'><a style='text-decoration: none; color:red; '  href='http://localhost/inc_lab/project/index.php'>Go To Home</a></li>";
                echo "<br>";
                echo "<h1 style='text-align:center;'> Congratulation!! You've Logged Successfully </h1";
            } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
            }
            $conn->close();
        }
    } else {
        echo "Password should not be empty";
        die();
    }
} else {
    echo "Email should not be empty";
    die();
}
