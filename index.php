<?php
include_once "header.php";
?>

<div class="container content-area">

<?php display_message(); ?>

    <div style="display:none" id="login-alert" class="alert alert-success col-sm-12"></div>
		<div class="jumbotron">
			<div align="center" class="alert alert-success" role="alert">

						<?php
								$role=get_role($_SESSION['user_name']);

									if(logged_in() && $role=='0') 
									{
										echo "Welcome" . get_name($_SESSION['user_name']);
						?>
			</div>
						<?php 
									}
						?>
	<!-- Admin View Ends Here -->
		</div>
</div>

<?php

include_once "footer.php";

?>