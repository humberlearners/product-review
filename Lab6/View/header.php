<nav>
    <div>
        <div class="nav-wrapper">
				
            <ul>
                <li id="brand-logo"><a href="index.php">BeautyReview</a></li>
				<li><a href="#">PRODUCT REVIEWS</a></li>
					<?php 
					session_start();
					if(isset($_SESSION["email"]) &&  isset($_SESSION["password"]))
					{
					echo "<li><a href='../Controller/logout.php'>LOG OUT</a></li>";
					echo "<li><a href='createUserProfile.php'>Create Profile</a></li>";
					echo "Welcome ".$_SESSION['email'];

					}
					else if (isset($_COOKIE["email"]) &&  isset($_COOKIE["password"]))
					{
					echo "<li><a href='../Controller/logout.php'>LOG OUT</a></li>";
					echo "<li><a href='createUserProfile.php'>Create Profile</a></li>";
					echo "Welcome ".$_COOKIE["email"];

					}
					else
					{
					 
					echo " <li><a href='LogIn.php'>LOGIN</a></li>";
					echo "<li><a href='registerUser.php'>SIGNUP</a></li>";
					}

					?>
               
               
                

            </ul>
			
			
        </div>
</nav>