<?php
//Database Configuration
$servername="localhost"; // change if necessary
$username="root";  // MYSQL username
$password="maria";//mysql password
$dbname="form_data";

//creating a new connection
$conn=new mysqli($servername,$username,$password,$dbname);

//check connection
if($conn->connect_error) {
    die("Connection failed: ". $conn->connect_error);// die displays error no along with message and terminates everything
}
else{
    echo"Connection Successful";
}

//Get form Data
$name1=$_POST['txtname'];
$email=$_POST['txtemail'];
$message1=$_POST['txtmessage'];

echo "<h3>$name <br> $email <br> $message";
//Prepare and bind
$stmt= $conn->prepare("INSERT INTO form_data(name1,email,message1) VALUES (?,?,?)");           // why do you use prepare statement 
$stmt-> bind_param("sss",$name,$email,$message);
                                                                                    // protects backend from injection attack
                                                                                      //bind parameters string string string string 
if($stmt->execute()){
    echo "<br>New record created successfully";
}
else{
    echo "Error: ",$stmt->error;
}
//close connection
$stmt->close();
$conn->close();

?>