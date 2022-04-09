

<html>
<head>
    <title>Update</title>
    <link href="style.css" rel="stylesheet" />
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="style.css" rel="stylesheet" />
      
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

  <body>
    <section class="vh-100" style="background-color: #eee;">
      <div class="container h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
          <div class="col-lg-12 col-xl-11">
            <div class="card text-black" style="border-radius: 25px;">
              <div class="card-body p-md-5">
                <div class="row justify-content-center">
                  <div class="col-md-10 col-lg-6 col-xl-5 order-2 order-lg-1">
    
                    <p class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4">Update your profile</p>

                    <?php
                        $con = mysqli_connect('localhost','root');
                        mysqli_select_db($con,'qrpay');
                        $id = $_GET['id'];
                        $query = "select * from form_entry where id = $id";
                        $query_execute = mysqli_query($con,$query);
                        $res = mysqli_fetch_assoc($query_execute);

                        if(isset($_POST['update'])){
                          $name = $_POST['name'];
                          $email = $_POST['email'];
                          $password = $_POST['password'];
                          $password2 = $_POST['password2'];
                          $id =$_GET['id'];
                          if($password==$password2){

                              $update_query = "update form_entry set id =$id,name='$name', email='$email', password='$password' where id =$id ";
                              $update_execute = mysqli_query($con,$update_query);
                              header('location:display.php');                          
                            
                            }
                          else{
                              echo"password doesnot match";
                          }
                        }

                    
                    ?>

                    <form method="post" class="mx-1 mx-md-4" id="form" >
                      
                      <div class="d-flex flex-row align-items-center mb-4">
                
                        <div class="form-outline flex-fill mb-0 form-control1">
                          <input type="text" id="txtUserName" class="form-control" placeholder="Name" name="name" value ="<?php echo $res['name']; ?>"required/>

                        </div>
                      </div>
    
                      <div class="d-flex flex-row align-items-center mb-4">
                        
                        <div class="form-outline flex-fill mb-0 form-control1">
                          <input type="email" id="txtEmail" class="form-control" placeholder="Email"name="email" value ="<?php echo $res['email']; ?>"required/>

                        </div>
                      </div>
    
                      <div class="d-flex flex-row align-items-center mb-4">
                
                        <div class="form-outline flex-fill mb-0 form-control1">
                          <input type="password" id="txtPwd" class="form-control" placeholder="Password" name="password"value ="<?php echo $res['password']; ?>" required/>

                        </div>
                      </div>
                    <div class="d-flex flex-row align-items-center mb-4">
              
                        <div class="form-outline flex-fill mb-0 form-control1">
                          <input type="password" id="txtConPwd" class="form-control" placeholder="Retype your password"name="password2" value ="<?php echo $res['password']; ?>"required>
                       
                        </div>
                      </div>
       
                      <div class="d-flex justify-content-center mx-4 mb-3 mb-lg-4">
                        <button class="btn btn-primary" type="submit" name="update">Update</button>
                      </div>
    
                    </form>
    
                  </div>
                  
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

  
</body>
  
</html>