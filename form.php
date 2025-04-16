<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="./css/form.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.6.0/css/all.min.css">
    </head>
<body>

    <div class="container m-5" style="justify-self: center">
        <div class="d-flex flex-wrap  gap-2" style="justify-content: center; align-items: center; width: 100%">
            <button class="btn btn-large quoteButton" data-bs-toggle="modal" data-bs-target="#quoteModal" style="font-weight: bold; padding: 0.75em; display: flex;">
                <h2 class="m-1 p-0 text-center align-bottom" style="display: flex; justify-content: center; align-items: center; text-align: center; font-family: Oswald;">
                    Schedule a Session
                </h2>
                
            </button>

        </div>
    </div>
<!-- Modal Structure -->
<div class="modal fade" id="quoteModal" tabindex="-1" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="myModalLabel">TELL US WHAT YOU NEED</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body d-flex">
            <!-- Sidebar -->
            <div class="col-2 d-flex justify-content-center align-items-center">
                <div class="container m-0">
                    <div class="vr"></div>
                    <div class="circle-container">
                        <div class="circle" data-target="1" id="circle-1"><i class="fa-solid fa-user"></i></div>
                        <div class="circle" data-target="2" id="circle-2"><i class="fa-solid fa-building"></i></div>
                        <div class="circle" data-target="3" id="circle-3"><i class="fa-solid fa-envelope"></i></div>
                        <div class="circle" data-target="4" id="circle-4"><i class="fa-solid fa-circle-question"></i></div>

                    </div>
                </div>
            </div>
        
            <!-- Scrollable Form Section -->
            <div class="d-flex flex-column p-3" style="overflow-y: auto; max-height: 60vh; flex-grow: 1; min-width: 0;">
                <div>
                    <div class="form-section" data-section="1" id="section-1"> 
                        <h3>ABOUT YOU</h3>
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <input type="text" class="section-input" placeholder="First Name" required>
                            </div>
                            <div class="col-md-6 mb-3">
                                <input type="text" class="section-input" placeholder="Last Name" required>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 mb-3">
                              <select class="section-input" required>
                                <option value="">Select subject</option>
                                <option value="Math">Math</option>
                                <option value="Physics">Physics</option>
                                <option value="Chem">Chemistry</option>
                                <option value="CS">Computer Science</option>
                                <option value="SAT">SAT/ACT Prep</option>
                              </select>          
                            </div>
                        </div>
                    </div>
                </div>
        
                <div>
                    <div class="form-section" data-section="2" id="section-2">
                        <h3>AVAILABILITY</h3>
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <input type="date" class="section-input" required> 
                            </div>
                            <div class="col-md-6 mb-3">
                              <select class="section-input" required>
                                <option value="">Time</option>
                                <option value="8am">8:00am</option>
                                <option value="9am">9:00am</option>
                                <option value="10am">10:00am</option>
                                <option value="11am">11:00am</option>
                                <option value="12pm">12:00pm</option>
                                <option value="1pm">1:00pm</option>
                                <option value="2pm">2:00pm</option>
                                <option value="3pm">3:00pm</option>
                                <option value="4pm">4:00pm</option>
                              </select>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 mb-3">
                            <select class="section-input" required>
                                <option value="">Recurring:</option>
                                <option value="no">Just this session</option>
                                <option value="weekly">Weekly</option>
                                <option value="monthly">Monthly</option>
                              </select>
                            </div>
                        </div>
                    </div>
                </div>
        
                <div>
                    <div class="form-section" data-section="3" id="section-3">
                        <h3>CONTACT</h3>
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <input type="text" class="section-input" placeholder="Email" required>
                            </div>
                            <div class="col-md-6 mb-3">
                                <input type="text" class="section-input" placeholder="Phone" required>
                            </div>
                        </div>
                    </div>
                </div>
        
                <div>
                    <div class="form-section" data-section="4" id="section-4">
                        <h3>ADDITIONAL INFO</h3>
                        <div class="row">
                            <div class="col-md-12 mb-3">
                                <textarea class="section-input" rows="4" placeholder="Additional notes for Ray"></textarea>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="modal-footer">
          <button type="button" class="btn" style="background-color: #125E8A; color: #ffffff">Submit</button>
        </div>
      </div>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>

</body>
</html>


<script>
    // Function to check if all inputs in a section are filled
    function checkFormCompletion(section) {
      const inputs = section.querySelectorAll('.section-input');
      const isCompleted = Array.from(inputs).every(input => input.value.trim() !== "");
      const icon = document.getElementById('circle-' + section.dataset.section);
      
      if (isCompleted) {
        icon.classList.add('filled');
      } else {
        icon.classList.remove('filled');
      }
    }
  
    // Add event listeners to form inputs to monitor changes
    document.querySelectorAll('.form-section').forEach(section => {
      section.querySelectorAll('.section-input').forEach(input => {
        input.addEventListener('input', () => checkFormCompletion(section));
      });
    });
  </script>  

<script>
    // Function to add 'visible' class to form sections once filled
    const formSections = document.querySelectorAll('.form-section');
    formSections.forEach(section => {
      const inputs = section.querySelectorAll('input, select, textarea');
      inputs.forEach(input => {
        input.addEventListener('input', () => {
          if (Array.from(inputs).every(input => input.value.trim() !== '')) {
            section.classList.add('visible');
          } else {
            section.classList.remove('visible');
          }
        });
      });
    });
  </script>

<script>
    // Select all circles
    const circles = document.querySelectorAll('.circle');
  
    // Loop through each circle and add a click event listener
    circles.forEach(circle => {
      circle.addEventListener('click', function() {
        // Get the target section from the data attribute
        const targetSection = document.getElementById(`section-${circle.getAttribute('data-target')}`);
  
        // Scroll to the section
        targetSection.scrollIntoView({
          behavior: 'smooth', // Smooth scrolling effect
          block: 'start'      // Align at the top of the section
        });
      });
    });
  </script>
 