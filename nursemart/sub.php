<html>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/sub.css" />
  <title>Subscription</title>
</head>
<body>

<div>
  <h1>Subscription is successful!</h1>
  <a href="home.html"><img src="img/first/lightLogo.png" alt=""></a>
  <button> <a href="home.html">Home Page</a> </button>


</div>
<?php
$con = mysqli_connect("localhost","root","","myDataBase");

if(isset($_POST['submit'])){

  $name = mysqli_real_escape_string($con, $_POST['name']);
  $email = mysqli_real_escape_string($con, $_POST['email']);

  $sql = "INSERT INTO Subscription (name, email) VALUES ('$name', '$email')";

  $result = mysqli_query($con, $sql);

  if(!$result){
    die('Could not post data!' .mysqli_error());
  }else{
    header('Location: home.index');
    exit();
  }
}

alert("Subscription is successful!");
function alert($msg) {
  echo "<script type='text/javascript'>alert('$msg');</script>";
}

?>
</body>
</html>






      