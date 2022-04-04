<?php

//connect to database
$conn = mysqli_connect("localhost", "root", "", "svcc_borneo");

function register($data){
    global $conn;

    $username = strtolower(stripslashes($data["username"]));
    $email = $data["email"];
    $job = $data["job"];
    $password = mysqli_real_escape_string($conn, $data["password"]);
    $password2 = mysqli_real_escape_string($conn, $data["password2"]);

    //cek username availability
    // $result = mysqli_query($conn, "SELECT username FROM users WHERE username = '$username'");
    $result = mysqli_query($conn, "SELECT email FROM users WHERE email = '$email'");

    if(mysqli_fetch_assoc($result)){
        echo "<script>
                alert('Email is already taken!')
            </script>";
        return false;
    }

    //confirmation pass
    if($password !== $password2) {
        echo "<script>
                alert('Password does not match!')
            </script>";
        return false;
    }

    //enkripsi password
    $password = password_hash($password, PASSWORD_DEFAULT);
    // var_dump($password); die;

    // add user to database
    mysqli_query($conn, "INSERT INTO users VALUES('','$username','$email','$job','$password')");

    return mysqli_affected_rows($conn);

}

?>