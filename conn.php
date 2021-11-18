<?php
if(isset($_POST['submit']))
{
$d1=$_POST['n1'];
$d2=$_POST['n2'];
$d3=$_POST['n3'];
$d4=$_POST['n4'];

include 'fold/db.php';
$q="INSERT INTO contact(cname,cemail,cphone,cmessage) value('$d1','$d2','$d3','$d4')";
$e=mysqli_query($con ,$q);
 
if($e)
{
    header('location:foto.php?insert=ok');
}
 else
{
   header('location:foto.php?noinsert=ok');   
}

}
?>

