<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title></title>
  <link rel="stylesheet" type="text/css" href="styles.css">


    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css">

</head>

<body>
    <!-- Navigation Bar -->
<nav class=" navbar navbar-expand-exlg navbar-light" style="background-color: #e3f2fd;">
    <div class="container-fluid">
        <div class="navbar-brand">
            <div class="row align-items-center">
                <div class="col-auto">
                    <a href="#"><img src="img/explogo.png" alt="Logo" height="50"></a>
                </div>
            </div>
        </div>
        <div class="navbar-text ml-auto">
          <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#navbarOffcanvas" aria-controls="navbarOffcanvas">
            <span class="navbar-toggler-icon"></span>
        </button>
        
          <!--<span class="user-icon"><i class="fas fa-user" width="70"></i></span>
          <img src="/Amar.png.jpg" alt="" class="rounded-circle border" width="40" height="40">-->
          
        </div>
        

        <div class="offcanvas offcanvas-start text-center" tabindex="-1" id="navbarOffcanvas" aria-labelledby="navbarOffcanvasLabel">
            <div class="offcanvas-header">
              <div class="dropdown">
                <img src="img/login1.png" class="rounded-circle dropdown-toggle" width="50" height="50" alt="Profile Image" data-toggle="dropdown">
                <!--<i class="fas fa-user fa-lg rounded-circle dropdown-toggle" data-toggle="dropdown"></i>-->
                <i class="fas fa-caret-down dropdown-toggle" data-toggle="dropdown"></i>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                  <a class="dropdown-item text-primary" href="#"><i class="fas fa-user"></i> Profile</a>
                  <a class="dropdown-item text-primary" href="#"><i class="fas fa-route"></i> My Tours</a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item text-danger" href="#"><i class="fas fa-sign-out-alt"></i> Logout</a>
                </div>
               
              </div>
                <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">
              <ul class="list-group ml-auto">

                  <a class="list-group-item list-group-item-action btn btn-outline-primary rounded-pill mb-2" href="/"><i class="fas fa-home"></i> Home</a>


                  <a class="list-group-item list-group-item-action btn btn-outline-primary rounded-pill mb-2" href="about">About</a>


                  <a class="list-group-item list-group-item-action btn btn-outline-primary rounded-pill mb-2" href="contact">Contact</a>

                  <a class="list-group-item list-group-item-action btn btn-outline-primary rounded-pill mb-2" href="#social">Social</a>

                  <a class="list-group-item list-group-item-action btn btn-outline-primary rounded-pill mb-2" href="/book.html">Book</a>
                    @if(!Session()->has('email'))
                  <a class="list-group-item list-group-item-action btn btn-outline-primary  rounded-pill mb-2" href="login"  >Login</a>

                  <a class="list-group-item list-group-item-action btn btn-outline-primary  rounded-pill mb-2" href="register" >Register</a>
                  @endif
                    @if(Session()->has('email'))

                   <a class="list-group-item list-group-item-action btn btn-outline-primary rounded-pill mb-2" href="profile">Profile</a>

                  <a class="list-group-item list-group-item-action btn btn-outline-primary  rounded-pill mb-2" href="logout" >Logout</a>
                  @endif
                  <a class="list-group-item list-group-item-action btn btn-outline-primary  rounded-pill mb-2" href="add_com" >Next</a>

              </ul>
            </div>
        </div>

        <div class="collapse navbar-collapse" id="navbarNav">
            <!-- Your existing menu items go here -->
        </div>
    </div>
</nav>
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.min.js"></script>


<!--
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/js/all.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@2.11.6/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.min.js"></script>
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
-->
</body>
</html>