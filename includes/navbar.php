<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
	    <div class="container">
	      <a class="navbar-brand" href="index.php">MARK<span>II</span></a>
	      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Menu
	      </button>

	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav ml-auto">
	          <li class="nav-item"><a href="index.php" class="nav-link">Home</a></li>
	          <li class="nav-item"><a href=" about.php" target="_blank" class="nav-link">About</a></li>
	          <li class="nav-item"><a href=" services.php" target="_blank" class="nav-link">Services</a></li>
	          <li class="nav-item"><a href=" mpesa.php" target="_blank"  class="nav-link">Payment</a></li>
	          <li class="nav-item"><a href=" car.php" target="_blank" class="nav-link">Cars</a></li>
	          <li class="nav-item"><a href=" blog.php" target="_blank" class="nav-link">Blog</a></li> 
	          <li class="nav-item"><a href=" contact.php" target="_blank" class="nav-link">Contact</a></li>
			  <?php    
              if(isset($_SESSION['email'])){
				if($_SESSION['email'] == 'gitaumark502@gmail.com'){
					echo '<li class="nav-item"><a href="dashboard.php" class="nav-link">Dashboard</a></li>';
					echo '<li class="nav-item"><a href="messages.php" class="nav-link">Mails</a></li>';
				}
			  }
			  ?>
              <?php  
              if(isset($_SESSION['email'])){
                $user_email = $_SESSION['email'];
                $query =  "SELECT * FROM users WHERE email = '$user_email'";
                $get_username = mysqli_query($connection,$query);
                while($row = mysqli_fetch_assoc($get_username)){
                   $username = $row['name'];
                }
                ?>
         <li class="nav-item"><a href="profile.php" target="_blank" class="nav-link"><?php echo $username ?></a></li>
		      <li class="nav-item"><a href="logout.php" target="_blank" class="nav-link">Log out</a></li>
              <?php
              }else{
                echo '<li class="nav-item"><a href="login.php" target="_blank"  class="nav-link">Login</a></li>';
              }
              ?>
	        </ul>
	      </div>
	    </div>
	  </nav>
    <!-- END nav -->
    