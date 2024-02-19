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
      <div class="dropdown input-group mt-3">
        <input type="button" class="form-control" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" value="Select Category">
        <button class="btn btn-inline dropdown-toggle" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          
        </button>
        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
          <a class="dropdown-item" href="It">IT</a>
          <a class="dropdown-item" href="textile">Textile Industry</a>
          <a class="dropdown-item" href="Automobile">Automobile</a>
          <a class="dropdown-item" href="media">Media</a>
          <a class="dropdown-item" href="pepar">Pepar</a>
        </div>
      </div>
    </div>
    <!-- Hero Section -->
    <header class="container-fluid text-center mt-5" id="home">
        <h1>Welcome to <span class="company-name">Exploright</span></h1>
        <p class="slogan">Where passion meets productivity </p>
    </header>

    <!-- Tours Section -->
<section class="container-fluid mt-4">
    <h2 class="text-primary text-center">Trending Tours</h2>
    <div class="row">
   @php $count = 0; @endphp
@foreach($company as $key => $com)
    @if($key % 4 == 0)
        <div class="col-md-3 mb-4">
            <div class="card shadow h-100 p-2">
                <img src="uploade/{{$com->companyImage}}" class="border border-secondry rounded p-1 equal-img-size" alt="Tour 1">
                
                <div class="card-body text-center d-flex flex-column">
                    <p class="text-danger border-bottom border-primary p-2">{{$com->companyName}}</p>
                   
                    <a href="{{$com->companyName}}" class="btn btn-primary rounded-pill mt-2">Explore</a>
                </div>
            </div>
        </div>
        @php $count++; @endphp
        @if($count == 4)
            @break
        @endif
    @endif
@endforeach

    </div>
</section>







    <section class="container-fluid mt-4">
        <h2 class="text-primary text-center">Upcoming Tours</h2>
        <div class="row">
        @php $count = 0; @endphp
@foreach($company as $key => $com)
    @if($key % 3 == 0 && $key >= 2)
        <div class="col-md-3 mb-4">
            <div class="card shadow h-100 p-2">
                <img src="uploade/{{$com->companyImage}}" class="border border-secondry rounded p-1 equal-img-size" alt="Tour 1">
                
                <div class="card-body text-center d-flex flex-column">
                    <p class="text-danger border-bottom border-primary p-2">{{$com->companyName}}</p>
                   
                    <a href="{{$com->companyName}}" class="btn btn-primary rounded-pill mt-2">Explore</a>
                </div>
            </div>
        </div>
        @php $count++; @endphp
        @if($count == 4)
            @break
        @endif
    @endif
@endforeach

            </div>
    </section>
<!--
<section class="container-fluid mt-4" id="testimonials">
    <h2>Testimonials and Case Studies</h2>
    <p>Don't just take our word for it. Hear from participants who have benefited from our industry visits:</p>
    <div class="row">
       Testimonial 1
        <div class="col-md-6">
            <div class="testimonial">
                <p>"The industry visit to TCS was an eye-opener for me. I learned how cutting-edge technology is shaping businesses today. It was an invaluable experience!"</p>
                <p><strong>- Light yagami, Student</strong></p>
            </div>
        </div>
         Testimonial 2 
        <div class="col-md-6">
            <div class="testimonial">
                <p>"I attended the H&M visit, and it exceeded my expectations. It gave me a deep understanding of the fashion industry and inspired me to pursue a career in fashion design."</p>
                <p><strong>- Misa Amani, Fashion Designer </strong></p>
            </div>
        </div>
    </div>
    <p>Explore more success stories and case studies in our <a href="#blog">blog</a>.</p>
</section>


     Contact Form 
    <div class="container p-3" id="contact">
      <h2 class="text-center mb-3 mt-3"><b>Get in Touch</b></h2>
      <div class="row justify-content-center">
        <div class="col-lg-6">
          <form>
            <div class=" card rounded-3">
              <div class="p-4">
                <div class="mb-3">
                  <label for="name" class="form-label">Name:</label>
                  <input type="text" class="form-control rounded-pill" required>
                </div>
                <div class="mb-3">
                  <label for="email" class="form-label">Email:</label>
                  <input type="email" class="form-control rounded-pill" required>
                </div>
                <div class="mb-3">
                  <label for="message" class="form-label">Message:</label>
                  <textarea class="form-control rounded-pill" required></textarea>
                </div>
                <div class="text-center">
                  <button type="submit" class="btn btn-primary rounded-pill">Send Message</button>
                </div>
    
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
    

     Chatbot  
    
   <script src="https://www.gstatic.com/dialogflow-console/fast/messenger/bootstrap.js?v=1"></script>
<df-messenger
  chat-icon="https://www.example.com/icon.png" 
  intent="WELCOME" 
  chat-title="Exploright Chatbot" 
  agent-id="YOUR_PROJECT_ID" 
  language-code="en"
></df-messenger>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/js/all.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@2.11.6/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.min.js"></script>
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="/script.js"></script>
-->
@include('footer')
</body>

</html>