<!DOCTYPE html>
<html dir="ltr" lang="en-US"><head>
    <meta charset="utf-8">
    <title>Locations</title>
    <meta name="viewport" content="initial-scale = 1.0, maximum-scale = 1.0, user-scalable = no, width = device-width">

    
    <link rel="stylesheet" href="style.css" media="screen">
   
    <link rel="stylesheet" href="style.responsive.css" media="all">


    <script src="jquery.js"></script>
    <script src="script.js"></script>
    <script src="script.responsive.js"></script>



<style>.art-content .art-postcontent-0 .layout-item-old-0 { color: #372506; background: #DCDCAD; padding-right: 10px;padding-left: 10px;  }
.art-content .art-postcontent-0 .layout-item-old-1 { padding-right: 10px;padding-left: 10px;  }
.ie7 .art-post .art-layout-cell {border:none !important; padding:0 !important; }
.ie6 .art-post .art-layout-cell {border:none !important; padding:0 !important; }

</style></head>
<body>
<form action="" method="post">
<div id="art-main">
<nav class="art-nav">
    <ul class="art-hmenu"><li><a href="home.php" action="check" class="">Home</a></li><li><a href="about-us.php" class="">About Us</a></li><li><a href="contect-us.php" class="">Contect Us</a></li></ul> 
    </nav>
<header class="art-header">

    <div class="art-shapes">
        <div class="art-object1544387892"></div>
<div class="art-object939994073"></div>

            </div>

<h1 class="art-headline">
    <a>Blood Bank</a>
</h1>





                
                    
</header>
<div class="art-sheet clearfix">
            <div class="art-layout-wrapper">
                <div class="art-content-layout">
                    <div class="art-content-layout-row">
                        <div class="art-layout-cell art-sidebar1"><div class="art-vmenublock clearfix">
        <div class="art-vmenublockheader">
            <h3 class="t">Menu</h3>
        </div>
        <div class="art-vmenublockcontent">
<ul class="art-vmenu"><li><a href="registeration-be-donor.php" class="">Registeration Be Donor</a></li><li><a href="search-of-blood.php" class="">Search of Blood</a></li><li><a href="locations.php" class="active">Locations</a></li><li><a href="feedback.php">Feedback</a></li></ul>
                
        </div>
</div></div>
                        <div class="art-layout-cell art-content"><article class="art-post art-article">
                                <div class="art-postmetadataheader">
                                        <h2 class="art-postheader">Locations</h2>
                                    </div>
                                                
                <div class="art-postcontent art-postcontent-0 clearfix"><div class="art-content-layout">
<div class="art-content-layout-row responsive-layout-row-1">
<div class="art-layout-cell layout-item-old-1" style="width: 50%">
<p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<input type="submit" name="submit" class="art-button" value = " Show All" >&nbsp;<br></p><p><br></p>
	<?php
										
                	mysql_connect("localhost","root","");
	                mysql_select_db("bb");
					if(isset($_POST['submit'])){
						
						 $sql = "SELECT * FROM `locations`";
                   $result = mysql_query($sql);

                    echo"<table border=1 >
					<tr>
					<th>name</h>
					<th>address</th>
					<th>type</th>";
					while($record = mysql_fetch_array($result)){
						
					echo"<tr>";
					echo"<td>" . "<input type=text name=name value=" . $record['name'] ."  >" . "</td>";
					echo"<td>" . "<input type=text name=address value=" . $record['address'] ." >" . "</td>";
					echo"<td>" . "<input type=text name=type value=" . $record['type'] . " > " ."</td>";
					echo"<td>" . "<input type=hidden name=hidden value=" . $record['name'] . " > " . "</td>";
					echo"</tr>";
					

					}
					
					
					echo"</table>";
					}

										?>
</div>
</div>
</div></div>


</article></div>
                    </div>
                </div>
            </div><footer class="art-footer">
<p><br></p>
<p>Copyright © 2015. All Rights Reserved.</p>
</footer>

    </div>
    <p class="art-page-footer">
    </p>
</div>


</form></body></html>