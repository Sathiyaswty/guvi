<?php
$email = $_POST['email'];
$password1 = $_POST['password1'];

$conn = mysqli_connect('localhost','root','',guvi);
if($conn->connect_error){
    die("Connection failure:" . $conn->connect_error);
}
$select = "select * from register where email='$email'";
$result = mysqli_query($conn, $select);
$count = mysqli_num_rows($result);

if($count > 0){
    $data = $result->fetch_assoc();
    if($data['password1']===$passwor8iijjd1){
        echo "login successfully";
        die;
    }
    else{
        echo "Invalid password";
    }
}else{
     echo 2;
     exit;
}