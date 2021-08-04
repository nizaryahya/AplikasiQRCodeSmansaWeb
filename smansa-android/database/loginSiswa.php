<?php

    include('koneksi.php');
    $nis = $_POST['nis'];
    $password = $_POST['pass'];

    $Sql_Query = "SELECT * FROM siswa WHERE nis = '$nis' and password = '$password' ";

    $check = mysqli_fetch_array(mysqli_query($con,$Sql_Query));

    if(isset($check)){

     echo "Data Matched";
    }
    else{
     echo "Invalid Username or Password Please Try Again";
    }
    mysqli_close($con);

?>