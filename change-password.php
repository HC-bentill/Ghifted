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
              <h4 style="color:#1b5a41"><i class="fa fa-lock"></i> &nbsp Change Password</h4> 
              <form>
                <div class="form">
                <div class="fields fields--2">
                    <label class="field">
                      <span class="field__label" for="oldpassword">Old Password</span>
                      <input class="field__input" type="password" id="oldpassword"/>
                    </label>
                    <label class="field">
                      <span class="field__label" for="newpassword">New Password</span>
                      <input class="field__input" type="password" id="newpasword"/>
                    </label>
                  </div>
                  <label class="field">
                    <span class="field__label" for="password">Confirm Password</span>
                    <input class="field__input" type="password" id="password" />
                  </label>
                  <div class="text-center">
                    <a href="" class="btn btn-lg" id="submit_btn">Update Password</a>
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