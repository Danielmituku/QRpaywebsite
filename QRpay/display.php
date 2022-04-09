
<html>
    <head>
        <title>Display</title>
        <script src="https://use.fontawesome.com/releases/v5.15.4/js/all.js"></script>

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

        <link rel="stylesheet" href="css/styles.css">
    </head>
    <body>
        <div class="container">
            <div class="col-lg-12">
                <br>
                <h1 class="text-warning text-center">Display table Data</h1>

                <table class="table table-striped table-hover table-bordered">
                    <tr class=" text-center">
                        <th>ID</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Password</th>
                        <th>Delete</th>
                        <th>Update</th>
                    </tr>
                <?php

                        $con = mysqli_connect('localhost','root');
                        mysqli_select_db($con,'qrpay');
                        
                        $query = "select * from form_entry";
                        $query_execute = mysqli_query($con,$query);

                        while($res = mysqli_fetch_array($query_execute)){

                ?>
                    <tr class="text-center">
                        <td><?php echo $res['id']; ?></td>
                        <td><?php echo $res['name']; ?></td>
                        <td><?php echo $res ['email']; ?></td>
                        <td><?php echo $res['password']; ?></td>
                        <td><button class="btn btn-danger"> <a href="delete.php?id=<?php echo$res['id'];?>" class="text-white">Delete</a> </button></td>
                        <td><button class="btn btn-primary"> <a href="update.php?id=<?php echo$res['id'];?>" class="text-white"> Update</a> </button></td>
                        
                    </tr>
                <?php

                    }
                 ?>
                       
                </table>
            </div>
        </div>
    </body>
</html>