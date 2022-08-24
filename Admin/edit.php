<?php 

include 'include/connect.php';

if (isset($_GET['id'])) 
{
	$id = $_GET['id'];

	$sql = "SELECT * FROM `add_members` WHERE id = '$id'";
	$run = mysqli_query($conn,$sql);

	while ($row = mysqli_fetch_assoc($run)) 
	{
		$first_name = $row['First Name'];
		$last_name = $row['Last Name'];
		$member_id = $row['Member ID'];
		$phone = $row['phone'];
		$email = $row['Email'];
		$city  = $row['City'];
		$State = $row['State'];
    $dob = $row['DOB'];
    $Year  = $row['Year Of Joining'];
    $postd = $row['Post/ Desgination'];
    $Centre = $row['CentreBranch'];
    $image = $row['image'];
    $addres = $row['Address'];


	}
}
?>
<?php include 'header.php'; ?>


<?php 

if (isset($_POST['update'])) 
{
	$first_name = $_POST['first_name'];
	$last_name = $_POST['last_name'];
	$member_id = $_POST['member_id'];
	$email = $_POST['email'];
	$phone = $_POST['phone'];
	$city = $_POST['city'];
	$state = $_POST['state'];
  $dob  = $_POST['dob'];
  $post_designation_year = $_POST['post_designation_year'];
  $address = $_POST['address'];
  $year_of_joining = $_POST['year_of_joining'];
  $image = $_FILES['image']['name'];
  $image_tmp_name = $_FILES['image']['tmp_name'];
  $image_folder = 'members_pic/'.$image;

	$update = "UPDATE `add_members` SET `First Name`='$first_name',`Last Name`='$last_name',`Member ID`='$member_id',`DOB`='$dob',`phone`='$phone',`Email`='$email',`Address`='$address',`City`='$city',`State`='$state',`Year Of Joining`='$year_of_joining',`Post/ Desgination`='$post_designation_year',`image`='$image' `CentreBranch` = '$Centre' WHERE id = '$id'";
	$result = mysqli_query($conn,$update);
	if ($result) 
	{
   move_uploaded_file($image_tmp_name, $image_folder);
	$status = 1;
	header('location:manage_members.php?status='.$status);
	}else{

		echo "not update";
	}


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
            <h1 class="text-center text-info">Update Members</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="btn btn-default"><a href="manage_members.php">Home</a></li>&nbsp &nbsp
             
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
                <h3 class="card-title">Update User</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form method="POST" action="#" enctype="multipart/form-data">
               <div class="card-body">
                     <div class="form-group">
                   <!--  <label for="exampleInputFile">Profile Picture</label> -->
                    <div class="input-group">
                      <div class="custom-file">

                      
                        
                       <!--  <input type="file" name="image" class="form-control" class="box" accept="image/jpg, image/jpeg, image/png, image/pdf" > -->
                      </div> 

                     
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">First Name </label>
                   <input type="text" class="form-control" name="first_name" id="first_name" value="<?php echo $first_name; ?>">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Last Name</label>
                    <input type="text" class="form-control" name="last_name" id="last_name" value="<?php echo $last_name;?>">
                  </div>
                   <div class="form-group">
                    <label for="exampleInputPassword1">Member ID</label>
                    <input type="text" class="form-control" name="member_id" id="member_id" value="<?php echo $member_id;?>">
                  </div>
                   <div class="form-group">
                      <label for="exampleInputPassword1">Email</label>
                      <input type="text" class="form-control" name="email" id="email" value="<?php 
                      echo $email?>">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword1">Phone</label>
                      <input type="text" class="form-control" name="phone" id="phone" value="<?php echo $phone ?>">
                    </div>
                     <div class="form-group">
                    <label for="exampleInputPassword1">City</label>
                    <input type="text" class="form-control" name="city" id="city" value="<?php echo $city  ?>">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">State</label>
                    <input type="text" class="form-control" name="state" id="state" value="<?php echo $State ?>">
                  </div> 

                   <div class="form-group">
                    <label for="exampleInputPassword1">DOB</label>
                    <input type="datetime" class="form-control" name="dob" id="exampleInputPassword1" value="<?php echo $dob; ?>">
                  </div>  

                  <div class="form-group">
                    <label for="exampleInputPassword1">Year Of Joining</label>
                     <select id="ddlYears"class="form-control" name="year_of_joining"></select>
                  </div>

                  <div class="form-group">
                    <label for="exampleInputPassword1">Post/ Desgination</label>
                    <input type="text" class="form-control" name="post_designation_year" id="exampleInputPassword1"  value="<?php echo $postd;?>" >
                  </div>

                  <div class="form-group">
                    <label for="exampleInputPassword1">Centre/Branch</label>
                   <select class="browser-default custom-select"  name="centre_branch" id="centre_branch">
                <option selected>select Centre/Branch</option>
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
                    <label for="exampleInputPassword1">Address</label>
                    <input type="text" class="form-control" name="address" id="exampleInputPassword1" value="<?php echo $addres; ?>">
                  </div>

                 <div class="custom-file">
                        
                        <input type="file" name="image" class="box" accept="image/jpg, image/jpeg, image/png, image/pdf" class="form-control">
                        <span><td><img src="../Admin/Initiative_image/<?php echo $image ?>" height="80" width="100"/></td></span>
                      </div>
                     
                    </div>

               
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" name="update" class="btn btn-primary">Add Members</button>
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
 


<script type="text/javascript">
    window.onload = function () {
        //Reference the DropDownList.
        var ddlYears = document.getElementById("ddlYears");
 
        //Determine the Current Year.
        var currentYear = (new Date()).getFullYear();
 
        //Loop and add the Year values to DropDownList.
        for (var i = 1950; i <= currentYear; i++) {
            var option = document.createElement("OPTION");
            option.innerHTML = i;
            option.value = i;
            ddlYears.appendChild(option);
        }
    };
</script>
