function handlePickupInput() {
            const pickupLocation = document.getElementById("pickupLocation");
            const dropLocation = document.getElementById("dropLocation");

            // Set Drop Location to be the same as Pickup Location
            dropLocation.value = pickupLocation.value;
        }
         
        function toggleParticipantDetails() {
            const participantType = document.getElementById("participantType").value;
            const participantDetailsSection = document.getElementById("participantDetailsSection");

            if (participantType === "solo") {
                participantDetailsSection.style.display = "none";
            } else {
                participantDetailsSection.style.display = "block";
            }
        }
    
 
        (function () {
            'use strict';

            // Fetch all the forms validation 
            var forms = document.querySelectorAll('.needs-validation');

            // Loop over them and prevent submission
            Array.from(forms).forEach(function (form) {
                form.addEventListener('submit', function (event) {
                    if (!form.checkValidity()) {
                        event.preventDefault();
                        event.stopPropagation();
                    }

                    form.classList.add('was-validated');
                }, false);
            });
        })();