<?php require('includes/page-head.php');

?>

<?php 
include('includes/nav.php');
?>

<!-- start of Hero -->
<section class="cart-banner img-fluid">
  <div class="container">
    <div class="row cart-banner-text">
      <div class="col-md-12">
        <h1>CART</h1>
        <p>Home > Cart</p>
      </div>
    </div>
  </div>
</section>
<!-- end of Hero -->

<!--  -->
<section class="cart-table">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <h3><i class="fa fa-shopping-cart"></i>Cart</h3>
      </div>
    </div>
    
    <div class="row">
      <div class="col-md-12">
        <table class="table">
          <thead class="thead-color">
            <tr>
              <th scope="col" id="items">Items</th>
              <th scope="col">Price</th>
              <th scope="col">Quantity</th>
              <th scope="col">Sub Total</th>
              <th scope="col"></th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <th scope="row">1</th>
              <td>Mark</td>
              <td>Otto</td>
              <td>@mdo</td>
              <td><i class="fa fa-close"></i></td>
            </tr>
            <tr>
              <th scope="row">1</th>
              <td>Mark</td>
              <td>Otto</td>
              <td>@mdo</td>
              <td><i class="fa fa-close"></i></td>
            </tr>
            <tr>
              <th scope="row">1</th>
              <td>Mark</td>
              <td>Otto</td>
              <td>@mdo</td>
              <td><i class="fa fa-close"></i></td>
            </tr>
            <tr>
              <th scope="row">1</th>
              <td>Mark</td>
              <td>Otto</td>
              <td>@mdo</td>
              <td><i class="fa fa-close"></i></td>
            </tr>
            <tr>
              <th scope="row">1</th>
              <td>Mark</td>
              <td>Otto</td>
              <td>@mdo</td>
              <td><i class="fa fa-close"></i></td>
            </tr>
            <tr>
              <th scope="row">1</th>
              <td>Mark</td>
              <td>Otto</td>
              <td>@mdo</td>
              <td><i class="fa fa-close"></i></td>
            </tr>
    
          </tbody>
        </table>

      
      </div>
    </div>
    <div style="background:whitesmoke" class=" p-1 row text-right">
      <div class="col-md-12 p-3">
      <h5>Subtotal:</h5>
      <h5>Shipping:</h5>
      <h5>Taxes:</h5>
      <h3>Grand Total : $1,300</h3>
      <a href="checkout.php" class="btn" id="cart_btn">Begin checkout</a>
      </div>
    </div>
  </div>

</section>






<?php 
include('includes/bottom-banner.php');
?>

<?php 
include('includes/footer.php');
?>