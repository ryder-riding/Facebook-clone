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
<title>Facebook | Feedback</title>
</head>

        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Feedback</h1>
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
                  <h6 class="m-0 font-weight-bold text-success">Feedback</h6>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-12">
                            <h3 class="text-center">
                                 Feedback
                            </h3>
                            <form action="" method="POST">
                                <div class="form-group">
                                    <textarea placeholder="Enter Feedback" class="form-control" id="" cols="30" rows="5" name="feed"></textarea>
                                </div>
                                <div class="form-group" >
                                    <button class="btn btn-primary" name="feed_btn">Send Feedback</button>
                                </div>
                            </form>
                            <?php
                                if(isset($_POST['feed_btn']))
                                {
                                  $id = $_SESSION['user_id'];
                                  $feedback = $_POST['feed'];
                                  $query = "INSERT INTO feedback (user_feedback,user_id) VALUES('$feedback','$id')";
                                  $insert = mysqli_query($connection,$query);
                                  if($insert)
                                  {
                                    echo "<script>alert('Feedback Added');document.location='feedback_list.php'</script>";
                                  }
                                } 
                                // else{
                                //   echo "no";
                                // }
                            ?>
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
 