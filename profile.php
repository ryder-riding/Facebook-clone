<?php 
include ('header.php');
?>
<head>
<title>Facebook | Profile</title>
</head>

        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">My Profile</h1>
            <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-success shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
          </div>

          <!-- Content Row -->
          <div class="row">

            <!-- Content Column -->
            <div class="col-lg-12 mb-4">

              <!-- Project Card Example -->
              <div class="card shadow mb-4">
                <div class="card-header py-3">
                  <h6 class="m-0 font-weight-bold text-success">Profile</h6>
                </div>
                <div class="card-body">
                    <div class="row">
                        <?php
                            $id = $_SESSION['user_id'];
                            $value = "SELECT * FROM login WHERE id = '$id'"; 
                            $result = mysqli_query($connection,$value);
                            if($result)
                            {
                              
                              while($row = mysqli_fetch_array($result))
                              {
                                $img = $row['user_pfp'];
                                $name = $row['user_name'];
                                $des = $row['des'] ;
                                

                              }

                            }
                        ?>
                        
                        <h3 class="col-lg-12 text-center mb-12">
                            <b>
                              <?php echo $name; ?>
                            </b>
                        </h3>
                       
                            
                      </div>
                      <div class="col-lg-6 text-center col-sm-12" style="margin-left: 250px;">
                        <h4>
                              Description
                              <p>
                                   <?php
                                        echo $des
                                  ?>
                              </p>
                            </h4>
                        </div>
                        <div class="mb-12" style="margin-top:-100px;">
                            <img src="images/<?php echo $img;?>" class="rounded-circle" style="width: 200px; height: 200px;" alt="">
                        </div>
                        <a href="edit_profile.php">
                        <button class="btn btn-outline-secondary" style="margin-left: 600px; margin-top:-350px;">Edit Profile</button>
                        </a>
                        
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
  