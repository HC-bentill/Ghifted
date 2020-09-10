<?php require('includes/page-head.php');

?>
<?php 
include('includes/nav.php');
?>



<section class="donate">
 <div class="container">
   <div class="row text-center">
     <div class="col-md-4 donate-form align-items-center" style="background-color:whitesmoke">
      <form action="/action_page.php">
      <h5 style="color:black">Donate to support our Vision</h5>
      <div class="switch">
        <select class="custom-select">
          <option selected>Select Period</option>
          <option value="1">Once</option>
          <option value="2">Monthly</option>
          <option value="3">Annually</option>
        </select>

			 </div>
        <button type="button" class="btn btn-dark">$36</button> 
        <button type="button" class="btn btn-dark">$60</button>
        <button type="button" class="btn btn-dark">$100</button>
        <button type="button" class="btn btn-dark">$200</button>
        <button type="button" class="btn btn-dark">$300</button> 
        <button type="button" class="btn btn-dark">$500</button> <hr>
        <div class="input-group mb-3">
          <div class="input-group-prepend">
            <span  class="input-group-text">$</span>
          </div>
          <input type="text" class="form-control" placeholder="Enter other amount" aria-label="Amount (to the nearest dollar)">
        </div>
               			    
			    <div class="confirm">
				    
            </div>
        <a class="btn  btn-lg btn-read" href="payment-methods.php" role="button">Donate Now</a>
    
      </form> 
      

     </div>
   </div>
 </div>
</section>

<!-- start of Hero -->

<section class="middle-banner img-fluid">
  <div class="container">
    <div class="row about-banner-text">
      <div class="col-md-12">
        <h3> "To move forward you have to give back."</h3>
        <p>– Oprah Winfrey</p>
        <p></p>
      </div>
    </div>
  </div>
  </div>
</section>
<!-- end of hero -->





<?php 
include('includes/footer.php');
?>