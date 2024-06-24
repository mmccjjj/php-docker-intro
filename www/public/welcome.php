<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome Site</title>
</head>
<body>

<?php
if ($_SERVER["REQUEST_METHOD"]== 'POST'){
echo 'Welcome '. $_POST['first_name'];
session_start();
$_SESSION['fname']= $_POST['first_name'];

    if(empty($_POST['first_name'])){
        header('location:index.php');
    }
}else {
    header('location:index.php');
}
echo"<br>";
echo"<a href= 'index.php'>home</a>";
?>
    
</body>
</html>