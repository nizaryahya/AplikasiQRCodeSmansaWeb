<?php

    include('koneksi.php');
    $email = $_GET['email'];
    $password = $_GET['pass'];

    $Sql_Query = "SELECT * FROM guru WHERE email = '$email' and password = '$password' ";

    $check = mysqli_fetch_array(mysqli_query($con,$Sql_Query));

    if(isset($check)){
     $result = array();
     array_push($result,array(
             "id"=>$check['id_guru'],
             "nip"=>$check['nip'],
             "nama"=>$check['nama'],
             "jabatan"=>$check['jabatan'],
             "email"=>$check['email'],
             "pass"=>$check['password']
         ));
     echo json_encode(array('result'=>$result));
    }
    else{
     echo "Invalid Username or Password Please Try Again";
    }
    mysqli_close($con);

?>