<?php include 'include/head.php'; ?>
    <body>
 <?php
  include 'include/header.php'; 
  include 'include/connect.php';

 ?>
 <style>
     .team-sec-bg {
    background-color: #b9c2b2;
    
}
h2.team-heading {
    font-size: 26px;
    text-align: center;
}
.team-box {
    height: 400px;
    background-color: #fff;
    border-radius: 30px;
    margin: auto;
    width: 368px;
    box-shadow: rgba(0, 0, 0, 0.45) 0px 25px 20px -20px;
}
.img-sec {
    border-radius: 100px;
    overflow: hidden;
    height: 150px;
    width: 150px;
    position: relative;
    margin: auto;
    top: -60px;
    border: 8px solid #00000030;
}
h2.name-heading {
    font-size: 32px;
    font-weight: 600;
    color: #333;
    text-align: center;
}
h4.name-p {
    font-size: 13px;
    color: #18d26e;
    letter-spacing: 1px;
    text-align: center;
    padding-top: 10px;
}
.icons {
    text-align: center;
}
.icons li {
    display: inline-block;
    border: 1px solid #18d26e;
    border-radius: 50%;
    width: 40px;
    height: 40px;
    padding-top: 11px;
    color: #18d26e;

}
ul.icon-list {
    margin-top: 22px;
}
 </style>
        
        
        
       

        

                                     <!-- <div class="col-sm-2">
                                      <input type="text" name="live_serch" id="live_serch" class="form-control" placeholder="Search">
                                    </div> -->
                                     <div class="col-sm-2">
                                          <div class="form-group"></div> </div>

                  

                                         <br><br>
                                     <div class="col-sm-2">
                                        <h2 class="mt-5 text-center mb-5">Branches Members</h2>
                                    </div>

                                    <div id="serchdata">
                                        
                                    </div>



                                     <div class="col-sm-6">
                                      
                                    </div>
                                   
                                   
                                </div>
                            </form>
                <div class="team-wrapper row">

                    <div class="col-lg-12 sm-padding">

                        <div class="team-wrap row" id="new">

                            <?php 

                            if (isset($_GET['branche'])) 
                            {
                             $branche = $_GET['branche'];
                             $sql = "SELECT * FROM `add_members` WHERE `CentreBranch` = '$branche'";
                             $rsult = mysqli_query($conn,$sql);

                             while ($row = mysqli_fetch_assoc($rsult)) 
                             {
                                ?>

                                <div class="col-md-2.5 xs-padding">
                                <a href="initiatives-data.php?id=<?php echo $data['id'] ?>">
                                <div class="team-details">
                                    <img src="./Admin/members_pic/<?php echo $row['image'] ?>" alt="team" style="height: 250px; cursor: pointer;">
                                    <div class="hover">
                                       
                                    </div>
                                </div>
                            </a>
                                 <p style="background: #fff; font-size: 20px; font-weight: 700; text-align: center; padding: 20px;"><?php echo $row['First Name'].' '.$row['CentreBranch'] ?></p>


                            </div><!-- /Team-1 -->


                                


                                <?php
                             }


                            }


                            ?>
                          
                           
                        </div>
                    </div>
                </div>
            </div>
        </section><!-- /Team Section -->   
 

        

                                   <div class="col-sm-2">
                                          <div class="form-group"></div> </div>

                  

                                         <br><br>
                                     <div class="col-sm-2">
                            <h2 class="mt-5 text-center mb-5">Branches  Initiative</h2>
                                    </div>

                                    <div id="serchdata">
                                        
                                    </div>



                                     <div class="col-sm-6">
                                      
                                    </div>
                                   
                                   
                                </div>
                            </form>
                <div class="team-wrapper row">

                    <div class="col-lg-12 sm-padding">

                        <div class="team-wrap row" id="new">

                            <?php 

                            if (isset($_GET['branche'])) 
                            {
                             $branche = $_GET['branche'];
                              $sql = "SELECT * FROM `initiative` WHERE `branchs` = '$branche'";
                             $rsult = mysqli_query($conn,$sql);

                             while ($row = mysqli_fetch_assoc($rsult)) 
                             {
                                ?>

                                <div class="col-md-2.5 xs-padding">
                                <a href="initiatives-data.php?id=<?php echo $data['id'] ?>">
                                <div class="team-details">
                                    <img src="./Admin/Initiative_image/<?php echo $row['image'] ?>" alt="team" style="height: 250px; cursor: pointer;">
                                    <div class="hover">
                                       
                                    </div>
                                </div>
                            </a>
                                 <p style="background: #fff; font-size: 20px; font-weight: 700; text-align: center; padding: 20px;"><?php echo $row['first_title'].' '.$row['secound_title'] ?></p>


                            </div><!-- /Team-1 -->


                                


                                <?php
                             }


                            }


                            ?>
                          
                           
                        </div>
                    </div>
                </div>
            </div>
        </section><!-- /Team Section -->   


 

<?php include 'include/footer.php'; ?>

