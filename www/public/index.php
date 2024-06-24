<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP Include Exercise</title>
</head>

<body>

  <?php
  include './utils/prettyPrint.php';

  $workDays= [
    "Montag", "Dienstag", "Mittwoch", "Donnerstag"
  ];

  prettyPrint($workDays);
  test(5,5);

  /* phpinfo(); */
  $name= "...";

  session_start();

  if (!empty($_SESSION['fname'])){
    $name= $_SESSION['fname'];
  }
  

  echo " <h1>Hello World My Name is $name</h1>";

  echo "<form action='welcome.php' method= 'POST'>";
  echo "<input type= 'text' name= 'first_name'>";
  echo "<input type= 'text' name= 'last_name'>";
  echo "<button type 'submit'>Absenden</button>";
  echo "</form>";


  ?>

</body>

</html>