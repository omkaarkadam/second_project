<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Add Company</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="admin.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
</head>

<body>
@include('admin.header') 
<div class="card">
  <div class="card-header">
    <h5 class="card-title">Add New Company</h5>
  </div>
  <div class="card-body">
    <form method="post" action="add_com" enctype="multipart/form-data">
      @csrf
      <table class="table">
        <tbody>
          <tr>
            <th scope="row">Category</th>
            <td><select class="form-control" name="category" required>
                        <option disabled selected>Select</option>
                        <option value="IT" name="category">IT</option>
                        <option value="Textile" name="category">Textile</option>
                        <option value="Automobile" name="category">Automobile</option>
                        <option value="Media" name="category">Media</option>
                        <option value="Pepar" name="category">Pepar</option>
                    </select></td>
          </tr>
          <tr>
            <th scope="row">Company Name</th>
            <td><input type="text" class="form-control" name="companyName" id="visitName"></td>
          </tr>
          <tr>
            <th scope="row">Company Image</th>
            <td><input type="file" class="form-control" name="companyImage" id="companyImage"></td>
          </tr>
          <tr>
            <th scope="row">Email</th>
            <td><input type="email" name="email" class="form-control"></td>
          </tr>
          <tr>
            <th scope="row">Contact</th>
            <td><input type="text" name="contact" class="form-control"></td>
          </tr>
          <tr>
            <th scope="row">Price</th>
            <td><input type="text" class="form-control" name="price" id="price"></td>
          </tr>
          <tr>
            <th scope="row">Location</th>
            <td><input type="text" class="form-control" name="location" id="location"></td>
          </tr>
          <tr>
            <th scope="row">Duration</th>
            <td><input type="text" class="form-control" name="duration" id="duration"></td>
          </tr>
          <tr>
            <th scope="row">Availability</th>
            <td><input type="text" class="form-control" name="availability" id="availability"></td>
          </tr>
          <tr>
            <th scope="row">Description</th>
            <td><textarea name="description" cols="30" rows="2"  class="form-control"></textarea></td>
          </tr>
        </tbody>
      </table>
      <button type="submit" class="btn btn-primary">Add Company</button>
    </form>
  </div>
</div>
</div>

@include('footer')
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>