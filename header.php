<?php
include_once "includes/init.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	   <title>
            <?php $page = $_SERVER['PHP_SELF']; 
                switch ($page)
                {
                    case "/seminar/index.php":
                     echo "Index";

                     break;

                     
                    case "/seminar/register.php":
                     echo "Sign Up";
                     break;
                } 
?>
        </title>

    <link rel="stylesheet" href="css/bootstrap.min.css">

</head>

<body style="padding-top: 90px;">
    <div class="navbar navbar-default navbar-fixed-top" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>
        
        <?php if(logged_in()) 
        
            {
        
         ?>
        
            <div class="collapse navbar-collapse">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a href="#" style="color: black;" data-toggle="dropdown">
                            <?php echo "Welcome" . get_name($_SESSION['user_name']);?>
                                <b class="caret"></b></a>

                        <ul class="dropdown-menu multi-level">
                            <li><a href="logout.php">Logout</a></li>
                        </ul>
                    </li>
                </ul>  
                
                <?php 
            } 

            ?>
                
        
            <ul class="nav navbar-nav navbar-left">

                    <?php 
                            $role=get_role($_SESSION['user_name']);

                         /*Header For Admin Start*/

						 if(logged_in() && $role == '0') : ?>

                <li class="active"><a href="index.php">index</a></li>
                <li><a href="register.php">Register</a></li> 
                <!-- /*Header For Admin Close*/ -->

                   
               <!--  /*Header For Users*/ -->
                    <?php elseif (!logged_in()) :?>
                        <nav class="navbar navbar-default navbar-fixed-top">
      <div class="container">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
        
        <div id="navbar" class="navbar-collapse collapse" aria-expanded="false">
          <ul class="nav navbar-nav">
            <li class="dropdown">
              <a href="register.php">Sign Up</a>
            </li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>
                <!-- /*Header For Applicants End*/ -->
                    <?php endif;?>
            </ul>
             
            </div>
        </div><!--/.nav-collapse -->
    </div>