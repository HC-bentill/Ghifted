<?php require('includes/page-head.php');

?>
<?php 
include('includes/nav.php');
?>



<section class="donate">
 <div class="container">
   <div class="row text-center">
     <div class="col-md-4 payment-form align-items-center" style="background-color:whitesmoke">
      <form action="/action_page.php">
      <h5 style="color:black">Donate to support our Vision</h5> 
        <a href="donate.php"><h6 style="color:black"><span><i class="fa fa-angle-double-left"></span></i> &nbsp Edit Donation</h6></a>
        <div class="switch">
					<input type="radio" class="switch-input" name="view" value="One-Time" id="one-time" checked="">
					<label for="one-time" class="switch-label switch-label-off">PayPal</label>
                
					<input type="radio" class="switch-input" name="view" value="Monthly" id="monthly">
          <label for="monthly" class="switch-label switch-label-on">Card</label> <hr>
          <div class="dropdown">
            <a class="btn btn-secondary dropdown-toggle" id="payment-types" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              More Payment Options
            </a>
            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
              <a class="dropdown-item" href="#">Action</a>
              <a class="dropdown-item" href="#">Another action</a>
              <a class="dropdown-item" href="#">Something else here</a>
            </div>
          </div>


					<span class="switch-selection"></span>
			 </div>
        <div class="form-group">
    <label style="color:black" for="">First Name</label>
    <input type="text" class="form-control" id="" aria-describedby="emailHelp" placeholder="Enter First Name">
      
  </div>
  <div class="form-group text-center">
    <label style="color:black" for="">Last Name</label>
    <input type="text" class="form-control" id="" placeholder="Enter Last Name">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1" style="color:black">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
      
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1" style="color:black">Payment Info</label>
    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Card Details">
  </div>
  <a class="btn  btn-lg btn-read" href="#" role="button">Donate Now</a>  
      </form> 
      

     </div>
   </div>
 </div>
</section>

<!-- start of Hero -->

<section class="middle-banner img-fluid">
  <div class="container">
    <div class="row about-banner-text">
      <div class="col-md-12 text-right">
      
      </div>
    </div>
  </div>
  </div>
</section>
<!-- end of hero -->





<?php 
include('includes/footer.php');
?>