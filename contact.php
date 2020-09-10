<?php require('includes/page-head.php');

?>

<?php 
include('includes/nav.php');
?>

<!-- start of Hero -->
<section class=" contact-banner img-fluid">
  <div class="container">
    <div class="row contact-banner-text">
      <div class="col-md-12">
        <h1>Contact Us</h1>
        <p>Home > Contact Us</p>
      </div>
    </div>
  </div>
</section>
<!-- end of Hero -->

<section class="contact">
  <div class="container">
    <div class="row contact">
      <div class="col-md-6">
        <form>
          <h3>Leave A Comment</h3>
          <p> We Will call back later and answer your questions.</p>
          <div class="form-group">
            <label for="exampleFormControlInput1">Your Name</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Your name">
          </div>
          <div class="form-group">
            <label for="exampleFormControlInput1">Email address</label>
            <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Your Email">
          </div>
          <div class="form-group">
            <label for="exampleFormControlTextarea1">Your message</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" placeholder="Your Message"
              rows="5"></textarea>
          </div>
          <a href="exhibition.php" class="btn" id="comment_btn">Send Message</a>
        </form>
      </div>

      <div class="col-md-6 text-center">
        <h3>Contact Us</h3>
        <p> <br><br> <strong>Email :</strong> Cyahlee@gmail.com
          <br><br> <strong>Phone :</strong> +233 055 405 5532 / 216 215 5005 </p>
        </p> <br>
        <img class="img-fluid" src="img/scupture.PNG" />
      </div>
    </div>
</section>




<?php 
include('includes/bottom-banner.php');
?>

<?php 
include('includes/footer.php');
?>