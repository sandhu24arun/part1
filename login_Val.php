<?php

$email = $pass = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  
   if (empty($_POST["email"])) {
    $nameErr = "Name is required";
  } else {
    $email = ($_POST["email"]);
    }

  if (empty($_POST["password"])) {
    $nameErr = "Password is required";
  } 
  else if(strlen($_POST["password"]) <  8 ){
    
    $nameErr = "Password must be greater than 8 characters";
  }
  else {
    $pass = ($_POST["password"]);
    }
}

if(empty($nameErr)){

  
  echo "Successful Login!";

}
else{
  
  echo $nameErr;
}
  

?>