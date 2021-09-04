<?php
echo "welcome to connect mysql database";
/*ways to connect mysql database
1.Mysqli extension-1.classes and object 
                    2.functions
2.PDO
*/
//connecting to database
$servername="localhost";
$username="root";
$password="";

// create connection 
$conn=mysqli_connect($servername,$username,$password);
//die if connection unsucessful
if(!$conn){
    die("sorry we failed to connect".mysqli_connect_error());
}
else{
    echo "connection was successful";
}
  



?>
