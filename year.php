<?php 
include 'include/connect.php';

$k = $_POST['id'];
$k = trim($k);

$sql = "SELECT * FROM `add_members` WHERE `Year Of Joining` = '$k'";
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