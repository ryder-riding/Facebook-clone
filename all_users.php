<?php 
include ('header.php');
?>
<head>
    <style>
      .icon:hover
      {
        background-color: red;
      }
    </style>
<title>Facebook | All Users</title>
</head>

        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">All Users</h1>
            <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-success shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
          </div>

          <!-- Content Row -->
         

          <!-- Content Row -->

         

          <!-- Content Row -->
          <div class="row">

            <!-- Content Column -->
            <div class="col-lg-12 mb-4">

              <!-- Project Card Example -->
              <div class="card shadow mb-4">
                <div class="card-header py-3">
                  <h6 class="m-0 font-weight-bold text-success">All Users</h6>
                </div>
                <div class="card-body">
                  <div class="row">
                    <?php
                          $user_id = $_SESSION['user_id'];
                          $all_user = "SELECT * FROM login";
                          $result_all_user = mysqli_query($connection,$all_user);

                            while($row = mysqli_fetch_array($result_all_user))
                            {
                                $id = $row['id'];
                                $user_name = $row['user_name'];
                                $user_pfp = $row['user_pfp'];

                                if($id != $user_id)
                                {


                                  ?>
                                        <div class="col-lg-12" style="padding : 25px">
                                              <div class="col-lg-6">
                                                    <img width="150px" height="150px" class="rounded-circle img-profile" src="images/<?php echo $user_pfp?>" alt="User Profile Photo">
                                                    <b>
                                                      User Name : <?php echo $user_name;?>
                                                      <br>
                                                      <br>
                                                      <form action="" method="POST">
                                                        <input type="hidden" name="usr_id" id="" value="<?php echo $id;?>">
                                                        <button type="submit"  name="friend_req<?php echo $id; ?>" class="btn btn-primary"> 
                                                            Send Request
                                                        </button>
                                                      </form>
                                                      <?php
                                                        if(isset($_POST['friend_req'.$id]))
                                                        {
                                                          $user_friend_id = $_POST['usr_id'];
                                                          $user_id = $_SESSION['user_id'];

                                                          $insert = "INSERT INTO friend_req(from_id,to_id) VALUES('$user_id','$user_friend_id')";
                                                          $result_req = mysqli_query($connection,$insert);
                                                          if($result_req)
                                                          {
                                                            echo "<script>
                                                                  alert('Friend Request Sent');
                                                                  </script>";
                                                          }
                                                          else
                                                          {
                                                            echo "Error".mysqli_error($connection);
                                                          }

                                                        }
                                                      ?>
                                                    </b>
                                              </div>

                                        </div>
                                  <?php
                                }
                            }
                     ?>
                  </div>
                </div>
              </div>


              <!-- Color System -->
              <div class="row">
               
                 
            </div>

            </div>

           
          </div>

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

     
  <!-- End of Page Wrapper -->
 
  <?php 
include ('footer.php');
?>
 