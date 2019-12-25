<header class="header" id="top">
			<div class="container-fluid">
				<div class="row flexbox-center">
					<div class="col-lg-2 col-md-3 col-6">
						<div class="logo">
							<a href="index.php"><img src="assets/img/logo.png" alt="logo" /></a>
						</div>
					</div>
					<div class="col-lg-10 col-md-9 col-6">
						<div class="responsive-menu"></div>
					    <div class="mainmenu">
                            <ul id="primary-menu">
                                <li><a class="nav-link <?php if($page == 'index'){echo 'active';}?>" href="index.php">Home</a></li>
                                <li><a <?php if($page == 'events'){echo "style='border: 1px solid white;'";}?> class="nav-link" href="events.php">Events</a></li>
                                <li><a <?php if($page == 'majorevents'){echo "style='border: 1px solid white;'";}?> class="nav-link" href="majorevents.php">Major Events</a></li>
								<li><a <?php if($page == 'funzone'){echo "style='border: 1px solid white;'";}?> class="nav-link funzonenav" href="funzone.php">Funzone</a></li>
                                <!-- <li><a <?php if($page == 'funzone'){echo "style='border: 1px solid white;'";}?> class="nav-link" href="funzone.php">Funzone</a></li> -->
                                <li><a <?php if($page == 'campus'){echo "style='border: 1px solid white;'";}?> class="nav-link" href="campus.php">Campus Ambassador</a></li>
                                <li><a <?php if($page == 'accomodation'){echo "style='border: 1px solid white;'";}?> class="nav-link" href="accomodation.php">Accommodation</a></li>
								<!-- <li><a <?php if($page == 'sponsors'){echo "style='border: 1px solid white;'";}?> class="nav-link" href="sponsors.php">Sponsors</a></li> -->
								<li><a <?php if($page == 'team'){echo "style='border: 1px solid white;'";}?> class="nav-link" href="team.php">Team</a></li>
								<?php
								if(isset($_SESSION['user']))
								{
									echo "<li><a class='appao-btn' href='logout.php'>Logout</a></li>";
								}
								else
								{
									echo "<li><a class='appao-btn' href='registration.php'>Register</a></li>";
									echo "<li><a class='appao-btn' href='login.php'>Login</a></li>";
								}
								?>
								
                            </ul>
						</div>
					</div>
				</div>
			</div>
		</header>