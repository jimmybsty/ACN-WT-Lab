<?php
$servername = "localhost";
$username = "root";
$password = "";
$database_name = "wt";

$conn = new mysqli($servername, $username, $password, $database_name);

if ($conn -> connect_error){
    die("Connection error: ".connection_error);
}
if(isset($_POST['save']))
{

    $name=$_POST['name'];
    $course=$_POST['course'];
    $phoneNumber=$_POST['phoneNumber'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    $confirmPassword=$_POST['confirmPassword'];
        

    $sql_query="INSERT INTO regd_form (name, course, phoneNumber, email, password, confirmPassword) VALUES ('$name', '$course', '$phoneNumber', '$email', '$password', '$confirmPassword')";

        if (mysqli_query($conn,$sql_query))
        {
        echo " Registration Form submitted successfully!";
        }
        else
        {
        echo "Error: ".$sql . "<br>" . $conn->error;
        }
 $conn->close();
}
?>