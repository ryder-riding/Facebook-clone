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
<title>Facebook | My Requests</title>
</head>

        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">My Request</h1>
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
                  <h6 class="m-0 font-weight-bold text-success">My Request</h6>
                </div>
                <div class="card-body">
                    <div class="row">
                        <?php
                            $user_id = $_SESSION['user_id'];
                            $get_user = "SELECT * FROM friend_req WHERE to_id = '$user_id' ";
                            $result = mysqli_query($connection,$get_user);
                            $num = mysqli_num_rows($result);
                            if($num >0)
                            {

                            

                            while($row = mysqli_fetch_array($result))
                            {
                                $from_id = $row['from_id'];
                                $id = $row['id'];
                                $status = $row['status'];

                                $get_name = "SELECT * FROM login WHERE id = '$from_id'";
                                $result_get_name =  mysqli_query($connection,$get_name);

                                while($rows = mysqli_fetch_array($result_get_name))
                                {
                                    $user_name = $rows['user_name'];  
                                    $user_pfp = $rows['user_pfp'];                    
                                }
                            }
                        ?>

                            <div class="col-lg-12" style="padding:25px">
                                <div class="col-lg-6">
                                    <img width="150px" height="150px" class="rounded-circle img-profile" src="images/<?php echo $user_pfp?>" alt="">
                                    <b>
                                        User Name : <?php echo $user_name; ?>
                                        <br>        
                                        <br>
                                        <form action="" method="POST">
                                            <input type="hidden" name="id" value="<?php echo $id;?>">
                                            <?php 
                                            if($status == "accepted")
                                            {
                                                echo "This user is your friend";
                                            }
                                            else
                                            {
                                                ?>
                                            <button type="submit" name="friend_req<?php echo $id;?>" class="btn btn-primary">
                                                Accept Request
                                            </button>
                                            <?php
                                            }

                                            ?>
                                        </form>
                                        <?php
                                        if(isset($_POST['friend_req'.$id]))
                                        {

                                            $id = $_POST['id'];

                                            $update = "UPDATE friend_req SET status='accepted' WHERE id='$id'";

                                            $result_update =mysqli_query($connection,$update);

                                            if($result_update)
                                            {
                                                echo "<script>alert('Friend request Accepted')</script>";
                                            }
                                            else
                                            {
                                                echo "Error".mysqli_error($connection);
                                            }
                                        } 
                                          else{
                                            
                                          }
                                      }
                                     
                                        ?>

                                            
                                                                                </b>
                                </div>
                            </div>
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
