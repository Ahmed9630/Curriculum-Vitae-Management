<?php
$db=mysqli_connect("localhost","root","","test");
if(!$db)
{
   die("connection failed ".mysqli_connect_error());
}

$A_mail = $_POST['A_mail'];
$answer = $_POST['answer'];




$query="INSERT INTO `reply`(`A_mail`, `answer`) VALUES
('$A_mail', '$answer');";
$result=mysqli_query($db,$query);
        echo"replying successfully...";




mysqli_close($db);
?>
