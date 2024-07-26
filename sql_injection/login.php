<?php
    include('database.php');

    $username = $_POST["username"];
    $password = sha1(md5($_POST["password"]));

    $query = "SELECT * FROM details WHERE user = '$username' AND pass ='$password'";
    $result = $con->query($query);

    if ($result->num_rows === 1) {
        ?>
        <script>
            alert("Login Successfull!");
            window.location.href = "sql_injection.html";
        </script>
        <?php
    } else {
        ?>
        <script>
            alert("Login Failed!");
            window.location.href = "sql_injection.html";
        </script>
        <?php
    }
?>