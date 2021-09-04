<?php
//connecting to database
$servername="localhost";
$username="root";
$password="";

// create connection 
$conn=mysqli_connect($servername,$username,$password);
//create a db
$sql="CREATE database dbharry6";
$result=mysqli_query($conn,$sql);



//die if connection unsucessfu
if(!$conn){
    die("sorry we failed to connect<br>".mysqli_connect_error());
}
else{
    echo "connection was successful<br>";
}

//check for database connetion success
if($result){
    echo "the db was crested successfully<br>";

}
else{
    echo "db not created successfully because of -------><br>".mysqli_error($conn);
}
echo "the result is";
echo var_dump($result);
echo"<br>";


?>