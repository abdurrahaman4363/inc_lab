<?php 

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "users_info";

$con = new mysqli($servername,$username,$password,$dbname);


    if ($con->connect_error) {
        die("Connection Failed");
    }

    if (isset($_POST['submit'])) {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $password = $_POST['password'];
    }

    $sql = "INSERT INTO users (name,email,password) values ('$name','$email','$password')";


    if ($con->query($sql) == true) {
        echo "Inserted successfully";
    } else {
        echo "Insert failed";
    }

    $con->close();



    // $servername = "localhost";
    // $username = "root";
    // $password = "";

    // $dbname = "users_info";

    // $con = new mysqli($servername, $username, $password, $dbname);

    // if ($con -> connect_error) {
    //     die("Connection Failed");
    // }


// $sql = "Create database users_info";
// $sql = "Create table users (id int(6) auto_increment primary key, name varchar(20),email varchar(20),password varchar(20))";

// if ($con -> query($sql) == true) {
//     echo "Inserted successfully";
// }
// else{
//     echo "Insert failed";
// }

// $con -> close();
?>