<?php
error_reporting(0);
if(isset($_POST['submit'])){
$fname=$_POST['fname'];
$mnumber=$_POST['mobilenumber'];
$email=$_POST['email'];
$password=md5($_POST['password']);
$sql="INSERT INTO tblusers(FullName,MobileNumber,EmailId,Password) VALUES(:fname,:mnumber,:email,:password)";
$query=$dbh->prepare($sql);
$query->bindParam(':fname',$fname,PDO::PARAM_STR);
$query->bindParam(':mnumber',$mnumber,PDO::PARAM_STR);
$query->bindParam(':email',$email,PDO::PARAM_STR);
$query->bindParam(':password',$password,PDO::PARAM_STR);
$query->execute();
$lastInserId =$dbh ->$lastInserId();
if($lastInserId){
$_SESSION['msg']="You are Scuccessfully registered. Now you can login ";
header('location:thankyou.php');
}
$_SESSION['msg']="Something went wrong. Please try again.";
header('location:thankyou.php');
}
}?>

<div class="modal fade" id="myModal4" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
     <div class="modal-dialog" role="document">
        <div class="modal-content modal-info">
         <div class="modal-header">
           <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>        
         </div>
         <section>
         <div class="modal-body modal-spa">
          <div class="login-grids">
          <div class="login">
          <div class="login-left">
            <ul>
              <li><a class="fb" href="#">Facebook</a></li>
              <li><a class="goog" href="#">Google</a></li>
            </ul>
          </div>
        <div class="login-right">
            <form name="signup" method="post">
              <h3>Create your Account</h3>

              <input type="text" name="fname" id="fname" placeholder="Full Name" autocomplete="off" required="">	
              <input type="number" name="mobilenumber"  placeholder="Mobile number" autocomplete="off" required="">	
              <input type="email" name="email" id="email"  onBlur="checkAvailability()" placeholder="Email Id"  autocomplete="off" required="">	
	          <span id="user-availability-status" style="font-size:12px;"></span> 
              <input type="password" name="password" id="password" placeholder="Password" value="" required="">	
	          <input type="submit" name="signin" value="CREATE ACCOUNT">    
            </form>
        </div>
        <div class="clearfix"></div>
        </div>
        <p>By logging in you agree to our <a href="page.php?type=terms">Terms and Conditions</a> and <a href="page.php?type=privacy">Privacy Policy</a></p>
         </div>
        </div>
        </section>
     </div>
    </div> 
</div>

