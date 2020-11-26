<?php 
include ('header.php');
?>
<head>
  <style>
    .attention
    {
      color: #ffc107;
    }
  </style>
<title>Facebook | Edit Profile</title>
</head>

        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Edit Profile</h1>
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
                  <h6 class="m-0 font-weight-bold text-success">Edit Profile</h6>
                </div>
                <div class="card-body">
                <div class="form-group">
                <h6 class="text-center">
                  <span class="attention">
                      Attention
                    </span>
                </h6>
                  <h6 class="text-center">
                  <span class="attention">
                      *If you want to update only one value enter the same value for rest of them*
                  </span>
                  </h6>
                  <h6 class="text-center">
                  <span class="attention">
                      *Also please logout and login to apply changes to your name*
                  </span>
                  </h6>
                    
                </div>
                <div class="form-group">
                <?php
                  $id = $_SESSION['user_id'];
                  $query = "SELECT * FROM login WHERE id = '$id'";
                  $result = mysqli_query($connection,$query);
                  if($result)
                  {
                    while($row = mysqli_fetch_array($result))
                    {
                      $img = $row['user_pfp'];
                      $name = $row['user_name'];
                      $des = $row['des'];

                    }
                  }

                ?>
                <form action="" method="POST" enctype="multipart/form-data">
                    <label for="">Name</label>
                    <input required placeholder="Enter New Name" value="<?php echo $name; ?>"  type="text" name="name" class="form-control" id="">
                </div>
                <div class="form-group">
                    <label for="">Description</label>
                    <textarea required placeholder="Enter New Description"  class="form-control" id="" cols="30" rows="5" name="des"><?php echo $des; ?></textarea>
                </div>
                <div class="form-group">
                    <label for="">Profile Pic</label>
                    <img style="width: 100px; height: 100px;" class="rounded-circle" src="<?php echo "images/$img";?>" alt="">
                    <input   type="file" name="user_pfp" class="form-control " id="">
                </div>

                <div class="form-group">
                    <input type="submit" name="edit_btn" value="Update" class="btn btn-primary" id="">
                </div>
                </form>
              <?php
                if(isset($_POST['edit_btn']))
                {
                      $id = $_SESSION['user_id'];
                      $name = $_POST['name'];
                      $des = $_POST['des'];
                      

                      $update = "UPDATE login SET user_name='$name',des='$des' WHERE id = '$id'";
                      $result = mysqli_query($connection,$update);
                      if($result)
                      {
                          echo "<script>alert('User Updated')</script>";
                      }
                }
              ?>
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
    