
<?php include 'header.php'; ?>
<?php

  include 'include/connect.php';

    if (isset($_GET['id'])) {
        $id=$_GET['id'];

        $selquery="select * from initiative where id=$id";
        $runquery=mysqli_query($conn,$selquery);
        $row=mysqli_num_rows($runquery);
        $arr=mysqli_fetch_array($runquery);
    }

    ?>
<body class="hold-transition sidebar-mini">
<!-- Site wrapper -->
<div class="wrapper">
  <!-- Navbar -->
<?php include 'sidebar.php'; ?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Update Initiative </h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Update Initiative</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

  
       <!-- Main content -->
    <section class="content">
      <div class="container">
        <div class="row">
          <div class="col-md-3"></div>
          <!-- left column -->
          <div class="col-md-6">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Update Initiative</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
             <form method="POST" action="" enctype="multipart/form-data">
                <div class="card-body">
               <div class="form-group">
                    <label for="exampleInputEmail1">First Title </label>
                    <input type="text" class="form-control" name="first_title" id="exampleInputEmail1" placeholder="Region" value="<?php echo $arr['first_title'] ?>">
                  </div>
                   <div class="form-group">
                    <label for="exampleInputEmail1">text</label>
                    <input type="text" class="form-control" name="secound_title" id="exampleInputEmail1" placeholder="Region" value="<?php echo $arr['secound_title'] ?>">
                  </div>

                   <div class="form-group">
            <label for="exampleInputPassword1">Centre/Branch</label>
          <select name="centre_branch" class="browser-default custom-select"  id="centre_branch">
                <option>select Centre/Branch</option>
                <?php
                $sql = "SELECT * FROM `add_branches`";
                $run = mysqli_query($conn,$sql);

                while ($row = mysqli_fetch_assoc($run))
                 {
                  ?>

                  <option><?php echo $row['Collage Name'] ?></option>


                  <?php
                }




                 ?>
               
            </select>
                  </div>


                   <div class="form-group">
                    <label for="exampleInputEmail1">image</label>
                    <input type="file" class="form-control" name="image" id="image">
                  <span>
                    <td><img src="../Admin/Initiative_image/<?php echo $arr['image']?>" height="80" width="100"/></td>
                  </span>
                  </div>
                </div>
                <!-- /.card-body -->



                <div class="card-footer">
                  <button type="submit" name="upload" class="btn btn-primary">Update Initiatives</button>
                </div>
              </form>
            </div>
            <!-- /.card -->


          </div>
          <!--/.col (left) -->
        <div class="col-md-3"></div>

           
         
          </div>
          <!--/.col (right) -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

 <?php include 'footer.php' ?>
 <?php
include 'include/connect.php';
?>

<?php
error_reporting(0);
?>
<?php
  $msg = "";
  
  // If upload button is clicked ...
  if (isset($_POST['upload'])) {
    $first_title=$_POST['first_title'];
    $secound_title=$_POST['secound_title'];
    $listing_date=$_POST['listing_date'];
    // $branche = $_POST['branche'];
    $image = $_FILES['image']['name'];
    $image_tmp_name = $_FILES['image']['tmp_name'];

    $image_folder = 'Initiative_image/'.$image;
    
        // Get all the submitted data from the form
        $sql = "UPDATE `initiative` SET `first_title`='$first_title',`secound_title`='$secound_title',`image`='$image' WHERE id = '$id'";
        // Execute query
        $result=mysqli_query($conn, $sql);  
        // Now let's move the uploaded image into the folder: image
        if ($result)  {
          move_uploaded_file($image_tmp_name, $image_folder);
            echo "<script>alert('Updated Sucessfully')</script>";
            echo "<script>window:location='view-event.php'</script>";
        }else{
             echo "<script>alert('Please try again latter')</script>";
             echo "<script>window:location='update-initiatives.php'</script>";
      }
  }
?>