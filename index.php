<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Ray's Tutoring</title>
  <style>
    body {
      margin: 0;
      font-family: Arial, sans-serif;
      background-color: white;
    }

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
      padding: 12px;
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





  </style>
</head>
<body>
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

  <main>
    <h2>Welcome to Ray's Tutoring!</h2>
    <p>Your success starts here.</p>

    <div class="image-container">
      <img src="./images/techTower.jpg" alt="Tech Tower">
      <img src="./images/Headshot.jpg" alt="Ray Headshot">
    </div>

    <br>

    <div class = "text-container">
      <h3> Ray first began tutoring during his time as an undergraduate physics student at the Gerogia Institute of Technology in 2019. Today, he has over 5 years of experience helping students in various areas, including: <br> </h3>
      <ul>
          <li>Physics</li>
          <li>Mathematics</a></li>
          <li>Programming</li>
          <li>SAT Prep</li>
      </ul>

      <p>** For a complete list of courses that Ray has experience helping with, click <a href="learnMore.php#courses">here</a>.</p><br>
      <p>For more information about Ray and his qualifications, pleast visit the Learn More tab. Sign up, login, or contact Ray below if you are interested in scheduling a session!</p>
      <br><br>

      <div class="icon-container">
      <img src="./images/atom.png" alt="atom" class="icon-image">
      <img src="./images/calculator.png" alt="calculator" class="icon-image">
      <img src="./images/mouse.png" alt="mouse" class="icon-image">
      </div>

      <br>

    </div>

  </main>

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
