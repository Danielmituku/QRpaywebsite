<html>
<head>
    <title>registration </title>
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
    
                    <p class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4">Sign up</p>

                    <form  action="http://localhost/Qrpay/registration_page/connect.php" method="post" class="mx-1 mx-md-4" id="form" >
                      
                      <div class="d-flex flex-row align-items-center mb-4">
                
                        <div class="form-outline flex-fill mb-0 form-control1">
                          <input type="text" id="txtUserName" class="form-control" placeholder="Name" name="name" required/>
                          <small>Error message</small>
                        </div>
                      </div>
    
                      <div class="d-flex flex-row align-items-center mb-4">
                        
                        <div class="form-outline flex-fill mb-0 form-control1">
                          <input type="email" id="txtEmail" class="form-control" placeholder="Email"name="email" required/>
                          <small>Error message</small>
                        </div>
                      </div>
    
                      <div class="d-flex flex-row align-items-center mb-4">
                
                        <div class="form-outline flex-fill mb-0 form-control1">
                          <input type="password" id="txtPwd" class="form-control" placeholder="Password" name="password" required/>
                          <small>Error message</small>
                        </div>
                      </div>
    
                      <div class="d-flex flex-row align-items-center mb-4">
              
                        <div class="form-outline flex-fill mb-0 form-control1">
                          <input type="password" id="txtConPwd" class="form-control" placeholder="Retype your password"name="password2" required>
                          <small>Error message</small>
                        </div>
                      </div>
    
                      <div class="form-check d-flex justify-content-center mb-5">
                        <input class="form-check-input me-2"type="checkbox"value=""id="checkbox" />
                        <label class="form-check-label" for="form2Example3" >
                          I agree all statements in <a href="#!">Terms of service</a>
                        </label>
                      </div>
    
                     
                      <div class="d-flex justify-content-center mx-4 mb-3 mb-lg-4">
                        
                      </div>
                      
                      <div class="d-flex justify-content-center mx-4 mb-3 mb-lg-4">
                        <input id="register" type="submit" class="btn btn-primary btn-lg"></input>
                      </div>
    
                    </form>
    
                  </div>
                  <div class="col-md-10 col-lg-6 col-xl-7 d-flex align-items-center order-1 order-lg-2 title-image">
    
                    <img src="https://cdn-icons-png.flaticon.com/512/3456/3456426.png" class="img-fluid" alt="Sample image">
    
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

  </body>
  <script src="https://smtpjs.com/v3/smtp.js"></script>
      <script src="register.js" charset="utf-8"></script>
</body>
