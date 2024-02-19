<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title></title>
  <link rel="stylesheet" type="text/css" href="css/styles.css">


    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
</head>

<body>
  @include('header')
    <!-- Navigation Bar -->

        


    <div class="container-fluid">
      
    </div>
    

    <!-- Tours Section -->
<section class="container-fluid mt-4">
    <h2 class="text-primary text-center">IT Tours</h2>
    <div class="row">
        @foreach($company as $com)
            <div class="col-md-3 mb-4">
                <div class="card shadow h-100 p-2">
                    <img src="uploade/{{$com->companyImage}}" class="border border-secondry rounded p-1 equal-img-size" alt="Tour 1">
                    
                    <div class="card-body text-center d-flex flex-column">
                        <p class="text-danger border-bottom border-primary p-2">{{$com->companyName}}</p>
                       
                        <a href="{{$com->companyName}}" class="btn btn-primary rounded-pill mt-2">Explore</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</section>
@include('footer')
</body>
</html>
