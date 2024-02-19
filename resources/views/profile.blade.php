<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Profile</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css">
    
    <style>
        
    </style>
</head>

<body >
    @include('header')
    <div class="container card text-center p-4">
        <div class="">
            <img src="img/profile.webp" alt="Profile Picture" width="200" class="img-fluid img-thumbnail rounded-circle">
            <h2>{{$user->username}}</h2>
            <p>Email:{{$user->email}}</p>
            <p>Phone No: {{$user->mob_no}}</p>

            <button class="btn btn-primary" onclick="showEditForm()">
                <i class="fas fa-edit"></i> Edit Profile
            </button>
            <button class="border border-0 bg-white">
                <a href="logout" class="btn btn-danger"><i class="fas fa-sign-out-alt"></i> Logout</a>
            </button>
        </div>

        <!-- Edit Profile Form -->
        <form method="post" class="edit-profile-form" action="changeProfile" style="display: none;">
            @csrf
            <div class="mt-3 text-start">
                <label for="editName" class="form-label">
                    <i class="fas fa-user"></i> Name
                </label>
                <input type="text" class="form-control" id="editName" name="username" value="{{$user->username}}" placeholder="Enter your name">
            </div>
            <div class="mt-3 text-start">
                <label for="editEmail">
                    <i class="fas fa-envelope"></i> Email
                </label>
                <input type="email" class="form-control" id="editEmail" name="email" value="{{$user->email}}" placeholder="Enter your email">
            </div>
            <div class="mt-3 text-start">
                <label for="editLocation">
                    <i class="fas fa-phone"></i> Phone No.
                </label>
                <input type="text" class="form-control" id="editLocation" name="mob_no" value="{{$user->mob_no}}" placeholder="Enter your location">
            </div>
            <div class="mt-3 text-start">
              <button type="submit" class="btn btn-primary mt-3">
                <i class="fas fa-save"></i> Save Changes
            </button>
            </div>
            
        </form>
    </div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js"></script>

    <script>
        function showEditForm() {
            // Toggle visibility of the edit profile form
            $('.edit-profile-form').toggle();
        }
    </script>
    @include('footer')
</body>

</html>