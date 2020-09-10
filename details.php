<?php require('includes/page-head.php');

?>

<?php 
include('includes/nav.php');
?>

<!-- start of Hero -->
<section class="details-banner img-fluid">
  <div class="container">
    <div class="row">
      <div class="col-md-12 details">
        <div class="row p-1">
          <div class="col-md-5 text-center">
          <a href="img/ghifted-images/21.jpg" data-lightbox="mygallery" data-title="African Sculpture" >
            <img class="details-img img-fluid" src="img/ghifted-images/21.jpg" alt="" />
            </a>
          </div>
          <div class="col-md-6 details-text">
            <h2>African Scuplture</h2>
            <hr>
            <h4>$ 50.00</h4>

            <p>Ghifted School for the Arts is a grassroots program that 
              seeks to secure the physical and financial well-being of impoverished fine 
              artists in Ghana, Africa by removing barriers to food, clothes, shoes and shelter 
              while providing students with life-enhancing educational programming and professional 
              development opportunities. The majority of our target beneficiaries lack the basic needs 
              of food, clothes, shoes and shelter. We provide these basic resources to students in exchange 
              for their dedication to learning relevant life and career skills.</p> <hr>
              <form action="" method="get" id="cart_item">
              <label style="color:rgb(66, 65, 65)">Enter Quantity:</label>
              <input type="number" min="1" max="100" step="1" required > <br>  
              <button form="cart_item" href="cart.php" type="submit" class="btn btn-lg" id="cart_btn"><i class="fa fa-shopping-cart">&nbsp</i>Add to Cart</button>

            </form>
          </div>
        </div>

      </div>
    </div>
  </div>
</section>
<!-- end of Hero -->






<?php 
include('includes/footer.php');
?>