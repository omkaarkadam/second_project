<!DOCTYPE html>
<html lang="en">
<head>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="admin.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">

</head>
<body>
    @include('admin.header')
  <div class="container-fluid">
    <!-- Common Section -->

        <!-- Page-specific content goes here -->
        <h2>Travel Agency Page</h2>
        <!-- Additional content for this page -->
        
        <form>
          <!-- Agency Name -->
          <div class="form-group mb-3">
            <label for="agencyName">Agency Name:</label>
            <input type="text" class="form-control" id="agencyName" placeholder="Enter Agency Name" required>
          </div>

          <!-- Address -->
          <div class="form-group mb-3">
            <label for="address">Address:</label>
            <input type="text" class="form-control" id="address" placeholder="Enter Address" required>
          </div>

          <!-- Contact Person -->
          <div class="form-group mb-3">
            <label for="contactPerson">Contact Person:</label>
            <input type="text" class="form-control" id="contactPerson" placeholder="Enter Contact Person" required>
          </div>

          <!-- Phone -->
          <div class="form-group mb-3">
            <label for="phone">Phone:</label>
            <input type="tel" class="form-control" id="phone" placeholder="Enter Phone Number" required>
          </div>

          <!-- Submit Button -->
          <button type="submit" class="btn btn-primary">Submit</button>
        </form>
        
  </div>


    <!-- Include your common scripts here -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
  </div>
  @include('footer')
</body>
</html>