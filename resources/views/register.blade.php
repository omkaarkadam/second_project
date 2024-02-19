<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Your Page Title</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="css/styles.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
</head>

<body>
  @include('header')
  <div class="container">
    <div class="row justify-content-center mt-4">
      <div class="col-md-6">
        <div class="rounded border shadow-lg p-4">
          <img src="img/explogo.png" alt="Logo" class="mx-auto d-block mb-4" height="70">
          <h3 class="text-center mb-4"><b>Create your account</b></h3>
          <div class="card-body">
            @if(Session::has('success'))
            <div id="successMessage" class="alert alert-success">
              {{ Session::get('success') }}
            </div>
            @endif

            @if(Session::has('email_exists'))
            <div class="alert alert-danger">
              {{ Session::get('email_exists') }}
            </div>
            @endif

            @if ($errors->any())
            <div class="alert alert-danger">
              <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
              </ul>
            </div>
            @endif

            <form class="border border-1 rounded p-4" action="register" method="post">
              @csrf
              <div class="mb-3">
                <span class="text-danger">* </span>
                <label for="regUsername" class="form-label">Username</label>
                <input type="text" class="form-control rounded-pill @error('username') is-invalid @enderror" name="username" id="regUsername" pattern="[a-zA-Z][z-zA-z]{2,20}" placeholder="First letter Capital" required>
                @error('username')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
              </div>
              <div class="mb-3">
                <span class="text-danger">*</span>
                <label for="regUsername" class="form-label">Phone No.</label>
                <input type="text" class="form-control rounded-pill @error('mob_no') is-invalid @enderror" id="regUsername" name="mob_no" placeholder="Enter 10 digit mobile number" pattern="[0-9]{10}" required>
                @error('mob_no')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
              </div>

              <div class="mb-3">
                <span class="text-danger">*</span>
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control rounded-pill @if(Session::has('email_exists')) is-invalid @endif" pattern="[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}" id="regEmail" name="email" placeholder="Enter Email" required>
                @if(Session::has('email_exists'))
                <div class="invalid-feedback">{{ Session::get('email_exists') }}</div>
                @endif
                @error('email')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
              </div>
              <div class="mb-3">
                <span class="text-danger">*</span>
                <label for="regPassword" class="form-label">Password</label>
                <div class="input-group">
                  <input type="password" class="form-control rounded-pill @error('password') is-invalid @enderror" id="regPassword" name="password" placeholder="Enter 8 character Password" required>
                  <button class="btn btn-inline-secondary rounded-pill" type="button" id="showRegPassword"><i class="fas fa-eye" id="regPasswordIcon"></i></button>
                </div>
                <div id="errorMessage" class="alert alert-danger">
                  @error('password')
                  {{ $message }}
                  @enderror
              </div>
              <button type="submit" class="btn btn-primary rounded-pill">Register</button>
              <p class="text-center mt-3">Already have an account? <a href="login" class="text-decoration-none">Login</a></p>
              <p class="text-center mt-2">OR</p>
              <a href="https://accounts.google.com/o/oauth2/auth?scope=email&redirect_uri=YOUR_REDIRECT_URI" class="btn btn-outline-primary rounded-pill d-flex align-items-center text-black">
                <img src="img/favicon.ico" alt="Google" class="me-2" height="20"> Continue with Google
              </a>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
  <script src="js/reg.js"></script>
  @include('footer')
</body>

</html>
