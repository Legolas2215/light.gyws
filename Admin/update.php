<?php 
include 'include/connect.php';
include 'header.php';
if (isset($_GET['id'])) 
{
   $id = $_GET['id'];
   $sql = "SELECT * FROM `add_branches` WHERE id = '$id'";
   $result = mysqli_query($conn,$sql);
   while ($row = mysqli_fetch_assoc($result)) 
   {
   	$collage = $row['Collage Name'];
   	$center = $row['Center Name'];
   	$centerid = $row['Center ID'];
   	$city = $row['City'];
   	$state = $row['State'];
   	$coodinoter = $row['Center Coordinator'];
    $YearOfJoining = $row['Year Of Joining'];
    $No_Members = $row['No_Members'];
    $Branches = $row['Branches'];
    $Center_Head  = $row['Center Head'];
   }
}
?>

<?php 

if (isset($_POST['update'])) 
{
	$collage = $_POST['collage'];
	$center = $_POST['center'];
	$centerid = $_POST['centerid'];
	$city = $_POST['city'];
	$state = $_POST['state'];
	$coodinoter = $_POST['coodinoter'];

	$sql = "UPDATE `add_branches` SET `Collage Name`='$collage',`Center Name`='$center',`Center ID`='$centerid',`City`='$city',`State`='$state',`Center Coordinator`='$coodinoter' WHERE id = '$id'";

	$update = mysqli_query($conn,$sql);
	if ($update) 
	{
		$status = 10;

		header('location:manage_branches.php?status='.$status);
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
            <h1>Branches Update </h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="btn btn-default"><a href="manage_branches.php">Home</a></li>&nbsp
              <a href="add-branches.php" class="btn btn-primary">Add Branches</a>
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
                <h3 class="card-title">Branches Update </h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form method="POST" action="#">
                <div class="card-body">
               <div class="form-group">
                    <label for="exampleInputEmail1">College Name</label>
                    <input type="text" class="form-control" name="collage" id="collage"
                    value="<?php echo $collage; ?>">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Center Name </label>
                    <input type="text" class="form-control" name="center" id="center"
                    value="<?php echo $center ?>">
                  </div>
                   <div class="form-group">
                    <label for="exampleInputEmail1">Center ID </label>
                    <input type="text" class="form-control" name="centerid" id="centerid" 
                    value="<?php echo $centerid; ?>">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">City</label>
                    <input type="text" class="form-control" name="city" id="city"
                    value="<?php echo $city; ?>">
                  </div>

                   <div class="form-group">
                    <label for="exampleInputEmail1">State</label>
                    <input type="text" class="form-control" name="state" id="state" 
                    value="<?php echo $state; ?>">
                  </div> 

                   <div class="form-group">
                    <label for="exampleInputEmail1">Year Of Joining</label>
                    <input type="text" class="form-control" name="state" id="state" 
                    value="<?php echo $YearOfJoining; ?>">
                  </div> 

                   <div class="form-group">
                    <label for="exampleInputEmail1">No.of Members</label>
                    <input type="text" class="form-control" name="state" id="state" 
                    value="<?php echo $No_Members; ?>">
                  </div> 

                   <div class="form-group">
                    <label for="exampleInputEmail1">Branches</label>
                    <input type="text" class="form-control" name="state" id="state" 
                    value="<?php echo $Branches; ?>">
                  </div> 


                   <div class="form-group">
                    <label for="exampleInputEmail1">Center Head</label>
                    <input type="text" class="form-control" name="state" id="state" 
                    value="<?php echo  $Center_Head; ?>">
                  </div> 



                   <div class="form-group">
                    <label for="exampleInputPassword1">Center Coordinator</label>
                      <input type="text" class="form-control" name="coodinoter" id="coodinoter" value="<?php echo $coodinoter; ?>">
                  </div>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" name="update" class="btn btn-primary">Upade Branches</button>
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