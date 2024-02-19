<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login Form</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="styles.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
</head>
<body>
    @include('header')
  <div class="container">
    <div class="row justify-content-center mt-4">
      <div class="col-md-6">
        <div class="rounded border shadow-lg p-4">
        <img src="img/explogo.png" alt="Logo" class="mx-auto d-block mb-4" height="70">
        <h3 class="text-center mb-4"><b>Welcome back</b></h3>
        <form class="border border-1 rounded p-4" method="post" action="login">
          @csrf
          @if ($errors->any())
            <div class="alert alert-danger">
              @foreach ($errors->all() as $error)
                {{ $error }}<br>
              @endforeach
            </div>
          @endif
          <div class="mb-3">
            <span class="text-danger">*</span>
            <label for="loginUsername" class="form-label">Email</label>
            <input type="email" class="form-control rounded-pill" placeholder="Enter Email" name="email" id="loginUsername" required>
          </div>
          <div class="mb-3">
            <span class="text-danger">*</span>
            <label for="loginPassword" class="form-label">Password</label>
            <div class="input-group">
              <input type="password" class="form-control rounded-pill" placeholder="Enter Password" name="password" id="loginPassword" required>
              <button class="btn btn-inline-secondary rounded-pill" type="button" id="showPassword"><i class="fas fa-eye" id="passwordIcon"></i></button>
            </div>
          </div>
          <button type="submit" class="btn btn-primary rounded-pill">Login</button>
          <p class="text-center mt-4">Don't have an account? <a href="register" class="text-decoration-none">Sign up</a></p>
          <p class="text-center mt-2">OR</p>
           <a href="https://accounts.google.com/o/oauth2/auth?scope=email&redirect_uri=YOUR_REDIRECT_URI" class="btn btn-outline-primary rounded-pill d-flex align-items-center text-black">
             <img src="img/favicon.ico" alt="Google" class="me-2" height="20"> Continue with Google
           </a>
        </form>
        </div>
      </div>
    </div>
  </div>
  <script src="js/login.js"></script>
  @include('footer')
</body>
</html>
