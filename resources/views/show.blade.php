<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tour Detail</title>
    <!-- Bootstrap CDN -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css">
<style>
    .equal-img-size {
    width: 35%; 
    height: 35px;
</style>
</head>
<body>
    @include('header')
    <div class="container">
        <div class="row card mt-1">
            <div class="mt-2 text-center">
                <img src="uploade/{{$company->companyImage}}" alt="Paris"  class="img-fluid img-thumbnail equal-img-size">
            </div>
            <div class="card-body mt-2">
                <h1 class="text-center">{{$company->location}}</h1>
                <p class="lead">{{$company->description}}</p>
                <div class="d-flex align-items-center justify-content-between">
                    <a  href="/" class="btn btn-success rounded-pill">Back</a>
                    <a href="#" class="btn btn-primary rounded-pill">Book Now</a>
                </div>
                <hr>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item d-flex align-items-center">
                        <span class="me-3"><i class="fas fa-laptop-code"></i></span>
                        Category: {{$company->category}}
                    </li>
                    <li class="list-group-item d-flex align-items-center">
                        <span class="me-3"><i class="fas fa-clock"></i></span>
                        Duration: {{$company->duration}}
                    </li>
                    <li class="list-group-item d-flex align-items-center">
                        <span class="me-3"><i class="fas fa-map-marker-alt"></i></span>
                        Location: {{$company->location}}
                    </li>
                    <li class="list-group-item d-flex align-items-center">
                        <span class="me-3"><i class="fas fa-check"></i></span>
                        Slot Available: {{$company->availability}}
                    </li>
                    <li class="list-group-item d-flex align-items-center">
                        <span class="me-3"><i class="fas fa-star text-warning"></i></span>
                        Rating: 4.8/5
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!-- Bootstrap CDN -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.js"></script>
    @include('footer')
</body>
</html>