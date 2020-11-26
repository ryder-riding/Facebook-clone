<?php
include('db.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <title>Facebook | Register</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body class="bg-gradient-primary">

  <div class="container">

    <div class="card o-hidden border-0 shadow-lg my-5">
      <div class="card-body p-0">
        <!-- Nested Row within Card Body -->
        <div class="row">
          <div class="col-lg-5 d-none d-lg-block bg-register-image"></div>
          <div class="col-lg-7">
            <div class="p-5">
              <div class="text-center">
                <h1 class="h4 text-gray-900 mb-4">Create an Account!</h1>
              </div>
              <form class="user" action="" method="POST" enctype="multipart/form-data"> 
                <div class="form-group row">
                  <div class="col-sm-12 mb-3 mb-sm-0">
                    <input required type="text" class="form-control form-control-user" id="exampleFirstName" placeholder="Full name" name="name">
                  </div>
                </div>
                <div class="form-group">
                  <input required type="email" class="form-control form-control-user" id="exampleInputEmail" placeholder="Email Address" name="email">
                </div>
                <div class="form-group">
                  <label for="">Profile Photo</label>
                  <input type="file" class="form-control" id="exampleInputPFP" name="pfp" >
                </div>
                <div class="form-group row">
                  <div class="col-sm-6 mb-3 mb-sm-0"> 
                    <input required  type="password" class="form-control form-control-user" id="exampleInputPassword" onchange="pass_login()" placeholder="Password" name="pass">
                  </div>
                  <div class="col-sm-6">
                    <input required type="password" class="form-control form-control-user" id="exampleRepeatPassword" onchange="pass_login()"  placeholder="Confirm Password">
                  </div>
                </div>
                
                
                <button disabled type="submit" class="btn btn-primary btn-user btn-block" id="login_d" name="createacc">
                  Register Account
                </button>
              </form>
              <?php
                    if(isset($_POST['createacc']))
                    {
                       $email = $_POST['email'];
                       $pass = $_POST['pass'];
                       $name = $_POST['name'];
                       

                       $query = "SELECT * FROM `login` WHERE user_email= '$email'";
                       $result = mysqli_query($connection,$query);

                       if($result)
                       {
                         $check = mysqli_num_rows($result);
                         if($check == 0)
                         {
                          $pfp_target = "images/";
                          $pfp_file = $pfp_target . basename($_FILES["pfp"]["name"]);

                          if(move_uploaded_file($_FILES["pfp"]["tmp_name"], $pfp_file))
                          {
                            $pfp_file_name = $_FILES["pfp"]["name"];

                            $insert= "INSERT INTO `login`(user_name,user_email,user_password,user_pfp) VALUES ('$name','$email','$pass','$pfp_file_name')";
                            $result_2 = mysqli_query($connection,$insert);
                            if($result_2)
                            {
                              echo "<script>alert('User registered');document.location='index.php'</script>";
                            }


                            else
                            {
                            echo "Error :".mysqli_error($connection);
                            }
                          }
                          else
                          {
                            echo "sorry";
                          }
                          
                         }


                         else
                        {
                           echo "<script>alert('Email Already Exists')</script>";
                         }  
                       }


                       else
                        {
                         echo "error in".mysqli_error($connection);
                         }
                        }
                    
                ?>
              <hr>
              <div class="text-center">
                <a class="small" href="forgot-password.html">Forgot Password?</a>
              </div>
              <div class="text-center">
                <a class="small" href="index.php">Already have an account? Login!</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>
  <script>
    function pass_login() 
    {
        var pass = document.getElementById("exampleInputPassword").value;
        var c_pass = document.getElementById("exampleRepeatPassword").value;

        if(pass === c_pass) {
            document.getElementById("login_d").removeAttribute("disabled");
        } 
        else 
        {
            document.getElementById("login_d").setAttribute("disabled", "disabled");
        }
    }
  </script>
</body>

</html>
                