		<?php
			session_start();
			if(isset($_POST['logoutName']))
			{
				session_destroy();
				header('location:index.php');
			}
		?>