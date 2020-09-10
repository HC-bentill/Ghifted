 <!-- start of Footer -->
 <footer class="footer-area p_120">
    <div class="container">
      <div class="row">
        
        <div class="col-lg-2 col-md-2 col-sm-2 m-1">
          <div class="single-footer-widget tp_widgets">
            <h6 class="footer_title">Quick Links</h6>
            <ul class="list" id="footer_list">
              <li><a href="index.php"><p>Home</p></a></li>
              <li><a href="about-us.php"><p>About Us</p></a></li>
              <li><a href="exhibition"><p>Exhibition</p></a></li>
              <li><a href="#"><p>Blog</p></a></li>
              <li><a href="#"><p>Contact</p></a></li>
            </ul>
          </div>
        </div>
        <div class="col-lg-2 col-md-2 col-sm-2 m-1">
          <div class="single-footer-widget tp_widgets">
            <h6 class="footer_title">Contact Us</h6>
            <ul class="list" id="footer_list">
              <li><a href="#">Managed Website</a></li>
              <li><a href="#">Manage Reputation</a></li>
              <li><a href="#">Power Tools</a></li>
              <li><a href="#">Marketing Service</a></li>
            </ul>
          </div>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-4 ">
          <aside class="f_widget news_widget">
            <div class="f_title">
              <h3 class="footer_title mt-3">Newsletter</h3>
            </div>
            <p style="color:black">Stay updated with our latest trends</p>
            <div id="mc_embed_signup">
              <form target="_blank" action="" method="" class="subscribe_form relative" novalidate="true">
                <div class="input-group d-flex flex-row">
                  <input name="EMAIL" placeholder="Enter email address" onfocus="this.placeholder = ''"
                    onblur="this.placeholder = 'Email Address '" required="" type="email" />
                  <button class="btn sub-btn">
                    <span><i class="fa fa-angle-double-right" aria-hidden="true"></i></span>
                  </button>
                </div>
              </form>
            </div>
          </aside>
        </div>
        <div class="col-lg-2 col-md-2 col-sm-2 m-1">
          <div class="single-footer-widget tp_widgets">
          <img src="img/ghifted-images/logopng.png" alt="" class="img-fluid mb-1" />
          </div>
        </div>
      </div>
      <div class="row mt-3 footer-bottom">
        <div class="col-md-12">
          <p class="footer-text">
            Copyright ©
            <script>
              document.write(new Date().getFullYear());
            </script>
            All rights reserved | This Website is developed by
            <a href="" target="_blank">IT MASTERS</a>
          </p>
        </div>
        <div class="col-md-2 mt-3 footer-social">
          <a href="#"><i class="fa fa-facebook"></i></a>
          <a href="#"><i class="fa fa-twitter"></i></a>
          <a href="#"><i class="fa fa-dribbble"></i></a>
          <a href="#"><i class="fa fa-behance"></i></a>
        </div>
      </div>
    </div>
  </footer>

  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="bootstrap/js/jquery-slim.min.js"></script>
  <script src="bootstrap/js/popper.min.js"></script>
  <script src="bootstrap/js/bootstrap.min.js"></script>
  <script src="owlcarousel/OwlCarousel2-2.3.4/docs/assets/vendors/jquery.min.js" type="text/javascript"></script>
  <script src="owlcarousel/OwlCarousel2-2.3.4/dist/owl.carousel.js" type="text/javascript"></script>
  <script>
    $(document).ready(function () {
      $(".owl-carousel").owlCarousel({
        loop: false,
        nav: true,
        margin: 10,
        navText: [
          '<i class="fa fa-chevron-left" id="chev_left"></i>',
          '<i class="fa fa-chevron-right" id="chev_right"></i>',
        ],
        responsive: {
          0: {
            items: 1,
          },
          600: {
            items: 3,
          },
          1000: {
            items: 4,
          },
        },
      });
    });
  </script>

  <script>
    //Get the button
    var mybutton = document.getElementById("myBtn");

    // When the user scrolls down 20px from the top of the document, show the button
    window.onscroll = function () {
      scrollFunction();
    };

    function scrollFunction() {
      if (
        document.body.scrollTop > 2000 ||
        document.documentElement.scrollTop > 2000
      ) {
        mybutton.style.display = "block";
      } else {
        mybutton.style.display = "none";
      }
    }

    // When the user clicks on the button, scroll to the top of the document
    function topFunction() {
      document.body.scrollTop = 0;
      document.documentElement.scrollTop = 0;
    }
  </script>

  <!-- when user scrolls 200px down dislay solid navbar -->
  <script>
     $(document).ready(function(){
    $(window).scroll(function(){
      var scroll = $(window).scrollTop();
      if (scroll > 50) {
        $(".navbar").css("background" , "#1b5a41");
      }

      else{
        $(".navbar").css("background" , "none");  	
      }
    })
  })
   </script>
    
   <script>
     

   </script>


<!-- Login Modal  -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Login</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        
      <form>
  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">

  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
  </div>
  <button type="submit" class="btn text-light" style="background:#1b5a41">Login</button>
</form>


      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
  
      </div>
    </div>
  </div>
</div>  

<!-- Sign up Modal-->
<div class="modal fade" id="exampleModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel2">Sign up</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        
      <form>
      <div class="form-group">
    <label for="">First Name</label>
    <input type="text" class="form-control" id="" aria-describedby="emailHelp" placeholder="Enter First Name">
      
  </div>
  <div class="form-group">
    <label for="">Last Name</label>
    <input type="text" class="form-control" id="" placeholder="Enter Last Name">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
      
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
  </div>
  <button type="submit" class="btn text-light" style="background:#1b5a41">Login</button>
</form>


      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        
      </div>
    </div>
  </div>
</div>  
</body>

</html>