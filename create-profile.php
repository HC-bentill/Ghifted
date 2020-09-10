<?php require('includes/page-head.php');

?>

<?php 
include('includes/nav.php');
?>

<section class="dashboard-banner">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12 p-5 dashboard">
        <div class="row">
          <div class="col-md-3 left-pane">
            <ul class="list-group mb-3">
              <h4 class="list-group-item " style="background:#1b5a41">Account Options</h4>
              <li class="list-group-item">
                <i class="fa fa-home"></i> <a href="dashboard.php">My Dashboard</a>
              </li>
              <li class="list-group-item">
                <i class="fa fa-shopping-basket"></i> <a href="orders.php">View Orders</a>
              </li>
              <li class="list-group-item">
                <i class="fa fa-user-plus"></i> <a href="create-profile.php">Create Profile</a>
              </li>
              <li class="list-group-item">
                <i class="fa fa-user"></i> <a href="my-profile.php">View Profile</a>
              </li>
              </li>
              <li class="list-group-item">
                <i class="fa fa-lock"></i> <a href="change-password.php">Change Password</a>
              </li>
              <li class="list-group-item">
                <i class="fa fa-power-off text-danger"></i> <a href="">Logout</a>
              </li>

            </ul>
          </div>
          <div class="col-md-8 right-pane">
            <div class="ml-5">
              <h4 style="color:#1b5a41"><i class="fa fa-user-plus"></i> &nbsp Create Profile</h4>
              <form>
                <div class="form">
                  <div class="fields fields--2">
                    <label class="field">
                      <span class="field__label" for="firstname">First name</span>
                      <input class="field__input" type="text" id="firstname" value="John" />
                    </label>
                    <label class="field">
                      <span class="field__label" for="lastname">Last name</span>
                      <input class="field__input" type="text" id="lastname" value="Doe" />
                    </label>
                  </div>
                  <label class="field">
                    <span class="field__label" for="address">Address</span>
                    <input class="field__input" type="text" id="address" />
                  </label>
                  <label class="field">
                    <span class="field__label" for="phonenumber">Phone Number</span>
                    <input class="field__input" type="text" id="address" placeholder="Please enter with country code" />
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
                  <div class="text-center">
                    <a href="" class="btn btn-lg" id="submit_btn">Submit</a>
                  </div>
                </div>
              </form>

            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<?php 
include('includes/footer.php');
?>