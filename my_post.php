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
<title>Facebook | My Posts</title>
</head>

        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">My Post</h1>
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
                  <h6 class="m-0 font-weight-bold text-success">My Posts</h6>
                </div>
                <div class="card-body">
                    <div class="row">


                        <?php
                            $user_id = $_SESSION['user_id'];
                            $fetch = "SELECT * FROM posts WHERE user_id='$id'";
                            $result = mysqli_query($connection,$fetch);
                            $check = mysqli_num_rows($result);

                            if($check)
                            {
                                while($row = mysqli_fetch_array($result))
                                {
                                    $id = $row['id'];
                                    $title = $row['post_title'];
                                    $des = $row['post_des'];
                                    $img = $row['post_img'];
                                    $date = $row['post_date'];
                                    ?>

                                        <h4>
                                          Title : <?php echo $title ?>
                                        </h4>
                                        <div class="col-lg-12">
                                            <div class="row">
                                                <div class="col-lg-4" style="margin-left: -8px;">
                                                    <img width="300px" height="200px" src="post_images/<?php echo $img;?>" alt="">
                                                </div>
                                                <div class="col-lg-8">
                                                    
                                                    
                                                    <br>
                                                    <br>
                                                    <div style="margin-top: -30px;">
                                                    <h3>Description</h3>
                                                    <h4 class="form-control" style="height: 100px;">
                                                        <?php echo $des?>
                                                    </h4>
                                                    </div>
                                                    
                                                       
                                                    
                                                    
                                                    
                                                </div>
                                                <p style="margin-left: 3px;">
                                                        Date : <?php echo $date?>
                                                    </p>
                                                   
                                            
                                        <?php
                                        $check_like = "SELECT * FROM likes WHERE post_id = $id";
                                        $result_like = mysqli_query($connection,$check_like);
                                        $num_rows = mysqli_num_rows($result_like);
                                        
                                        $user_id = $_SESSION['user_id'];
                                        $get_like = "SELECT * FROM likes WHERE post_id = $id";
                                        $result_like = mysqli_query($connection,$get_like);
                                        $count = mysqli_num_rows($result_like); 
                                        ?>

                                                <form action="" method="POST">
                                                    <button style="margin-left: 200px;" type="submit" <?php if($count>0){echo "disabled";}?> name="likebtn<?php echo $id?>" class="btn btn-primary">Like <span><?php echo $num_rows;?></span></button>
                                                </form>
                                                <?php
                                                  if(isset($_POST['likebtn'.$id]))
                                                  {
                                                    $user_id = $_SESSION['user_id'];



                                                    $insert_like = "INSERT INTO likes(post_id,user_id) VALUES('$id','$user_id')";
                                                    $result_like_second = mysqli_query($connection,$insert_like);
                                                    if($result_like_second)
                                                    {
                                                      $_SESSION["like_count"] = $count;
                                                      header("Location:my_post.php");
                                                    }
                                                    else{
                                                      echo "Error ".mysqli_error($connection);
                                                    }

                                                  }
                                                  
                                                ?>
                                                </div>
                                                    <h6 style="color: #f1bc31; background-color: #f1bc31">-- <!-- For Design --></h6>
                                                </div>

                                                

                                    <?php
                                    
                                }
                                
                            }
                            else{
                              echo "<script>alert('No Post Added PLs go to ')</script>";

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
 