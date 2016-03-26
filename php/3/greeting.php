<?php 

$name = $_POST["name"];

if($name == "Alice" || $name == "Bob"){
echo "Hello " .$_POST["name"];
}
else{
echo "Hello Guest";}

?>
