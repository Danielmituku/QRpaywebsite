<?php
 $con = mysqli_connect('localhost','root');
 mysqli_select_db($con,'qrpay');
 
 $id = $_GET['id'];

 $query = "DELETE FROM `form_entry` WHERE id=$id ";
 mysqli_query($con,$query);

 header('location:display.php');

?>