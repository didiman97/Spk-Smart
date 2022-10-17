<?php
    session_start();
    include "../../assets/conf/conn.php";
    if (isset($_POST['login'])) {
        $USERNAME = $conn->real_escape_string($_POST['username']);
        $PASSWORD = $conn->real_escape_string($_POST['password']);

        $sql = mysqli_query($conn, "SELECT * FROM login WHERE username='$USERNAME' AND password = '$PASSWORD'");
        $row = mysqli_fetch_array($sql);

        if(mysqli_num_rows($sql)==0){
            echo "<script>
                alert('Uppsss... Login Gagal');
                location.href='../../index.php';
            </script>";
        }else{
            if ($USERNAME == $row['username'] && $PASSWORD == $row['password']) {
                session_start();
                $_SESSION['username'] = $USERNAME;
                header('Location:../../index.php');
            }
        }
    }
?>