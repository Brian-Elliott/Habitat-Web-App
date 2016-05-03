<?php
function pageHeader($pt)
{
	echo <<<_END
<h1><img src="images/habitatBanner.png" width="565" height="162"><br>
$pt </h1>

<section class="container">
	<div id="logout">
		<a href='logout.php'  class="btn">Logout</a>
	</div>
	<div id="profileBtn">
		<a href='profile.php' class="btn">Profile</a>
		
    <nav>
      <ul class="nav">
        <li><a href="home.php" class="nav-icon" title="Home"><span class="icon-home">Home</span></a></li>
        <li><a href="currentInventory.php" title="inventory">Inventory</a></li>
        <li><a href="storeUpdates.php" title="Support">Store Updates</a></li>
        <li><a href="volunteer.php" title="volunteers">Volunteers</a></li>
        <li><a href="donorInfo.php" title="Donors">Donors</a></li>
      </ul>
    </nav>
  </section>
		
<hr />
_END;

}
/* Classes used to correspond with open source CSS code for menu navigation. Found at
 	http://www.cssflow.com/snippets/light-horizontal-navigation */
?>