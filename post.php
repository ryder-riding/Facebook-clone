<?php 
include ('header.php');
?>
<head>
<title>Facebook | Add Post</title>
</head>

        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Add Post</h1>
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
                  <h6 class="m-0 font-weight-bold text-success">Add Posts</h6>
                </div>
                <div class="card-body">
                <div class="form-group">
                <form action="" method="POST" enctype="multipart/form-data">
                    <label for="">Title</label>
                    <input required placeholder="Enter Post Title" required type="text" name="title" class="form-control" id="">
                </div>
                <div class="form-group">
                    <label for="">Description</label>
                    <textarea required placeholder="Enter Description" class="form-control" id="" cols="30" rows="5" name="des"></textarea>
                </div>
                <div class="form-group">
                    <label for="">Image</label>
                    <input  required type="file" name="file" class="form-control" id="">
                </div>
                 
                <div class="form-group">
                    <label for="">Date</label>
                    <input  required type="date" name="post_date" class="form-control" id="">
                </div>
                <div class="form-group">
                    <input type="submit" name="post_btn" value="Add Post" class="btn btn-primary" id="">
                </div>
                </form>
              <?php
                if(isset($_POST['post_btn']))
                {
                  $title = $_POST['title'];
                  $des = $_POST['des'];
                  $date = $_POST['post_date'];
                  $id = $_SESSION['user_id'];

                  $post_dir = "post_images/";
                  $post_file = $post_dir . basename($_FILES["file"]["name"]);

                  if(move_uploaded_file($_FILES["file"]["tmp_name"], $post_file))
                  {
                    $post_image_name = $_FILES["file"]["name"];


                    $insert = "INSERT INTO posts(user_id,post_title,post_des,post_img,post_date)VALUES('$id','$title','$des','$post_image_name','$date')";

                    $post_insert = mysqli_query($connection,$insert);
                    if($post_insert)
                    {
                      echo "<script>alert('Posted')</script>"; 
                    }
                    else{
                      echo "Error :".mysqli_error($connection);
                    }
                  }
                  else
                  {
                    echo "error";
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
 