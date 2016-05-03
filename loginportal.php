<html>
<head>
<link rel="stylesheet" type="text/css" href="habitatcss.css" />
<meta name="description" content="Home page for Habitat for Humanity Milledgeville portal" />
<meta name="author" content="Brian Elliott" />
</head>
<body>

<h1><img src="images/habitatBanner.png" width="565" height="162"><br>
 Please Login to view the site</h1>

<section class="container">

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
		
<?php

require_once 'habitatdb.php';

echo "<h2 id='loginlogout'><td><a href='loginform.php' class='btn'>Login</a></td></h2>";

?>