<?php

 include 'include/connect.php';

    if (isset($_GET['id'])) {
        $id=$_GET['id'];

        

        $selquery="select * from  add_members where id=$id";
        $runquery=mysqli_query($conn,$selquery);
        $row=mysqli_num_rows($runquery);
        $arr=mysqli_fetch_array($runquery);
    }

    ?>

        <?php include 'include/head.php'; ?>
            <body>
         <?php include 'include/header.php'; ?>

        <div class="header-height"></div>
        
        <div class="pager-header">
            <div class="container">
                <div class="page-content">
                    <h2>Member Details</h2>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                        <li class="breadcrumb-item active">Member Details</li>
                    </ol>
                </div>
            </div>
        </div><!-- /Page Header -->


          <section class="about-section bg-grey bd-bottom padding">
            <div class="container">
                <div class="row about-wrap">
                    <div class="col-md-6 xs-padding">
                        <div class="about-image">
                            <img src="./Admin/members_pic/<?php echo $arr['image'] ?>" alt="about image">
                        </div>
                    </div>
                    <div class="col-md-6 xs-padding">
                        <div class="about-content">
                            <h2>Member Details</h2>
                           <h4>Full Name : <?php echo $arr['Collage Name'].' '.$arr['Last Name'] ?></h4>
                                <b>
                                    Member id : <?php echo $arr['Member ID'] ?>
                                </b>    
                                <br>
                                <b>
                                    DOB : <?php echo $arr['DOB'] ?>
                                </b>
                                 <br>
                                <b>
                                    Email : <?php echo $arr['Email'] ?>
                                </b>
                                 <br>
                                <b>
                                    Phone : <?php echo $arr['phone'] ?>
                                </b>
                                 <br>
                                <b>
                                    Address : <?php echo $arr['Address'] ?>
                                </b>
                                 <br>
                                <b>
                                    City : <?php echo $arr['City'] ?>
                                </b>
                                 <br>
                                <b>
                                    State : <?php echo $arr['State'] ?>
                                </b>
                                 <br>
                                <b>
                                    Year of Joining : <?php echo $arr['Year Of Joining'] ?>
                                </b>
                                 <br>
                                <b>
                                    Post Designation Year : <?php echo $arr['Post/ Desgination'] ?>
                                </b>
                                 <br>
                                <b>
                                    Center Branch : <?php echo $arr['Centre/Branch'] ?>
                                </b>
                                <br><br>
                                 <b>About</b>
                                <p><?php echo $arr['about']; ?></p>
                              <div class="share-wrap">
                                <h4>Connect with us</h4>
                                <ul class="share-icon">
                                    <li><a href="#"><i class="ti-facebook"></i> Facebook</a></li>
                                    <li><a href="#"><i class="ti-twitter"></i> Twitter</a></li>
                                    
                                    <li><a href="#"><i class="ti-instagram"></i> Instagram</a></li>
                                    <li><a href="#"><i class="ti-linkedin"></i> Linkedin</a></li>
                                </ul>
                            </div><!-- Share Wrap -->
                            
                        </div>
                    </div>
                </div>
            </div>
        </section>
       <?php include 'include/footer.php'; ?>

