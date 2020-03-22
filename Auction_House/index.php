<?php

$username = filter_input(INPUT_POST, 'username');
$password = filter_input(INPUT_POST, 'password');
$email = filter_input(INPUT_POST, 'email');

if(!empty($username)){
    
    if(!empty($password)){

        $dbServername = "localhost";
        $dbUsername = "root";
        $dbPassword = ""
        $dbName = "loginsystem";

        $conn = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName);

        if (mysqli_connect_error()){
            die('Connect Error('.mysqli_connect_errno().')'
            .mysqli_connect_error());
        }
        else{
            $sql = "INSERT INTO account (username,password,email)
            values ('$username', '$password', $email)";
            if($conn->query($sql)){
                echo "New account is stored";
            }
            else{
                echo "Creating accoung error". $sql."<br>".$conn->error;
            }
            $conn->close();
        }
    }
    
    else{
        echo "Password is empty";
        die();
    }

}

else{
    echo "Username is empty";
    die();
}




?>
