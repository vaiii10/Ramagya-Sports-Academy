<!-- INSERT INTO `form` (`No`, `Name`, `Email`, `Phone`, `Dob`, `Age`, `Gender`, `Address`, `State`, `City`, `Game`, 
`Duration`, `Suggestion`) VALUES ('1', 'abc', 'abc@gmail.com', '123456789', '2019-10-01', '12', 'M', 'abcabcabcja',
 'Gujarat', 'Jamnagar', 'Cricket', '1 month', 'no suggestion'); -->

<?php

 $server = "localhost";
 $username = "root";
 $password = "";

 $con = mysqli_connect($server, $username, $password);

 if(!$con){
    die ("Connection failed" + mysqli_connect_error());
    
}
//  echo "Connection Succesfull";

$name = $_POST['Name'];
$email = $_POST['Email'];
$phone = $_POST['Phone'];
$dob = $_POST['Dob'];
$age = $_POST['Age'];
$gender = $_POST['Gender'];
$address = $_POST['Address'];
$state = $_POST['State'];
$city = $_POST['City'];
$game = $_POST['Game'];
$duration = $_POST['Duration'];
$suggestion = $_POST['Suggestion'];


 $sql = "INSERT INTO `form`.`form` (`Name`, `Email`, `Phone`, `Dob`, `Age`, `Gender`, `Address`, `State`, `City`, `Game`, 
 `Duration`, `Suggestion`) VALUES ('$name', '$email', '$phone', '$dob', '$age', '$gender', '$address','$state', '$city', '$game', '$duration', '$suggestion')";

  echo $sql;

  if($con->query($sql)== true){
    echo "Data inserted";
  }
  else{
    echo "Error $sql <br> $con->error";
  }

  $con->close();
?>