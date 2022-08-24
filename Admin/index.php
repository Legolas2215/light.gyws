<?php 

include 'include/connect.php';

if (isset($_POST['login'])) 
{
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM `user` WHERE username = '$username' AND password='$password'";
    $run = mysqli_query($conn,$sql);
    if (mysqli_num_rows($run) > 0)
     {
        $status = 1;

        header('location:admin_dasborad.php?status='.$status);
    }else{

        $status = 2;
         header('location:index.php?status='.$status);
    }


}


?>


<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">

<link rel="stylesheet" type="text/css" href="style.css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

<!DOCTYPE html>
 <html lang="en" class="no-js"> 
    <head>
        <meta charset="UTF-8" />
        <title>Admin login</title>
		<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />
		<link href="https://fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
		
    </head>
    <body>
        <div class="container">
           
            <header>	
            </header>
            <section>				
                <div id="container_demo" >
                   
                    <a class="hiddenanchor" id="toregister"></a>
                    <a class="hiddenanchor" id="tologin"></a>
                    <div id="wrapper">
                        <div id="login" class="animate form">

                            <span>
                                <?php 

                                if (isset($_GET['status'])) 
                                {
                                   $status = $_GET['status'];

                                   if ($status == 2) 
                                   {
                                       ?>

                                        <div class="alert alert-danger">
                        <strong>Invalid !</strong> User name and Password Invalid
                          </div>


                                       <?php
                                   }
                                }


                                ?>
                            </span>



                            <form  action="#" autocomplete="on" method="POST"> 
                                <h1>Admin Login</h1> 
                                <p> 
                            <label for="username" class="uname" >Username </label>
                                    <input id="username" name="username" required="required" type="text" placeholder="user"/>
                                </p>
                                <p> 
                                    <label for="password" class="youpasswd">Password </label>
                                    <input id="password" name="password" required="required" type="password" placeholder="eg. X8df!90EO" /> 

                                     <input type="submit" name="login" class="btn btn-primary" value="Login">
                                </p>
                            </form>
                        </div>

                     
						
                    </div>
                </div>  
            </section>
        </div>
    </body>
</html>