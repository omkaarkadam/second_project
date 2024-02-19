<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Add Company</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="admin.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
</head>

<body>
  
<div class="container-fluid">
    
    <nav class="navbar navbar-expand-exlg navbar-light bg-light border rounded mb-1">
      <div class="container-fluid">
        <a class="company-name" href="#">Exploright Admin Panel</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#sidebarNav" aria-controls="sidebarNav">
          <span class="navbar-toggler-icon"></span>
        </button>
      </div>
    </nav>
    
    <div class="offcanvas offcanvas-start" tabindex="-1" id="sidebarNav" aria-labelledby="sidebarNavLabel">
      <div class="offcanvas-header text-center">
        <h5 id="sidebarNavLabel">Manage Industry Visits</h5>
        <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
      </div>
      <div class="offcanvas-body">
        <div class="card text-center">
          <div class="card-header">
            <img src="img/explogo.png" alt="Logo" height="70">
          </div>
          <div class="card-body">
            <p class="card-text">Welcome, Admin!</p>
            <ul class="list-group">
              <li class="list-group-item border-0">
                <a class="list-group-item list-group-item-action btn btn-outline-primary rounded-pill" href="#"><i class="fas fa-user"></i> Profile</a>
              </li>
              <li class="list-group-item border-0">
                <a class="list-group-item list-group-item-action btn btn-outline-primary rounded-pill" aria-current="page" href="#"><i class="fas fa-home"></i> Dashboard</a>
              </li>
              <li class="list-group-item border-0">
                <a class="list-group-item list-group-item-action btn btn-outline-primary rounded-pill" href="travel_agency">Travel Agency</a>
              </li>

              <li class="list-group-item border-0">
                <a class="list-group-item list-group-item-action btn btn-outline-primary rounded-pill" href="add_com">Add Company</a>
              </li>
              <li class="list-group-item border-0">
                <a class="list-group-item list-group-item-action btn btn-outline-primary rounded-pill" href="/revenue.html"><i class="fas fa-dollar-sign"></i> Revenue</a>
              </li>
              <li class="list-group-item border-0">
                <a class="list-group-item list-group-item-action btn btn-outline-primary rounded-pill" href="/feedback.html"><i class="fas fa-comment"></i> View Feedback</a>
              </li>
              <li class="list-group-item border-0">
                <a class="list-group-item list-group-item-action btn btn-outline-primary rounded-pill" href="/setting.html"><i class="fas fa-cog"></i> Settings</a>
              </li>
              <a class="list-group-item list-group-item-action btn btn-outline-primary rounded-pill" href="/"><i class="fas fa-back"></i> Back</a>
              <li class="list-group-item border-0">
                <a class="list-group-item list-group-item-action btn btn-outline-primary rounded-pill text-danger" href="#"><i class="fas fa-sign-out-alt"></i> Logout</a>
                  <li class="list-group-item border-0">
                
                
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
 </div>
 <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.min.js"></script>
</body>
</html>