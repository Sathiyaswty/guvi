<?php 
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$email = $_POST['email'];
$password1 = $_POST['password1']; 
$conn = mysqli_connect('localhost','root','','guvi');
if($conn->connect_error){
    die("Connection failure:". $conn->connect_error);
}
$select = "select * from registration where email='$email'";
$result = mysqli_query($conn, $select);
$count = mysqli_num_rows($result);

if($count==0){
    $insert = "INSERT INTO registration(firstname, lastname, email, password1) 
    VALUES('$firstName', '$lastName', '$phno', '$email', '$pass1')";
    mysqli_query($conn, $insert);
    echo 1;
    require_once _DIR_ . '/vendor/autoload.php';
$con = new MongoDB\Client("mongodb://localhost:27017");
$db = $con->guvi;
$tb = $db->profile;

$insertOne = $tb->insertOne(["name" => $firstname, "lname"=>$lastname, "email"=>$email]);

    exit;
}else{
    echo 2;
    exit;
}
?>