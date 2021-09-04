<?php

$name="Harry is my friend";
echo $name;
echo "<br>";

echo "the length of my string is". strlen($name); 
echo "<br>";
echo "no of words are:".str_word_count($name);
echo "<br>";
echo strrev($name);
echo "<br>";
echo strpos($name,"is");
echo "<br>";
echo str_replace("Harry","rohan",$name);
echo "<br>";
echo str_repeat($name,134);
echo"<br>";
echo rtrim("<pre>    this is good boy  </pre>")


?>