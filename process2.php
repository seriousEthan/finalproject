<?php
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$message = $_POST['message'];

$host = "sql103.epizy.com";
$dbUsername = "epiz_25815693";
$dbPassword = "I6OUpBPY8r8OU";
$dbName = "epiz_25815693_formData";
// Create connection
$conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);
if (mysqli_connect_error()){
die('Connect Error ('. mysqli_connect_errno() .') '
. mysqli_connect_error());
}
else{
$sql = "INSERT INTO formData (name, email, phone, message)
values ('$name','$email', '$phone', '$message')";
if ($conn->query($sql)){
echo "Thank you for your time.  We will contact you soon.";
}
else{
echo "Error: ". $sql ."
". $conn->error;
}
$conn->close();
}

?>
