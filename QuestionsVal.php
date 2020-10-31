<?php

$questionsName = $mainTextBox = $secondTextBox = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  
   if (empty($_POST["questionsName"])) {
    $nameErr = "Question name is required";
    } else {
    $questionsName = ($_POST["questionsName"]);
    }
    
   if (empty($_POST["mainTextBox"])) {
    $nameErr = "Main TextBox Name is required";
   } else {
    $mainTextBox = ($_POST["mainTextBox"]);
   }
   
   if (empty($_POST["secondTextBox"])) {
    $nameErr = "List of skills is required";
   }
   else{
     $secondTextBox = ($_POST["secondTextBox"]);
     $secondTextBoxArr =  explode(",", $secondTextBox);
   }

   if(count($secondTextBoxArr) < 2){
    $nameErr = "List needs at least 2 SKILLZZZ";
   }


}



if(empty($nameErr)){

  echo "Successful!!!!!";

}
else{
  
  echo $nameErr;
}
  

?>