<?php require('includes/page-head.php');

?>

<?php 
include('includes/nav.php');
?>
<!-- start of Hero -->
<section class="exh-banner img-fluid">
  <div class="container">
    <div class="row exh-banner-text">
      <div class="col-md-12">
        <h1>EXHIBITION</h1>
        <p>Home > Exhibition</p>
      </div>
    </div>
  </div>
</section>
<!-- end of Hero -->

<!-- start of exhibition -->
<section class="exh" style="background:whitesmoke">
  <div class="container">
    <!-- sort -->
    <div class="row exh-sort g-3">
      <div class="col-md-4 pl-5">
        <div class="dropdown">
          <button
            class="btn btn-secondary dropdown-toggle"
            type="button"
            id="dropdownMenuButton"
            data-toggle="dropdown"
            aria-haspopup="true"
            aria-expanded="false"
          >
            Categrory
          </button>
          <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
            <a class="dropdown-item" href="#">Painting</a>
            <a class="dropdown-item" href="#">Audio Engineering</a>
            <a class="dropdown-item" href="#">Fashion Design</a>
            <a class="dropdown-item" href="#">Sculpture</a>
            <a class="dropdown-item" href="#">Beadwork</a>
          </div>
        </div>
      </div>
      <div class="col-md-8">
        <form class=" float-right pr-5 d-flex align-items-center">
          <input type="search" placeholder="Search" class="form-control"/>
          <button type="button" class="btn btn-success"><i class="fa fa-search"></i></button>
        </form>
      </div>
    </div>
    <!-- end of sort -->
    <!-- start of exhibition grid -->
    <div class="row exhibition text-center m-4">
      <div class="col-md-3 col-sm-4 col-xs-4 col-w-50">
       
        <img src="img/ghifted-images/7.jpg" alt="gallery item" class="img-fluid mb-1" />
        <a class="btn" href="details.php" id="view_btn">View Details <i class="fa fa-angle-double-right"></i></a>
        
      </div>
      <div class="col-md-3 col-sm-4 col-xs-4 col-w-50">
  
        <img src="img/ghifted-images/8.jpg" alt="gallery item" class="img-fluid mb-1" />
        <a class="btn" href="details.php" id="view_btn">View Details <i class="fa fa-angle-double-right"></i></a>
      </div>
      <div class="col-md-3 col-sm-4 col-xs-4 col-w-50">
     
        <img src="img/ghifted-images/9.jpg" alt="gallery item" class="img-fluid" />
        <a class="btn" href="details.php" id="view_btn">View Details <i class="fa fa-angle-double-right"></i></a>
      </div>
      <div class="col-md-3 col-sm-4 col-xs-4 col-w-50">
      
        <img src="img/ghifted-images/11.jpg" alt="gallery item" class="img-fluid" />
        <a class="btn" href="details.php" id="view_btn">View Details <i class="fa fa-angle-double-right"></i></a>
      </div>
      <div class="col-md-3 col-sm-4 col-xs-4 col-w-50">

        <img src="img/ghifted-images/12.jpg" alt="gallery item" class="img-fluid mb-1" />
        <a class="btn" href="details.php" id="view_btn">View Details <i class="fa fa-angle-double-right"></i></a>
      </div>
      <div class="col-md-3 col-sm-4 col-xs-4 col-w-50">

        <img src="img/ghifted-images/14.jpg" alt="gallery item" class="img-fluid mb-1" />
        <a class="btn" href="details.php" id="view_btn">View Details <i class="fa fa-angle-double-right"></i></a>
      </div>
      <div class="col-md-3 col-sm-4 col-xs-4 col-w-50">

        <img src="img/ghifted-images/16.jpg" alt="gallery item" class="img-fluid" />
        <a class="btn" href="details.php" id="view_btn">View Details <i class="fa fa-angle-double-right"></i></a>
      </div>
      <div class="col-md-3 col-sm-4 col-xs-4 col-w-50">

        <img src="img/ghifted-images/17.jpg" alt="gallery item" class="img-fluid" />
        <a class="btn" href="details.php" id="view_btn">View Details <i class="fa fa-angle-double-right"></i></a>
      </div>
    </div>
    <!-- end of exhibition grid -->
    </div>
 
    <!-- start of page nav -->
    <div class="row mt-5 justify-content-end">
      <div class="col-md-5" >
        <nav aria-label="Page navigation example">
          <ul class="pagination">
            <li class="page-item">
              <a class="page-link" href="#" aria-label="Previous">
                <span aria-hidden="true">&laquo;</span>
                <span class="sr-only">Previous</span>
              </a>
            </li>
            <li class="page-item"><a class="page-link" href="#">1</a></li>
            <li class="page-item"><a class="page-link" href="#">2</a></li>
            <li class="page-item"><a class="page-link" href="#">3</a></li>
            <li class="page-item">
              <a class="page-link" href="#" aria-label="Next">
                <span aria-hidden="true">&raquo;</span>
                <span class="sr-only">Next</span>
              </a>
            </li>
          </ul>
        </nav>
      </div>
    </div>
  </div>
</section>

<?php 
 include('includes/footer.php');
?>
