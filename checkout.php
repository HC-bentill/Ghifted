<?php require('includes/page-head.php');

?>

<?php 
include('includes/nav.php');
?>

<!--start of checkout section  -->
<section class="checkout">
  <div class="container">
    <div class="row">
    <div
          class="col-md-6 checkout-form"
          style="background-color: whitesmoke"
        >
          <form class="form-control">
            <h5 class="text-center" style="color: black">
              1. &nbsp Address Details
            </h5>
            <hr />
            <div class="form">
              <div class="fields fields--2">
                <label class="field">
                  <span class="field__label" for="firstname">First name</span>
                  <input
                    class="field__input"
                    type="text"
                    id="firstname"
                    value="John"
                  />
                </label>
                <label class="field">
                  <span class="field__label" for="lastname">Last name</span>
                  <input
                    class="field__input"
                    type="text"
                    id="lastname"
                    value="Doe"
                  />
                </label>
              </div>
              <label class="field">
                <span class="field__label" for="address">Address</span>
                <input class="field__input" type="text" id="address" />
              </label>
              <label class="field">
                <span class="field__label" for="phonenumber">Phone Number</span>
                <input
                  class="field__input"
                  type="text"
                  id="address"
                  placeholder="Please enter with country code"
                />
              </label>
              <label class="field">
                <span class="field__label" for="country">Country</span>
                <select class="field__input" id="country">
                  <option value=""></option>
                  <option value="unitedstates">United States</option>
                </select>
              </label>
              <div class="fields fields--3">
                <label class="field">
                  <span class="field__label" for="zipcode">Zip code</span>
                  <input class="field__input" type="text" id="zipcode" />
                </label>
                <label class="field">
                  <span class="field__label" for="city">City</span>
                  <input class="field__input" type="text" id="city" />
                </label>
                <label class="field">
                  <span class="field__label" for="state">State/Region</span>
                  <select class="field__input" id="state">
                    <option value=""></option>
                  </select>
                </label>
              </div>
            </div>
            <!-- delivery method -->
            <h5 class="text-center mt-2" style="color: black">
              2. &nbsp Delivery Method
            </h5>
            <hr />
            <h6 class="mb-3">How do you want your order delivered ?</h6>

            <input type="radio" id="male" name="gender" value="male" />
            <label for="male">Home & Office Delivery</label><br />
            <input type="radio" id="female" name="gender" value="female" />
            <label for="female">at any of our Pickup Stations</label><br />

            <h5 class="text-center" style="color: black">
              3. &nbsp Payment Method
            </h5>
            <hr />
            <h6>How do you want to pay for your order?</h6>

            <label class="field">
              <span class="field__label" for="country">Country</span>
              <select class="field__input" id="country">
                <option value=""></option>
                <option value="unitedstates">United States</option>
              </select>
            </label>
            

            <!-- button to confirm order -->
            <div class="text-center">
              <a href="" class="btn btn-lg" id="order_btn"
                >Proceed to Confirm Order</a
              >
            </div>
          </form>
        </div>
      
    </div>
  </div>
</section>
<!-- end of checkout section -->
  <!-- start of Hero -->

  <section class="middle-banner img-fluid">
      <div class="container">
        <div class="row about-banner-text">
          <div class="col-md-12">
            <h3>  "To move forward you have to give back."</h3>
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
