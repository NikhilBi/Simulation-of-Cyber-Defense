<?php 
    include('database.php');

    $username = $_POST['username'];
    $password = $_POST['password'];

    $query = "SELECT * FROM bruteforce WHERE user='$username' AND pass = '$password'";
    $result = $con->query($query);

    if ($result->num_rows === 1) {
        $response['success'] = true;
        $response['message'] = "Bruteforce Successfull!";
    }else{
        $response['success'] = false;
        $response['message'] = "Bruteforce Failed!!"; 
    }

    header("Content-Type: application/json");
    echo json_encode($response);
?>