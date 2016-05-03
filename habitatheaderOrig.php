<?php
function pageHeader($pt)
{
	echo <<<_END
<h1><img src="images/habitatBanner.png" width="565" height="162"><br>
$pt </h1>

<nav>
	<ul id="nav">
	<td<a href="home.php">Home</a></li>
	<li><a href="currentInventory.php">Inventory</a></li>
	<li><a href="storeInformation.php">Store Updates</a></li>
	<li><a href="volunteer.php">Volunteers</li>
	<li><a href="donorInfo.php">Donors</li>
	</ul>
</nav>
<hr />
_END;

}