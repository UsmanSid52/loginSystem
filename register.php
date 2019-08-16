<?php

include_once "header.php";

?>

<div class="container content-area">
	<div class="row">
		<div class="col-xs-12 col-sm-6 col-md-6 col-sm-offset-2 col-md-offset-3">
			
            <div class="panel panel-info" >
                <div class="panel-heading">
                    <div class="panel-title">Sign Up</div>
                </div>     

                <div style="padding-top:30px" class="panel-body" >
            	       
                       <?php display_message(); ?>

                    <div style="display:none" id="login-alert" class="alert alert-danger col-sm-12"></div>

                        <form method="post" action="includes/inc.php">
                            <div style="margin-bottom: 25px" class="input-group">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                <input id="name" type="text" class="form-control" name="name" value="" placeholder="Name" required="">
                            </div>
                            <div style="margin-bottom: 25px" class="input-group">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                <input id="user_name" type="text" class="form-control" name="user_name" value="" placeholder="User Name" required="">
                            </div>
                            <div style="margin-bottom: 25px" class="input-group">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                                <input id="pwd" type="password" class="form-control" name="pwd" placeholder="Password" required="">
                            </div>
                            <div style="margin-top:10px" class="form-group">
                                <div class="col-sm-6 controls">
                                    <button name="register" class="btn btn-lg btn-primary btn-block" type="submit">Sign Up</button>
                                </div>
                            </div>
                        </form> 
                </div>                     
            </div> 
        </div>
    </div>
</div>

<?php

include_once "footer.php";

