<?php

$conn = mysqli_connect("127.0.0.1","root","");

if(!$conn){
    echo "Server is not connected";
}
if(!mysqli_select_db( $conn, "databankenproject")){
echo "Database is not connected!";
}


$name = $_POST["username"];
$email = $_POST["email"] ;
$message = $_POST["message"];


$sql = "INSERT INTO contact(name, email, message) VALUES('$name','$email','$message')";

if(!mysqli_query($conn,$sql)){
echo "Query was not inserted to database";
}
else{
    echo "<p style='text-align: center; margin: 50px auto'> <b>Thank you for your feedback </b> we will contact you soon!</p>";
}

header("refresh:2; url=contact.php");
?>


