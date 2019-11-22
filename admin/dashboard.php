<?php
session_start();
include('includes/config.php');
if(strlen($_SESSION['alogin'])==0)
	{	
header('location:index.php');
}
else{
?>
<!DOCTYPE HTML>
<html>
<head>
<title>Holidays Out | Admin Dashboard</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Bootstrap Core CSS -->
<link href="css/bootstrap.min.css" rel='stylesheet' type='text/css' />
<!-- Custom CSS -->
<link href="css/style.css" rel='stylesheet' type='text/css' />
<link rel="stylesheet" href="css/morris.css" type="text/css"/>
<!-- Graph CSS -->
<link href="css/font-awesome.css" rel="stylesheet"> 
<!-- jQuery -->
<script src="js/jquery-2.1.4.min.js"></script>
<!-- //jQuery -->
<link href='//fonts.googleapis.com/css?family=Roboto:700,500,300,100italic,100,400' rel='stylesheet' type='text/css'/>
<link href='//fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
<!-- lined-icons -->
<link rel="stylesheet" href="css/icon-font.min.css" type='text/css' />
<!-- //lined-icons -->
</head> 
<body>
<div class="page-container">
<div class="left-content">
	<div class="mother-grid-inner">
<!--header start here-->
<?php include('includes/header.php');?>
<ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="index.html">Home</a> <i class="fa fa-angle-right"></i></li>
</ol>

<div class="four-grids">
	<div class="col-md-3 four-grid">
		<div class="four-agileits">
		<div class="icon">
		<i class="glyphicon glyphicon-user" aria-hidden="true"></i>
		</div>
<div class="four-text">
    <h3>User</h3>
    <?php $sql = "SELECT id from tblusers";
    $query = $dbh -> prepare($sql);
    $query->execute();
    $results=$query->fetchAll(PDO::FETCH_OBJ);
    $cnt1=$query->rowCount();?>
    
    <h4><?php echo htmlentities($cnt1);?></h4>
    </div>	
 </div>
</div>

<div class="col-md-3 four-grid">
    <div class="four-w3ls">
		<div class="icon">
			<i class="glyphicon glyphicon-folder-open" aria-hidden="true"></i>
		</div>
		<div class="four-text">
     	<h3>Enquiries</h3>
		<?php $sql2 = "SELECT id from tblenquiry";
        $query2= $dbh -> prepare($sql2);
        $query2->execute();
        $results2=$query2->fetchAll(PDO::FETCH_OBJ);
        $cnt2=$query2->rowCount();
		?>
 <h4><?php echo htmlentities($cnt2);?></h4>
        </div>						
    </div>
</div>

<div class="col-md-3 four-grid">
	<div class="four-wthree">
		<div class="icon">
		<i class="glyphicon glyphicon-briefcase" aria-hidden="true"></i>
		</div>
		<div class="four-text">
		<h3>Toatal packages</h3>
	    <?php $sql3 = "SELECT PackageId from tbltourpackages";
        $query3= $dbh -> prepare($sql3);
        $query3->execute();
        $results3=$query3->fetchAll(PDO::FETCH_OBJ);
        $cnt3=$query3->rowCount();
	?>
		<h4><?php echo htmlentities($cnt3);?></h4>						
        </div>			
    </div>
</div>
		<div class="clearfix"></div>
</div>


<div class="four-grids">
	<div class="col-md-3 four-grid">
		<div class="four-w3ls">
		<div class="icon">
		<i class="glyphicon glyphicon-folder-open" aria-hidden="true"></i>
		</div>
		<div class="four-text">
		<h3>Issues Riaised</h3>
	<?php $sql5 = "SELECT id from tblissues";
    $query5= $dbh -> prepare($sql5);
    $query5->execute();
    $results5=$query5->fetchAll(PDO::FETCH_OBJ);
    $cnt5=$query5->rowCount();
		?>
		<h4><?php echo htmlentities($cnt5);?></h4>				
	    </div>				
    </div>
	</div>
		<div class="clearfix"></div>
</div>
<!--//four-grids here-->

<div class="inner-block">

</div>
<!--inner block end here-->
<!--copy rights start here-->
<?php include('includes/footer.php');?>
 
<?php include'includes/sidebarmenu.php');?>
    <div class="clearfix"></div>		
</div>

</div>
</div>
</body>
</html>