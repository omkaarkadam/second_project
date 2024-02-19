
<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="css/styles.css">
  <title></title>
</head>

<body class="bg-light">
<div class="container mt-5">
  <div class="row justify-content-center">
      <div class="container-fluid">
        <div class="card p-4">
          <div class="border-bottom border-dark border-2 border-rounded">
            <img src="img/explogo.png" alt="Company Logo" class="img-fluid mb-3" style="max-width: 90px;">
          </div>
          <div class="border-bottom border-dark border-2 mb-4">
            <h4 class="mb-3 mt-3">Thank you for contacting <span class="company-name">Exploright</span>.</h4>
          </div>
          <p class="text-end" id="date">{{ \Carbon\Carbon::now()->format('d-M-Y') }} </p>
          <p>Hello <b>{{ $data['name'] }}</b> ,</p>
          <p class="">We have received your information and will get back to you as soon as possible.</p>
          <p class="">Here is a summary of the information you submitted:</p>
          <div class="border border-muted p-1">
            <p class="mt-2"><b>Name: </b>{{ $data['name'] }}</p>
            <p><b>Email: </b>{{ $data['email'] }}</p>
            <p><b>Message: </b>{{ $data['msg'] }}</p>
          </div>
          <p class="mt-3">In the meantime, you can visit our website to know more about what we offer. You can also follow us on Facebook and Twitter to get the latest updates and promotions.</p>
          <p>If you have any questions or concerns, please feel free to reply to this email or call us at +91 90822 22642.</p>
          <p>We appreciate your interest in our company and look forward to hearing from you soon.</p>
          <p>Sincerely,</p>
          <p><span class="company-name">Exploright</span> Customer Support Manager.</p>
          <div class="text-center mt-4">
            <p style="font-size: 12px;">&copy; 2024 <span class="company-name">Exploright</span>. All right reserved.</p>
          </div>
        </div>
      </div>
    </div>
  
</div>
<script >
    
            // create a function to update the date
            function updateDate() {
              // create a new Date object
              const now = new Date();
          
              // get the current date
              const currentDate = now.toLocaleDateString();
          
              // update the textContent property of the span element with the id of date
              document.querySelector('#date').textContent = currentDate;
            }
          
            // call the updateDate function every second
            setInterval(updateDate, 1000);
          
</script>
</body>

</html>
