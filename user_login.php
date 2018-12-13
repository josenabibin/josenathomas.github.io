<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
        <meta name="robots" content="index, follow"/>
        <meta name="description" content="">
        <meta name="author" content="">
        <meta name="keywords" content="" />
        <title>Online Library</title>
         
		<script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.3.1.min.js"></script>
		<script src="back.js"></script>

	
	</head>
    <style>
body {
  background-color: gray;

}

h1 {
  color: white;
  text-align: center;
}

p {
  font-family: verdana;
  font-size: 20px;
}
</style>
    
    <body background = "imgs/background.jpg">
                                <a name="home"></a>

        <!-- ===== Start Header ===== -->
        <header class="header-three">
            <div class="container">
            	<div class="row">
                    <!-- Logo & Logout -->
                    <div class="logo-menu">
                        <div class="row">
                            <!-- Logo -->
                            <div class="col-md-3 col-sm-4 col-xs-6 display-full">
                            </div>
                            <!-- End Logo -->
                            
                            <!-- Logout -->
                            <div class="col-md-9 col-sm-8 col-xs-6 display-full">
                                <div class="logout-btn">
								<INPUT type="image" src="imgs/logout.png" id="logout_btn" value="Logout">Logout</INPUT>
                                  
                                </div>
                                

                            </div>
                            <!-- End Logout -->
                        </div>
                    </div>
                    <!-- End Logo & Logout -->
                </div>
            </div>
        </header>
        <!-- ===== End Header ===== -->
        
        <!-- ===== Start Inner Banner ===== -->
        <section class="inner-banner">
            <!-- Overlay -->
            <span class="overlay"></span>
            <!-- End Overlay -->
            
            <div class="container">
            	<!-- Banner Text -->
            	<div class="banner-text">
                	<h1>Hello, <span id = "username">User name</span></h1>
                </div>
                <!-- End Banner Text -->
            </div>
        </section>
        <!-- ===== End Inner Banner ===== -->

        <section class="tutor-search">

                    <center>                            
                        <h2>See Books</h2>
                          <form action="" name="status">
                            
                            <input type="text" name="bookID" style = "max-width: 40%" placeholder="bookID" required />
                              
                            <input type="text" name="title" style = "max-width: 40%" placeholder="title" required />
							 
							<input type="text" name="author" style = "max-width: 40%" placeholder="author" required />
							  
							  <input type="text" name="price" style = "max-width: 40%" placeholder="price" required />


                              
                              <span>	
                                	<input  style = "font-family: 'Optima', 'FontAwesome';display:inline-block;text-align:center;border:none;background:#E0E0E0;text-transform:uppercase;font-size:18px;line-height:26px;color:#3996d2;padding:16px 87px;transition:all 0.5s ease;-o-transition:all 0.5s ease;-moz-transition:all 0.5s ease;-ms-transition:all 0.5s ease;-webkit-transition:all 0.5s ease;" type="button" onclick="insertBook(this.form)" value="Insert new Book" name="button">
                            </span>
                            
                            </form>
                   
                        
            </center> </section>
                	<!-- Tutor Status --><br><br>
                    <center>       
                            <!-- Status Form -->
             <input  style = "font-family: 'Optima', 'FontAwesome';display:inline-block;text-align:center;border:none;background:#E0E0E0;text-transform:uppercase;font-size:18px;line-height:26px;color:#3996d2;padding:16px 87px;transition:all 0.5s ease;-o-transition:all 0.5s ease;-moz-transition:all 0.5s ease;-ms-transition:all 0.5s ease;-webkit-transition:all 0.5s ease;" type="button" onclick="seeBooks()" value="See Books" name="button">   </center>   
		
		                	<!-- Tutor Status --><br><br>
                    <center>  
						      <form>  

				<input type="text" name="bookIDDelete" style = "max-width: 40%" placeholder="ID" required />


                              <span>	
                                	<input  style = "font-family: 'Optima', 'FontAwesome';display:inline-block;text-align:center;border:none;background:#E0E0E0;text-transform:uppercase;font-size:18px;line-height:26px;color:#3996d2;padding:16px 87px;transition:all 0.5s ease;-o-transition:all 0.5s ease;-moz-transition:all 0.5s ease;-ms-transition:all 0.5s ease;-webkit-transition:all 0.5s ease;" type="button" onclick="deleteBook(this.form)" value="Delete" name="button">
                            </span>
                            
                            </form>

						
                 </center>   

                            <!-- End Status Form -->
                    <!-- End Tutor Status -->
        <!-- ===== End Tutor Search ===== -->
                <!-- ===== Start Available Tutor ===== -->
            <section class="available-tutors">

        <div class="container">
            <!-- Availbale Title -->
            <div class="available-title">
                <h2>Books:</h2>
            </div>
            <!-- End Availbale Title -->

            <!-- Table Availbale Tutor -->
            <table id = "tableofdata" class="table" id="dataTables-example" hidden border = 1>
                <thead>
                <tr>
                    <th>ID</th>
                    <th></th>
                    <th>Title</th>
                    <th>Author</th>
                    <th>Price</th>

                </tr>
                </thead>
                <tbody id="bookResults">
                    
            
                </tbody>
            </table>
            <!-- End11 Table Availbale Tutor -->
        </div>
                
    </section>

        <!-- ===== Start Section Footer ===== -->

    	<!-- ===== Start Bootstrap core JavaScript ===== -->
        <!-- Placed at the end of the document so the pages load faster -->

        <!-- ===== End Bootstrap core JavaScript ===== -->
<script src = "homepage.php"></script>
		<?php
			if(isset($_POST['logout']))
			{
				session_destroy();
				header('location:index.php');
			}
		?>
                        
    </body>
</html>

