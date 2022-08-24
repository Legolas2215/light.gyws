<?php include 'include/head.php'; ?>
    <body>
 <?php 
 include 'include/header.php'; 
 include 'include/connect.php';
 ?>
        <div class="header-height"></div>
         <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
        <div class="pager-header">
            <div class="container">
                <div class="page-content">
                    <h2>All Member</h2>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                        <li class="breadcrumb-item active">All Member</li>
                    </ol>
                </div>
            </div>
        </div><!-- /Page Header -->
            
            <section>
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <h2 class="mt-5 text-center mb-5">Home Branch Member</h2>
                        </div>
                    </div>
                </div>
            </section>


        <section class="about-section bd-bottom shape circle padding">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 xs-padding"></div>
                   <div class="col-md-3 xs-padding">
                        <div class="profile-wrap">
                            <img class="profile" src="img/profile.jpg" alt="profile">
                            <h3>Jonathan Smith <span>CEO & Founder of Charitify.</span></h3>
                            <p>The secret to happiness lies in helping others. Never underestimate the difference YOU can make in the lives of the poor, the abused and the helpless.</p>
                            
                        </div>
                    </div>

                    <div class="col-md-3 xs-padding">
                        <div class="profile-wrap">
                            <img class="profile" src="img/profile.jpg" alt="profile">
                            <h3>Jonathan Smith <span>CEO & Founder of Charitify.</span></h3>
                            <p>The secret to happiness lies in helping others. Never underestimate the difference YOU can make in the lives of the poor, the abused and the helpless.</p>
                            
                        </div>
                    </div>

                    <div class="col-md-3 xs-padding">
                        <div class="profile-wrap">
                            <img class="profile" src="img/profile.jpg" alt="profile">
                            <h3>Jonathan Smith <span>CEO & Founder of Charitify.</span></h3>
                            <p>The secret to happiness lies in helping others. Never underestimate the difference YOU can make in the lives of the poor, the abused and the helpless.</p>
                            
                        </div>
                    </div>
                    <div class="col-md-3 xs-padding">
                        <div class="profile-wrap">
                            <img class="profile" src="img/profile.jpg" alt="profile">
                            <h3>Jonathan Smith <span>CEO & Founder of Charitify.</span></h3>
                            <p>The secret to happiness lies in helping others. Never underestimate the difference YOU can make in the lives of the poor, the abused and the helpless.</p>
                            
                        </div>
                    </div>
                    <div class="col-md-3 xs-padding"></div>
                   
                </div>
            </div>
        </section><!-- /Causes Section -->

        <section class="team-section bg-grey bd-bottom padding">

            <div class="container-fluid" id="filter">
                <h3 class="text-center mb-40">All Member Details</h3>
                            <form action="" method="POST" class="form-horizontal">
                                <div class="form-group colum-row row">
                                    <div class="col-sm-2">
                                <select id="fetchval" name="fetchval" style="height: 48px; margin-left: 16px;" class="form-control">
                                    <option value="">Select Filter</option>
                                     <option value="Postwise">Postwise</option>
                                    <option value="Yearwise">Yearwise</option>
                                     <option value="Yearwise">Branchwise</option>
                                        </select>
                                    </div>

                                     <!-- <div class="col-sm-2">
                                      <input type="text" name="live_serch" id="live_serch" class="form-control" placeholder="Search">
                                    </div> -->
                                     <div class="col-sm-2">
                                          <div class="form-group">
                    <select class="browser-default custom-select" name="No_of_Members" id="member" onchange="memberfilter()">
                      <option selected>Select Branches</option>
                      <?php 
                      $sql = "SELECT * FROM `add_members`";
                      $run = mysqli_query($conn,$sql);

                      while ($row = mysqli_fetch_assoc($run)) 
                      {
                        ?>
                         <option value="<?php echo $row['CentreBranch']; ?>"><?php echo $row['CentreBranch']?></option>

                        <?php
                      }



                      ?>
                      
                     </select>
                   
                  </div>
                                    </div>

                                     <div class="col-sm-2">
                    <select class="browser-default custom-select" name="No_of_Members" id="year" onchange="yearfilter()">
                      <option selected>Select Year</option>

                      <?php 
                      $sql = "SELECT * FROM `add_members`";
                      $run = mysqli_query($conn,$sql);

                      while ($row = mysqli_fetch_assoc($run)) 
                      {
                        ?>
                         <option value="<?php echo $row['Year Of Joining'] ?>"><?php echo $row['Year Of Joining'] ?></option>

                        <?php
                      }



                      ?>
                      
                     </select>
                                    </div>


                                     <div class="col-sm-2">
                                       <button id="submit" name="submit" class="default-btn" type="submit">Filter</button>
                                    </div>

                                    <div id="serchdata">
                                        
                                    </div>



                                     <div class="col-sm-6">
                                      
                                    </div>
                                   
                                   
                                </div>
                            </form>
                <div class="team-wrapper row">

                    <div class="col-lg-12 sm-padding">

                        <div class="team-wrap row" id="menber">

                            <?php

                         $sql = "SELECT * FROM `add_members` WHERE status = 0";
                         $rsult = mysqli_query($conn,$sql);
                         while ($data = mysqli_fetch_assoc($rsult)) 
                         {
                        ?>

                               <div class="col-md-2.5 xs-padding">
                                <a href="member-details.php?id=<?php echo $data['id'] ?>">
                                <div class="team-details">
                                   <img src="./Admin/members_pic/<?php echo $data['image'] ?>" alt="team" style="height: 250px; cursor: pointer;">
                                    <div class="hover">
                                       
                                    </div>
                                </div>
                            </a>
                                 <p style="background: #fff; font-size: 20px; font-weight: 700; text-align: center; padding: 20px;"><?php echo $data['First Name'].' '.$data['Last Name'] ?></p>
                            </div><!-- /Team-1 -->


  <?php
}


?>

                          
                           
                        </div>
                    </div>
                </div>
            </div>
        </section><!-- /Team Section -->   
       


<?php include 'include/footer.php'; ?>

<script type="text/javascript">
    
    function memberfilter()
    {
        var x = document.getElementById("member").value;

        $.ajax({

            url: "mamber.php",
            method: "POST",
            data:{

                id: x
            },

            success: function(data)
            {

                $("#menber").html(data);

            }


        });
    }

</script>


<script type="text/javascript">
    
    function yearfilter()
    {
        var x = document.getElementById("year").value;

        $.ajax({

            url: "year.php",
            method: "POST",
            data:{

                id: x
            },

            success: function(data)
            {

                $("#menber").html(data);

            }


        });
    }

</script>

