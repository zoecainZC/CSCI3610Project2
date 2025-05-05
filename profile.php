<?php
session_start();
?>

<!-- ***** HTML DOCUMENT STRUCTURE ***** -->
<!DOCTYPE html>
<html lang="en">
<head>
  <!-- ***** META AND TITLE ***** -->
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Ray's Tutoring - Profile</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.6.0/css/all.min.css">
  <link href="./css/form.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">

  <!-- ***** CSS LINKS AND STYLES ***** -->
  <style>
    /* ***** GLOBAL STYLES ***** */
    body {
      margin: 0;
      font-family: Arial, sans-serif;
      background-color: white;
    }

    /* ***** HEADER STYLES ***** */
    header {
      background: linear-gradient(to right, #b6e2a1, #2e7d32);
      color: white;
      padding: 5px 0;
      text-align: center;
    }

    h1 {
      font-size: 70px;
      font-family: Georgia;
    }

    h2 {
      font-family: Georgia;
    }

    h3 {
      font-family: Georgia;
      font-size: 20px;
      font-weight: normal;
    }

    p {
      font-family: Georgia;
      font-size: 20px;
    }

    /* ***** NAVIGATION STYLES ***** */
    nav {
      background: rgba(0, 0, 0, 0.1);
      padding: 15px 0;
    }

    nav ul {
      list-style: none;
      margin: 0;
      padding: 0;
      display: flex;
      justify-content: center;
    }

    nav ul li {
      margin: 0 25px;
    }

    nav ul li a {
      color: white;
      text-decoration: none;
      font-weight: bold;
      font-family: Georgia;
      font-size: 20px;
    }
    
    nav ul li a:hover {
      color: #b6e2a1; /* soft green on hover */
    }

    ul {
      list-style-position: inside;
      padding-left: 0;
    }

    ul li {
      font-family: Georgia;
      font-size: 20px;
    }

    footer {
      background: linear-gradient(to right, #b6e2a1, #2e7d32);
      color: white;
      text-align: center;
      padding: 50px 0;
      width: 100%;
    }

    main {
      padding: 20px;
      text-align: center;
    }

    img {
      height: 300px;
      width: auto;
      border-radius: 16px;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
      transition: transform 0.3s, box-shadow 0.3s;
    }

    .image-container {
      display: flex;
      justify-content: center;
      gap: 20px;
      margin-top: 30px;
    }


    .image-container img:hover {
      transform: scale(1.05);
      box-shadow: 0 8px 16px rgba(0, 0, 0, 0.3);
    }

    .text-container {
      max-width: 750px; /* or whatever width you prefer */
      margin: 0 auto;
      text-align: center; /* optional: keep text left-aligned inside the container */
    }

    a {
      text-decoration: underline;
      color: black;
      font-weight: bold;
    }

    a:hover {
      color: green; /* soft green on hover */
    }

    .icon-image {
  border-radius: 0;
  box-shadow: none;
  height: 60px; /* optional: you can control size separately */
  transition: none; /* optional: remove hover effects if you want */
  }

.icon-container {
  display: flex;
  justify-content: center; /* center the icons horizontally */
  gap: 150px; /* adjust the spacing between icons */
  margin-top: 20px; /* optional: spacing from elements above */
}

footer p {
  display: flex;
  justify-content: center;
  align-items: center;
  gap: 30px; /* controls spacing between items */
  font-size: 20px;
  margin: 0;
}

/* ***** PROFILE CONTAINER STYLES ***** */
.profile-container {
  max-width: 800px;
  margin: 0 auto;
  text-align: left;
  border: 1px solid #ccc;
  padding: 20px;
  border-radius: 8px;
  background-color: #f9f9f9;
}

.profile-container h2 {
  font-family: Georgia;
  color: #2e7d32;
}

/* ***** TABLE STYLES ***** */
.sessions-table {
  width: 100%;
  border-collapse: collapse;
  margin-top: 20px;
}

.sessions-table th, .sessions-table td {
  border: 1px solid #ccc;
  padding: 10px;
  text-align: left;
}

.sessions-table th {
  background-color: #b6e2a1;
  color: white;
}

/* ***** BUTTON STYLES ***** */
.edit-button {
  display: inline-block;
  padding: 10px 20px;
  background-color: #2e7d32;
  color: white;
  text-decoration: none;
  border-radius: 5px;
  font-size: 16px;
  font-family: Arial, sans-serif;
  cursor: pointer;
}

.edit-button:hover {
  background-color: #256b28;
}

.profile-header {
  display: flex;
  justify-content: space-between;
  align-items: center;
  margin-bottom: 20px;
}

    /* ***** POPUP STYLES ***** */
    .popup-overlay {
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background: rgba(0, 0, 0, 0.5);
      display: none;
      justify-content: center;
      align-items: center;
      z-index: 1000;
    }

    .popup-content {
      background: white;
      padding: 20px;
      border-radius: 8px;
      width: 300px; /* Fixed width */
      text-align: center;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
      position: relative;
    }

    .popup-content form {
      width: 100%;
      box-sizing: border-box;
      padding: 0 10px;
    }

    .popup-content input[type="email"],
    .popup-content input[type="text"],
    .popup-content input[type="password"] {
      width: calc(100% - 20px); /* Subtract padding from width */
      box-sizing: border-box;
      padding: 10px;
      margin-bottom: 15px;
      border: 1px solid #ccc;
      border-radius: 4px;
    }

    .popup-content button {
      width: calc(100% - 20px);
      padding: 10px;
      border: none;
      border-radius: 4px;
      cursor: pointer;
      font-size: 16px;
      margin-bottom: 10px;
    }

    .popup-content button[type="submit"] {
      background-color: #2e7d32;
      color: white;
    }

    .popup-content button[type="submit"]:hover {
      background-color: #256b28;
    }

    .popup-content .close-button {
      background-color: #dc3545;
      color: white;
    }

    .popup-content .close-button:hover {
      background-color: #c82333;
    }

    /* Blur effect */
    .blur {
      filter: blur(5px);
    }

    .delete-btn {
      background-color: #dc3545;
      color: white;
      border: none;
      padding: 5px 10px;
      border-radius: 4px;
      cursor: pointer;
    }

    .delete-btn:hover {
      background-color: #c82333;
    }

    /* Update the container's styles */
    .container.m-5.d-flex.justify-content-center.align-items-center {
      display: flex;
      justify-content: center; /* Centers horizontally */
      align-items: center; /* Centers vertically */
      width: 100%; /* Ensures the container spans the full width */
      margin: 0 auto; /* Centers the container itself */
      text-align: center; /* Ensures text alignment is centered */
    }

    .d-flex.flex-wrap.gap-2 {
      display: flex;
      justify-content: center; /* Centers the button horizontally */
      align-items: center; /* Centers the button vertically */
      width: auto; /* Prevents unnecessary stretching */
      margin: 0 auto; /* Ensures the button is centered within the container */
    }
  </style>
</head>

<!-- ***** BODY SECTION ***** -->
<body>
  <!-- ***** HEADER SECTION ***** -->
  <header>
    <h1>Ray's Tutoring</h1>
    <nav>
      <ul>
        <li><a href="signup.php">Sign Up</a></li>
        <li><a href="learnMore.php">Learn More</a></li>
        <li><a href="#">Login</a></li>
        <li><a href="#">Contact</a></li>
      </ul>
    </nav>
  </header>

  <!-- ***** MAIN CONTENT SECTION ***** -->
  <main>
    <!-- ***** PROFILE INFORMATION ***** -->
    <div class="profile-container" id="profile-container">
      <?php
      if (isset($_SESSION["fname"])) {
          echo "<div class='profile-header'>";
          echo "<h2>Welcome, " . htmlspecialchars($_SESSION["fname"]) . "!</h2>";
          echo "<button class='edit-button' onclick='openPopup()'>Edit Profile</button>";
          echo "</div>";
          echo "<p><strong>Email:</strong> " . htmlspecialchars($_SESSION["emaill"]) . "</p>";
          echo "<p><strong>Phone:</strong> " . htmlspecialchars($_SESSION["phone"]) . "</p>";

          // Database connection
          $conn = new mysqli("localhost", "root", "", "tutoringdb");

          // Check connection
          if ($conn->connect_error) {
              die("Connection failed: " . $conn->connect_error);
          }

          // Fetch future sessions
          $studentID = $conn->real_escape_string($_SESSION["studentID"]);
          $sql = "SELECT date, time, subject,sessionID FROM sessions WHERE studentID = '$studentID' AND date >= CURDATE() ORDER BY date, time";
          $result = $conn->query($sql);

          if ($result->num_rows > 0) {
              echo "<h3>Your Upcoming Sessions:</h3>";
              echo "<table class='sessions-table'>";
              echo "<tr><th>Date</th><th>Time</th><th>Subject</th><th>Action</th></tr>";
              while ($row = $result->fetch_assoc()) {
                  echo "<tr data-session-id='" . htmlspecialchars($row["sessionID"]) . "'>";
                  echo "<td>" . htmlspecialchars($row["date"]) . "</td>";
                  echo "<td>" . htmlspecialchars($row["time"]) . "</td>";
                  echo "<td>" . htmlspecialchars($row["subject"]) . "</td>";
                  echo "<td><button class='delete-btn' onclick='confirmDelete(\"" . $row["sessionID"] . "\")'>Delete</button></td>";
                  echo "</tr>";
              }
              echo "</table>";
          } else {
              echo "<p>You have no upcoming sessions.</p>";
          }

          $conn->close();
      } else {
          echo "<p>You are not logged in. Please <a href='login.php'>log in</a> to view your profile.</p>";
      }
      ?>
    </div>

    <!-- ***** EDIT PROFILE POPUP ***** -->
    <div class="popup-overlay" id="popup-overlay">
      <div class="popup-content">
        <h2>Edit Profile</h2>
        <form onsubmit="submitProfileEdit(event)">
          <label for="email">Email</label>
          <input type="email" id="email" name="email" placeholder="Email" value="<?php echo htmlspecialchars($_SESSION['emaill']); ?>" required>

          <label for="phone">Phone</label>
          <input type="text" id="phone" name="phone" placeholder="Phone" value="<?php echo htmlspecialchars($_SESSION['phone']); ?>" required>

          <label for="password">Password</label>
          <input type="password" id="password" name="password" placeholder="New Password (optional)">

          <button type="submit">Save Changes</button>
          <button type="button" class="close-button" onclick="closePopup()">Cancel</button>
        </form>
      </div>
    </div>

    <!-- ***** SCHEDULE SESSION BUTTON ***** -->
    <div class="container m-5 d-flex justify-content-center align-items-center">
    <div class="d-flex flex-wrap gap-2" style="justify-content: center; align-items: center; width: 100%;">
        <button class="btn btn-large quoteButton" data-bs-toggle="modal" data-bs-target="#quoteModal" style="font-weight: bold; padding: 0.75em; display: flex; border: 2px solid green;">
            <h2 class="m-1 p-0 text-center align-bottom" style="display: flex; justify-content: center; align-items: center; text-align: center; font-family: Oswald;">
                Schedule a Session
            </h2>
        </button>
    </div>
</div>
<!-- ***** MODAL STRUCTURE ***** -->
<div class="modal fade" id="quoteModal" tabindex="-1" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="myModalLabel">SCHEDULE A SESSION</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body d-flex">
            <!-- Sidebar -->
            <div class="col-2 d-flex justify-content-center align-items-center">
                <div class="container m-0">
                    <div class="vr"></div>
                    <div class="circle-container">
                        <div class="circle" data-target="2" id="circle-2"><i class="fa-solid fa-building"></i></div>
                        <div class="circle" data-target="4" id="circle-4"><i class="fa-solid fa-circle-question"></i></div>

                    </div>
                </div>
            </div>
        
            <!-- Scrollable Form Section -->
            <div class="d-flex flex-column p-3" style="overflow-y: auto; max-height: 60vh; flex-grow: 1; min-width: 0;">
                <div>
                    <div class="form-section" data-section="2" id="section-2">
                        <h3>AVAILABILITY</h3>
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <input type="date" id="dateInput" class="section-input" required> 
                            </div>
                            <div class="col-md-6 mb-3">
                              <select id="timeInput" class="section-input" required>
                                <option value="">Time</option>
                                <option value="0800">8:00am</option>
                                <option value="0900">9:00am</option>
                                <option value="1000">10:00am</option>
                                <option value="1100">11:00am</option>
                                <option value="1200">12:00pm</option>
                                <option value="1300">1:00pm</option>
                                <option value="1400">2:00pm</option>
                                <option value="1500">3:00pm</option>
                                <option value="1600">4:00pm</option>
                              </select>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 mb-3">
                            <select id="subjectInput" class="section-input" required>
                                <option value="">Select subject</option>
                                <option value="Math">Math</option>
                                <option value="Physics">Physics</option>
                                <option value="Chemistry">Chemistry</option>
                                <option value="Computer Science">Computer Science</option>
                                <option value="SAT/ACT Prep">SAT/ACT Prep</option>
                              </select>  
                            </div>
                        </div>
                    </div>
                </div>
        
                <div>
                    <div class="form-section" data-section="4" id="section-4">
                        <h3>ADDITIONAL INFO</h3>
                        <div class="row">
                            <div class="col-md-12 mb-3">
                                <textarea id="notesInput" class="section-input" rows="4" placeholder="Additional notes for Ray"></textarea>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="modal-footer">
  <button type="button" class="btn" style="background-color: green; color: #ffffff">Submit</button>
</div>

      </div>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>
  </main>

  <!-- ***** JAVASCRIPT SECTION ***** -->
  <script>
    // ***** POPUP FUNCTIONS *****
    function openPopup() {
      document.getElementById("popup-overlay").style.display = "flex";
      document.getElementById("profile-container").classList.add("blur");
    }

    function closePopup() {
      document.getElementById("popup-overlay").style.display = "none";
      document.getElementById("profile-container").classList.remove("blur");
    }

    // ***** DELETE SESSION FUNCTION *****
    async function confirmDelete(sessionID) {
        if (confirm('Are you sure you want to cancel this session?')) {
            const result = await makeAjaxRequest('delete_session.php?sessionID=' + sessionID, 'GET');
            if (result.success) {
                // Remove the session row from the table without page reload
                document.querySelector(`tr[data-session-id="${sessionID}"]`).remove();
            } else {
                alert('Failed to delete session: ' + result.message);
            }
        }
    }

    // ***** AJAX REQUEST FUNCTION *****
    async function makeAjaxRequest(url, method, data = null) {
        try {
            const options = {
                method: method,
                headers: {
                    'Content-Type': 'application/json'
                }
            };
            if (data) {
                options.body = JSON.stringify(data);
            }

            const response = await fetch(url, options);

            // Check if the response is valid JSON
            const result = await response.json();

            if (!response.ok || !result.success) {
                throw new Error(result.message || `HTTP error! status: ${response.status}`);
            }

            return result;
        } catch (error) {
            console.error('Error:', error);
            return { success: false, message: error.message || 'An error occurred while making the request.' };
        }
    }

    // ***** PROFILE EDIT SUBMISSION *****
    async function submitProfileEdit(event) {
        event.preventDefault(); // Prevent the form from submitting normally
        const form = event.target;
        const formData = {
            email: form.email.value,
            phone: form.phone.value,
            password: form.password.value
        };

        // Validate email using regex
        const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        if (!emailRegex.test(formData.email)) {
            alert('Invalid email format. Please include "@" and a "." in the email.');
            return;
        }

        // Validate phone number using regex
        const phoneRegex = /^(\+\d{1,2}\s)?\(?\d{3}\)?[\s.-]?\d{3}[\s.-]?\d{4}$/; // Example regex for 10-digit phone number
        if (!phoneRegex.test(formData.phone)) {
            alert('Invalid phone number format. Please enter a valid phone number.');
            return;
        }

        try {
            // Make the AJAX request
            const result = await makeAjaxRequest('edit_profile_handler.php', 'POST', formData);

            if (result.success) {
                // Update the profile information without page reload
                const emailElement = document.querySelector('.profile-container p:nth-of-type(1)');
                const phoneElement = document.querySelector('.profile-container p:nth-of-type(2)');
                emailElement.innerHTML = `<strong>Email:</strong> ${formData.email}`;
                phoneElement.innerHTML = `<strong>Phone:</strong> ${formData.phone}`;

                // Show success alert
                alert('Information updated successfully');
            } else {
                alert('Failed to update profile: ' + result.message);
            }
        } catch (error) {
            console.error('Error during profile update:', error);
            alert('An unexpected error occurred. Please try again.');
        } finally {
            // Close the popup regardless of success or failure
            closePopup();
        }
    }

    // ***** FORM COMPLETION CHECK *****
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

    // ***** FORM SECTION VISIBILITY *****
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

    // ***** CIRCLE NAVIGATION *****
    const circles = document.querySelectorAll('.circle');
    circles.forEach(circle => {
      circle.addEventListener('click', function() {
        const targetSection = document.getElementById(`section-${circle.getAttribute('data-target')}`);
        targetSection.scrollIntoView({
          behavior: 'smooth',
          block: 'start'
        });
      });
    });

    // ***** SCHEDULE SESSION SUBMISSION *****
    document.querySelector('.modal-footer .btn').addEventListener('click', async function () {
      const dateInput = document.querySelector('#dateInput'); // Use specific IDs
      const timeInput = document.querySelector('#timeInput');
      const subjectInput = document.querySelector('#subjectInput');
      const notesInput = document.querySelector('#notesInput');
      
      const formData = {
        date: dateInput.value,
        time: timeInput.value,
        subject: subjectInput.value,
        notes: notesInput.value,
      };

      if (!formData.date || !formData.time || !formData.subject) {
        alert('Please fill out all required fields.');
        return;
      }

      try {
        const response = await fetch('schedule_session.php', {
          method: 'POST',
          headers: { 'Content-Type': 'application/json' },
          body: JSON.stringify(formData),
        });

        const result = await response.json();

        console.log('Form data:', formData);
        console.log('Response:', result);

        if (result.success) {
          const table = document.querySelector('.sessions-table');
          if (table) {
            const newRow = document.createElement('tr');
            newRow.dataset.sessionId = result.sessionID;
            newRow.innerHTML = `
              <td>${formData.date}</td>
              <td>${formData.time}</td>
              <td>${formData.subject}</td>
              <td><button class="delete-btn" onclick="confirmDelete('${result.sessionID}')">Delete</button></td>
            `;
            table.appendChild(newRow);
          } else {
            window.location.reload();
          }

          dateInput.value = '';
          timeInput.value = '';
          subjectInput.value = '';
          notesInput.value = '';

          const modal = bootstrap.Modal.getInstance(document.getElementById('quoteModal'));
          modal.hide();

          alert('Session scheduled successfully!');
        } else {
          alert(result.message || 'Failed to schedule session');
        }
      } catch (error) {
        console.error('Error:', error);
        alert('An error occurred while scheduling the session.');
      }
    });
  </script>

  <!-- ***** FOOTER SECTION ***** -->
  <footer>
  <p>
    Ray's Tutoring © 2025
    <span class="separator">|</span>
    Phone: 123-456-7890
    <span class="separator">|</span>
    Email: raystutoring@example.com
  </p>
</footer>


</body>
</html>
