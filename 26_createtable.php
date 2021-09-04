<?php
//connecting to database
$servername="localhost";
$username="root";
$password="";
$database="dbharry6";
// create connection 
$conn=mysqli_connect($servername,$username,$password,$database);



//die if connection unsucessfu
if(!$conn){
    die("sorry we failed to connect<br>".mysqli_connect_error());
}
else{
    echo "connection was successful<br>";
}

//create a table in the db
$sql="CREATE TABLE `dbharry6`.`phpmytable` ( `id` INT(255) NOT NULL , 
 `username` VARCHAR(20) NOT NULL ,  `age` INT(10) NOT NULL ,  `gender` VARCHAR(20) NOT NULL ) ENGINE = InnoDB";
$result=mysqli_query($conn,$sql);
//check for table creation
if($result){
    echo "the db was crested successfully<br>";

}
else{
    echo "db not created successfully because of -------><br>".mysqli_error($conn);
}
?>