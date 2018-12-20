<!DOCTYPE html>
<html dir="ltr" lang="en-US"><head>
    <meta charset="utf-8">
    <title>Home</title>
    <meta name="viewport" content="initial-scale = 1.0, maximum-scale = 1.0, user-scalable = no, width = device-width">

    
    <link rel="stylesheet" href="style.css" media="screen">
    <link rel="stylesheet" href="style.responsive.css" media="all">


    <script src="jquery.js"></script>
    <script src="script.js"></script>
    <script src="script.responsive.js"></script>



<style>.art-content .art-postcontent-0 .layout-item-old-0 { color: #372506; background: #DCDCAD; padding-right: 10px;padding-left: 10px;  }
.art-content .art-postcontent-0 .layout-item-old-1 { padding-right: 10px;padding-left: 10px;  }
.art-content .art-postcontent-0 .layout-item-old-2 { color: #26250D; background: #F2F1CF;  border-collapse: separate; border-radius: 10px;  }
.art-content .art-postcontent-0 .layout-item-old-3 { color: #26250D; padding-top: 10px;padding-right: 10px;padding-bottom: 10px;padding-left: 10px; border-radius: 10px;  }
.art-content .art-postcontent-0 .layout-item-old-4 { color: #403F11;  }
.art-content .art-postcontent-0 .layout-item-old-5 { border-top-style:solid;border-right-style:solid;border-bottom-style:solid;border-left-style:solid;border-top-width:1px;border-right-width:1px;border-bottom-width:1px;border-left-width:1px;border-top-color:#E5E39F;border-right-color:#E5E39F;border-bottom-color:#E5E39F;border-left-color:#E5E39F; color: #2A290F; background: #FFFFFF; padding-right: 10px;padding-left: 10px;  }
.art-content .art-postcontent-0 .layout-item-old-6 { border-top-style:solid;border-right-style:solid;border-bottom-style:solid;border-left-style:solid;border-top-width:1px;border-right-width:1px;border-bottom-width:1px;border-left-width:1px;border-top-color:#E5E39F;border-right-color:#E5E39F;border-bottom-color:#E5E39F;border-left-color:#E5E39F;border-top:none !important; color: #2A290F; background: #FFFFFF; padding-right: 10px;padding-left: 10px;  }
.ie7 .art-post .art-layout-cell {border:none !important; padding:0 !important; }
.ie6 .art-post .art-layout-cell {border:none !important; padding:0 !important; }

</style></head>
<body>
<form action="" method="post">
<div id="art-main">
<nav class="art-nav">
    <ul class="art-hmenu"><li><a href="home.php" class="active">Home</a></li><li><a href="about-us.php">About Us</a></li><li><a href="contect-us.php">Contect Us</a></li></ul> 
    </nav>
<header class="art-header">

    <div class="art-shapes">
        <div class="art-object1544387892"></div>
<div class="art-object939994073"></div>

            </div>

<h1 class="art-headline">
    <a >Blood Bank</a>
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
<ul class="art-vmenu"><li><a href="registeration-be-donor.php">Registeration Be Donor</a></li><li><a href="search-of-blood.php">Search of Blood</a></li><li><a href="locations.php">Locations</a></li><li><a href="feedback.php">Feedback</a></li></ul>
                
        </div>
</div></div>
                        <div class="art-layout-cell art-content"><article class="art-post art-article">
                                
                                                
                <div class="art-postcontent art-postcontent-0 clearfix"><div class="art-content-layout layout-item-old-2">
<div class="art-content-layout-row responsive-layout-row-1">
<div class="art-layout-cell layout-item-old-3" style="width: 100%">
 <span style="color: rgb(80, 78, 22); font-size: 24px; line-height: 28px;">&nbsp;Login By Admin&nbsp;</span><br>
</div>
</div>
</div>
<div class="art-content-layout layout-item-old-4">
<div class="art-content-layout-row responsive-layout-row-2">
<div class="art-layout-cell layout-item-old-6" style="width: 67%">
<p>&nbsp; &nbsp; &nbsp;&nbsp;</p><p>&nbsp; &nbsp; &nbsp;<span style="font-size: 20px;">Username:</span> <input type="text" name="username"></p><p>&nbsp; &nbsp; &nbsp;<span style="font-size: 20px;">Password:</span>&nbsp;<input type="text" name="password"></p><p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;&nbsp;<input type="submit" name="submit" value = "Login" class="art-button" >&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</p>
</div><div class="art-layout-cell layout-item-old-6" style="width: 33%"><img width="245" height="245" alt="" class="art-lightbox" src="images/2af2c2ab53e00556f5f2195b31d59400.png">
<?php

 if(isset($_POST['submit'])){
	mysql_connect("localhost","root","");

	$u = $_POST['username'];
	$p = $_POST['password'];
	mysql_select_db("bb");
	$sql = "SELECT * FROM `admin` WHERE `username` = '".$u."' AND `password` = '".$p."' LIMIT 1";
    $result = mysql_query($sql);

if(mysql_num_rows($result) == 1){
	echo"successfully";
	
     $_SESSION['id'] = 1;
	die("<script>location.href = 'http://localhost:8080/project/admin.php'</script>");

}
else{
	echo "username or password not correct";
	exit();
}
}
if (isset($_GET['check'])){
	
	if( $_SESSION['id'] == 1)
	{
		die("<script>location.href = 'http://localhost:8080/project/admin.php'</script>");
	}
	else{
		die("<script>location.href = 'http://localhost:8080/project/home.php'</script>");
	}
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