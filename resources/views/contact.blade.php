 <!DOCTYPE html>
 <html>
 <head>
 	<meta charset="utf-8">
 	<meta name="viewport" content="width=device-width, initial-scale=1">
 	<title></title>
 <link rel="stylesheet" type="text/css" href="css/styles.css">
 	 <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
 </head>
 <body>
 	@include('header')

     <div class="container p-3" id="contact">
      <h2 class="text-center mb-3 mt-3"><b>Contact Form</b></h2>
      <div class="row justify-content-center">
        <div class="col-lg-8">
   <form action="contact" method="post">
   	{{ csrf_field() }}
            <div class=" card rounded-3">
              <div class="p-4">
                <div class="mb-3">
                   @if(Session::has('success'))
            <div id="successMessage" class="alert alert-success">
              {{ Session::get('success') }}
               <script>
        // Delay showing the success message
        setTimeout(function() {
            document.getElementById('successMessage').style.display = 'none';
        },6000); // 3000 milliseconds = 3 seconds
    </script>
            </div>
            @endif
                  <label for="name" class="form-label">Name:</label>
                  <input type="text" class="form-control  rounded-pill" pattern="[a-zA-Z][z-zA-z]{2,20}" name="name" placeholder="Name" value="{{ old('name') }}" required>
                  @if ($errors->has('name'))
                  <span class="text-danger">{{ $errors->first('name') }}</span>
                  @endif
                </div>
                <div class="mb-3">
                  <label for="email" class="form-label">Email:</label>
                  <input type="email" class="form-control rounded-pill"pattern="[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}" name="email" value="{{ old('email') }}" required>
                    @if ($errors->has('email'))
                                            <span class="text-danger">{{ $errors->first('email') }}</span>
                                        @endif
                </div>
                <div class="mb-3">
                  <label for="message" class="form-label">Message:</label>
                  <textarea class="form-control rounded-pill" name="msg" value="{{ old('msg') }}" required></textarea>
                    

                                        @if ($errors->has('msg'))
                                            <span class="text-danger">{{ $errors->first('msg') }}</span>
                                        @endif

                  
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



<!--
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
    -->
            <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/js/all.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@2.11.6/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.min.js"></script>
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>

@include('footer')
 </body>
 </html>
