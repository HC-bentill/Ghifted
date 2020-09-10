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
                             <h4 style="color:#1b5a41"><i class="fa fa-shopping-basket"></i> &nbsp Viewing Orders</h4>
                             <table class="table">
          <thead class="thead-color">
            <tr>
              <th scope="col" id="items">Items</th>
              <th scope="col">Price</th>
              <th scope="col">Quantity</th>
              <th scope="col">Total</th>
              <th scope="col"></th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <th scope="row">Afican Sculpture</th>
              <td>$50</td>
              <td>3</td>
              <td>@mdo</td>
              
            </tr>
            <tr>
              <th scope="row">Afican Sculpture</th>
              <td>$50</td>
              <td>3</td>
              <td>@mdo</td>
              
            </tr>
            <tr>
              <th scope="row">Afican Sculpture</th>
              <td>$50</td>
              <td>3</td>
              <td>@mdo</td>
              
            </tr>
            <tr>
              <th scope="row">Afican Sculpture</th>
              <td>$50</td>
              <td>3</td>
              <td>@mdo</td>
              
            </tr>
            <tr>
              <th scope="row">African Sculpture</th>
              <td>$50</td>
              <td>3</td>
              <td>@mdo</td>
              
            </tr>
            <tr>
              <th scope="row">African Sculpture</th>
              <td>$50</td>
              <td>3</td>
              <td>@mdo</td>
              
            </tr>
    
          </tbody>
        </table>
                             </ul>
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