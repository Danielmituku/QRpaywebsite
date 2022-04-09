
<?php
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $password2 = $_POST['password2'];

    if(!empty($name) || !empty($password)||!empty($password)||!empty($email)){
        // if($password == $password2){
            $conn = new mysqli('localhost','root','','qrpay');
            if(mysqli_connect_error()){
                die('connect Error('.mysqli_connect_errno().')'.mysqli_connect_error());
            }
            else{
                $insert = "INSERT INTO form_entry(name, email, password) Values(?,?,?)";
                $stmt = $conn->prepare( $insert);
                $stmt->bind_param("sss",$name,$email,$password);
                $stmt->execute();
                echo"New record Add";
                header('location:..//display.php');
            }
             
        // }
        // else{
        //     echo "Password does not match";
        // }
       
    }
    else{
        echo"ALL field are Required";
        die();
    }
    $conn->close();
?>

