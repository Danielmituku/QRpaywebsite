<html>
    <body>
<?php

include 'include/config.php';

if (isset($_REQUEST['submit'])) {

echo $query="SELECT * from `reg` where email='".$_REQUEST['email']."' AND
`password`='".$_REQUEST['password']."'";
$result=mysqli_query($con,$query);
$count=mysqli_num_rows($result); if($count > 0)
{
echo "Logged in"; header("location:index.php");

}

else
{
echo"error:";
}

}
?>
</body>
</html>