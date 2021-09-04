<?php
 $namess="harry";
 $income=200;

 /*php data types
1.string
2.integer
3.float
4.boolean
5.object
6.array
7.Null
 */

 //string-sequence of char
 $name="harry";
 $friend="rohan";
 echo"$name ka friend is $friend";
 //integer
 $income=200;
 $debit=-400;
 echo "$income is greater than $debit";
echo "<br>";
 //float
 $income=400.25; //overwritring the value
 $gss=20.1;
 echo "$income is greater than $gss";
 echo"</br>";
 //object -Instances of classes
 //employee is a class---->harry is object


 //array-used to store multiple value in single variable
 $friends =array("rohan" ,"shubham","skill","larry");
 echo"always counting of array start with 0";
 echo"</br>";
 echo var_dump($friends);
 echo"</br>";
 echo $friends[0];
 echo"</br>";
 echo $friends[1];
 echo"</br>";
 echo $friends[2];
 echo"</br>";
 echo $friends[3];
 echo"</br>";
 
 //Null
 $name=Null;
 echo var_dump($name)
 ?> 

 