<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>

<body>
    @csrf
    <div class="container mt-4">
        <div class="rounded border shadow-lg p-4">
            <div class="text-center">
                <h3 class="display-4">Book Your Tour Now!</h3>
            </div>
            <div class="mb-3 text-center">
                <button class="btn btn-outline-primary rounded-pill mt-3" onclick="soloForm()">Solo</button>
                <button class="btn btn-outline-primary rounded-pill mt-3" onclick="showFamilyForm()">Family</button>
                <button class="btn btn-outline-primary rounded-pill mt-3" onclick="showGroupForm()">Group</button>
                <button class="btn btn-outline-primary rounded-pill mt-3" onclick="showInstituteForm()">Institute</button>
            </div>

            <!-- Form for Institute -->
            <div id="instituteForm" style="display: none;">
                <h4 class="text-center text-danger">Institute Form</h4>
                <form class="needs-validation mt-4" novalidate>
                  <div class="mb-3">
                    <label class="form-label">Company Name</label>
                    <input type="text" class="form-control rounded-pill"  id="com_name" disabled required>
                  </div>
                  <div class="mb-3">
                    <label class="form-label">User ID</label>
                    <input type="number" class="form-control rounded-pill" required>
                  </div>
                  <div class="mb-3">
                    <label class="form-label">Institute Name</label>
                    <input type="text" class="form-control rounded-pill" id="fullName" required>
                    <div class="invalid-feedback">
                      Please enter your full name.
                    </div>
                  </div>
                  <div class="mb-3">
                    <label class="form-label">Email</label>
                    <input type="email" class="form-control rounded-pill" id="email" pattern="^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$" required>
                    <div class="invalid-feedback">
                      Please enter a valid email address.
                    </div>
                  </div>
                  <div class="mb-3">
                    <label for="phone" class="form-label">Phone</label>
                    <input type="tel" class="form-control rounded-pill" id="phone" required>
                    <div class="invalid-feedback">
                      Please enter a valid phone number.
                    </div>
                  </div>
                 
                  <div class="mb-3">
                    <label class="form-label">Select Date</label>
                    <select class="form-control rounded-pill" required>
                      <option disabled selected>Select</option>
                      <option value="7">7</option>
                      <option value="14">14</option>
                      <option value="21">21</option>
                      <option value="28">28</option>
                    </select>
                    <div class="invalid-feedback">
                      Please select a preferred date.
                    </div>
                  </div>
                  
                  <div class="mb-3">
                    <label class="form-label">Category Type</label>
                    <select class="form-control rounded-pill" required>
                      <option value="school">School</option>
                      <option value="college">College</option>
                      <option value="academy">Academy</option>
                    </select>
                    <div class="invalid-feedback">
                      Please select a participant type.
                    </div>
                  </div>
                  <div class="mb-3">
                    <label for="participants">Number Of Participants</label>
                    <input type="number" class="form-control mb-3 rounded-pill" id="participants" required>
                    <p class="alert-info text-danger"><b>Note: Please attach the proof of ID for all participants in a single PDF or Docs file.</b></p>
                  </div>
                  <label class="form-label">Select the proof of ID</label>
                  <select class="form-control rounded-pill" required>
                    <option value="aadhar">Aadhar Card</option>
                    <option value="pan">Pan Card</option>
                    <option value="driving_licence">Driving Licence</option>
                  </select>
                  <input type="file" class="form-control mt-3 rounded-pill" id="participants_num" required>
                  <div class="invalid-feedback">
                    Please provide the required information.
                  </div>
                  <div class="mb-3">
                    <div class="form-check mt-3">
                      <input type="checkbox" class="form-check-input rounded-pill" id="terms" required>
                      <label>I agree to the <a href="#" class="text-decoration-none">Terms & Conditions</a> and <a href="/cancellation_policy.html" class="text-decoration-none">Cancellation Policy</a>.</label>
                      <div class="invalid-feedback">
                        You must agree before submitting.
                      </div>
                    </div>
                  </div>
                  <button type="submit" class="btn btn-primary mt-3 rounded-pill">Submit</button>
                </form>
            </div>

            <!-- Form for Family -->
            <div id="familyForm" style="display: none;">
                <h4 class="text-center text-danger">Family Form</h4>
                <form class="needs-validation mt-4" novalidate>
                  <div class="mb-3">
                    <label class="form-label">Company Name</label>
                    <input type="text" class="form-control rounded-pill" id="com_name" disabled required>
                  </div>
                  <div class="mb-3">
                    <label class="form-label">User ID</label>
                    <input type="number" class="form-control rounded-pill"  required>
                  </div>
                  <div class="mb-3">
                    <label class="form-label">Full Name</label>
                    <input type="text" class="form-control rounded-pill" id="fullName" required>
                    <div class="invalid-feedback">
                      Please enter your full name.
                    </div>
                  </div>
                  <div class="mb-3">
                    <label class="form-label">Email</label>
                    <input type="email" class="form-control rounded-pill" id="email" pattern="^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$" required>
                    <div class="invalid-feedback">
                      Please enter a valid email address.
                    </div>
                  </div>
                  <div class="mb-3">
                    <label for="phone" class="form-label">Phone</label>
                    <input type="tel" class="form-control rounded-pill" id="phone" required>
                    <div class="invalid-feedback">
                      Please enter a valid phone number.
                    </div>
                  </div>
                  <div class="mb-3">
                    <label for="age" class="form-label">Age</label>
                    <input type="number" class="form-control rounded-pill" id="age" required>
                    <div class="invalid-feedback">
                      Please enter your age.
                    </div>
                  </div>
                  <div class="mb-3">
                    <label class="form-label">Select Date</label>
                    <select class="form-control rounded-pill" required>
                      <option disabled selected>Select</option>
                      <option value="7">7</option>
                      <option value="14">14</option>
                      <option value="21">21</option>
                      <option value="28">28</option>
                    </select>
                    <div class="invalid-feedback">
                      Please select a preferred date.
                    </div>
                  </div>
                  
                  <div class="mb-3" hidden>
                    <label for="participantType" class="form-label">Participant Type</label>
                    <select class="form-control rounded-pill" id="participantType" onchange="toggleParticipantDetails()" required>
                      
                      <option value="family">Family</option>
                    </select>
                    <div class="invalid-feedback">
                      Please select a participant type.
                    </div>
                  </div>
                  <div class="mb-3">
                    <label for="participants">Number Of Participants</label>
                    <input type="number" class="form-control mb-3 rounded-pill" id="participants" required>
                    <p class="alert-info text-danger"><b>Note: Please attach the proof of ID for all participants in a single PDF or Docs file.</b></p>
                  </div>
                  <label class="form-label">Select the proof of ID</label>
                  <select class="form-control rounded-pill" required>
                    <option value="aadhar">Aadhar Card</option>
                    <option value="pan">Pan Card</option>
                    <option value="driving_licence">Driving Licence</option>
                  </select>
                  <input type="file" class="form-control mt-3 rounded-pill" id="participants_num" required>
                  <div class="invalid-feedback">
                    Please provide the required information.
                  </div>
                  <div class="mb-3">
                    <div class="form-check mt-3">
                      <input type="checkbox" class="form-check-input rounded-pill" id="terms" required>
                      <label>I agree to the <a href="#" class="text-decoration-none">Terms & Conditions</a> and <a href="/cancellation_policy.html" class="text-decoration-none">Cancellation Policy</a>.</label>
                      <div class="invalid-feedback">
                        You must agree before submitting.
                      </div>
                    </div>
                  </div>
                  <button type="submit" class="btn btn-primary mt-3 rounded-pill">Submit</button>
                </form>
            </div>

            <!-- Form for Group -->
            <div id="groupForm" style="display: none;">
                <h4 class="text-center text-danger">Group Form</h4>
                <form class="needs-validation mt-4" novalidate>
                  <div class="mb-3">
                    <label class="form-label">Company Name</label>
                    <input type="text" class="form-control rounded-pill" id="com_name" disabled required>
                  </div>
                  <div class="mb-3">
                    <label class="form-label">User ID</label>
                    <input type="number" class="form-control rounded-pill" required>
                  </div>
                  <div class="mb-3">
                    <label class="form-label">Full Name</label>
                    <input type="text" class="form-control rounded-pill" id="fullName" required>
                    <div class="invalid-feedback">
                      Please enter your full name.
                    </div>
                  </div>
                  <div class="mb-3">
                    <label class="form-label">Email</label>
                    <input type="email" class="form-control rounded-pill" id="email" pattern="^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$" required>
                    <div class="invalid-feedback">
                      Please enter a valid email address.
                    </div>
                  </div>
                  <div class="mb-3">
                    <label for="phone" class="form-label">Phone</label>
                    <input type="tel" class="form-control rounded-pill" id="phone" required>
                    <div class="invalid-feedback">
                      Please enter a valid phone number.
                    </div>
                  </div>
                  <div class="mb-3">
                    <label for="age" class="form-label">Age</label>
                    <input type="number" class="form-control rounded-pill" id="age" required>
                    <div class="invalid-feedback">
                      Please enter your age.
                    </div>
                  </div>
                  <div class="mb-3">
                    <label class="form-label">Select Date</label>
                    <select class="form-control rounded-pill" required>
                      <option disabled selected>Select</option>
                      <option value="7">7</option>
                      <option value="14">14</option>
                      <option value="21">21</option>
                      <option value="28">28</option>
                    </select>
                    <div class="invalid-feedback">
                      Please select a preferred date.
                    </div>
                  </div>
                  
                  <div class="mb-3" hidden>
                    <label for="participantType" class="form-label">Participant Type</label>
                    <select class="form-control rounded-pill" id="participantType" onchange="toggleParticipantDetails()" required>

                      <option value="group">Group</option>
                    </select>
                    <div class="invalid-feedback">
                      Please select a participant type.
                    </div>
                  </div>
                  <div class="mb-3">
                    <label for="participants">Number Of Participants</label>
                    <input type="number" class="form-control mb-3 rounded-pill" id="participants" required>
                    <p class="alert-info text-danger"><b>Note: Please attach the proof of ID for all participants in a single PDF or Docs file.</b></p>
                  </div>
                  <label class="form-label">Select the proof of ID</label>
                  <select class="form-control rounded-pill" required>
                    <option value="aadhar">Aadhar Card</option>
                    <option value="pan">Pan Card</option>
                    <option value="driving_licence">Driving Licence</option>
                  </select>
                  <input type="file" class="form-control mt-3 rounded-pill" id="participants_num" required>
                  <div class="invalid-feedback">
                    Please provide the required information.
                  </div>
                  <div class="mb-3">
                    <div class="form-check mt-3">
                      <input type="checkbox" class="form-check-input rounded-pill" id="terms" required>
                      <label>I agree to the <a href="#" class="text-decoration-none">Terms & Conditions</a> and <a href="/cancellation_policy.html" class="text-decoration-none">Cancellation Policy</a>.</label>
                      <div class="invalid-feedback">
                        You must agree before submitting.
                      </div>
                    </div>
                  </div>
                  <button type="submit" class="btn btn-primary mt-3 rounded-pill">Submit</button>
                </form>
            </div>

            <!-- Solo Form -->
            <div id="soloForm" style="display: none;">
                <h4 class="text-center text-danger">Solo Form</h4>
                <form class="needs-validation mt-4" novalidate>
                  <div class="mb-3">
                    <label class="form-label">Company Name</label>
                    <input type="text" class="form-control rounded-pill" id="com_name" disabled required>
                  </div>
                  <div class="mb-3">
                    <label class="form-label">User ID</label>
                    <input type="number" class="form-control rounded-pill" required>
                  </div>
                  <div class="mb-3">
                    <label class="form-label">Full Name</label>
                    <input type="text" class="form-control rounded-pill" id="fullName" required>
                    <div class="invalid-feedback">
                      Please enter your full name.
                    </div>
                  </div>
                  <div class="mb-3">
                    <label class="form-label">Email</label>
                    <input type="email" class="form-control rounded-pill" id="email" pattern="^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$" required>
                    <div class="invalid-feedback">
                      Please enter a valid email address.
                    </div>
                  </div>
                  <div class="mb-3">
                    <label for="phone" class="form-label">Phone</label>
                    <input type="tel" class="form-control rounded-pill" id="phone" required>
                    <div class="invalid-feedback">
                      Please enter a valid phone number.
                    </div>
                  </div>
                  <div class="mb-3">
                    <label for="age" class="form-label">DOB</label>
                    <input type="date" class="form-control rounded-pill" id="age" required>
                    <div class="invalid-feedback">
                      Please enter your age.
                    </div>
                  </div>
                  <div class="mb-3">
                    <label class="form-label">Select Date</label>
                    <select class="form-control rounded-pill" required>
                      <option disabled selected>Select</option>
                      <option value="7">7</option>
                      <option value="14">14</option>
                      <option value="21">21</option>
                      <option value="28">28</option>
                    </select>
                    <div class="invalid-feedback">
                      Please select date.
                    </div>
                  </div>
                  
                  <div class="mb-3" hidden>
                    <label class="form-label">Number of Participant</label>
                    <input type="number" class="form-control rounded-pill" value="1" disabled>
                    <div class="invalid-feedback">
                      Please enter the drop location.
                    </div>
                  </div>
                  <div class="mb-3" hidden>
                    <label for="participantType" class="form-label">Participant Type</label>
                    
                    <select class="form-control rounded-pill" id="participantType" onchange="toggleParticipantDetails()" required>
                      <option value="solo">Solo</option>
                      <option value="family">Family</option>
                      <option value="group">Group</option>
                    </select>
                    <div class="invalid-feedback">
                      Please select a participant type.
                    </div>
                  </div>
                  <div class="mb-3" id="participantDetailsSection" style="display: none;">
                    <label for="participants">Number Of Participants</label>
                    <input type="number" class="form-control mb-3 rounded-pill" id="participants" required>
                    <p class="alert-info text-danger"><b>Note: Please attach the proof of ID for all participants in a single PDF or Docs file.</b></p>
                  </div>
                  <label class="form-label">Select the proof of ID</label>
                  <select class="form-control rounded-pill" required>
                    <option value="aadhar">Aadhar Card</option>
                    <option value="pan">Pan Card</option>
                    <option value="driving_licence">Driving Licence</option>
                  </select>
                  <input type="file" class="form-control mt-3 rounded-pill" id="participants_num" required>
                  <div class="invalid-feedback">
                    Please provide the required information.
                  </div>
                  <div class="mb-3">
                    <div class="form-check mt-3">
                      <input type="checkbox" class="form-check-input rounded-pill" id="terms" required>
                      <label>I agree to the <a href="#" class="text-decoration-none">Terms & Conditions</a> and <a href="/cancellation_policy.html" class="text-decoration-none">Cancellation Policy</a>.</label>
                      <div class="invalid-feedback">
                        You must agree before submitting.
                      </div>
                    </div>
                  </div>
                  <button type="submit" class="btn btn-primary mt-3 rounded-pill">Submit</button>
                </form>
            </div>
        </div>
    </div>

    <script src="/booking.js"></script>

    <script>
        function showInstituteForm() {
            document.getElementById("instituteForm").style.display = "block";
            document.getElementById("familyForm").style.display = "none";
            document.getElementById("groupForm").style.display = "none";
            document.getElementById("soloForm").style.display = "none";
        }

        function showFamilyForm() {
            document.getElementById("instituteForm").style.display = "none";
            document.getElementById("familyForm").style.display = "block";
            document.getElementById("groupForm").style.display = "none";
            document.getElementById("soloForm").style.display = "none";
        }

        function showGroupForm() {
            document.getElementById("instituteForm").style.display = "none";
            document.getElementById("familyForm").style.display = "none";
            document.getElementById("groupForm").style.display = "block";
            document.getElementById("soloForm").style.display = "none";
        }

        function soloForm() {
            document.getElementById("instituteForm").style.display = "none";
            document.getElementById("familyForm").style.display = "none";
            document.getElementById("groupForm").style.display = "none";
            document.getElementById("soloForm").style.display = "block";
        }
    </script>
</body>

</html>