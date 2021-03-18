
<?php
$server="localhost";
$user="root";
$password="";
$dbname="skill";

$conn= mysqli_connect($server,$user,$password,$dbname);

if(!$conn)
{
    die("Connection failed :". mysqli_connect_error());
}

else {
    echo "Sucessfully connected";
}


$sql= "DELETE FROM users  WHERE id= 3 ";


if (mysqli_query($conn,$sql)) {
    echo "New Record deleted has been inserted";
}
else {
  echo "Error:".$sql."<br>".mysqli_error($conn);
}


?>