<?php
include "dbCon.php";
$name=$_POST["name"];
$email=$_POST["email"];
$number=$_POST["number"];
$instructors=$_POST["instructors"];


$query="insert into contact(name,email,number,instructors) values('$name','$email','$number','$instructors')";
$eng=mysqli_query($con,$query);
if($eng)
{
     header("location: contact.html");
}
else
{
    echo "not store";
}

?>