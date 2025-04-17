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
      text-align: left;
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
      height: 200px;
      width: auto;
      
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


footer p {
  display: flex;
  justify-content: center;
  align-items: center;
  gap: 30px; /* controls spacing between items */
  font-size: 20px;
  margin: 0;
}


.courses-tabs {
  background-color: #f8f8f8;
  padding: 20px;
  max-width: 800px;
  margin: 0 auto;
  border-radius: 12px;
}

.tab-buttons {
  display: flex;
  gap: 10px;
}

.tab-button {
  padding: 10px;
  background-color: #ddd;
  border: none;
  cursor: pointer;
  margin-right: 5px;
  font-size: 20px;
}

.tab-button.active {
  background-color: #2e7d32;
  color: white;
}

.tab-content {
    text-align: left;
    display: flex;
    flex-direction: column;
    align-items: flex-start;
}

.tab-content-item {
  display: none;
  tex-align: left;
  padding-left: 20px;
  margin-left: 0;
}

.tab-content-item ul {
    text-align: left;
    padding-left: 20px;
    margin-left: 0;
    display: block;

}

.tab-content-item.active {
  display: block;
}

button {
  display: inline-block;
  padding: 10px 20px;
  font-size: 16px;
  margin: 20px auto;
  font-family: Georgia;
}

h3 {
  font-weight: bold;
  font-size: 25px;
}

h4 {
  text-align: left;
  font-family: Georgia;
  font-size: 25px;
}

.text-container {
      max-width: 800px; /* or whatever width you prefer */
      margin: 0 auto;
      text-align: left; /* optional: keep text left-aligned inside the container */
    }




  </style>
</head>
<body>
  <header>
    <h1>Ray's Tutoring</h1>
    <nav>
      <ul>
        <li><a href="signup.php">Sign Up</a></li>
        <li><a href="index.php">Home</a></li>
        <li><a href="#">Login</a></li>
        <li><a href="#">Contact</a></li>
      </ul>
    </nav>
  </header>

  <main>
    <br>

    <img src="./images/yellowJacket.png" alt="GA Tech Mascot">

  <div class = "text-container">

  <h4>Overview</h4>
  <p>Ray has been helping students succed for over 5 years and has experience in a wide range of courses in both high school and college. While he currently works as a private tutor, Ray also has years of experience helping students through his alma mater, The Georgia Institute of Technology. As an award-winning tutor, he is dedicated to helping students reach their full potential. Continue reading to learn more about Ray's qualifications and history.</p>

  <h4>Undergraduate Years</h4>
  <p>Ray first began tutoring in 2020, working in Georgia Tech's Center for Academic Success. He routinely held one-on-one sessions with students needing help with physics, math, and programming. Ray also spent time working at the centers help desk, answering a wide range of questions for students who visited the center. After working in the center for 2 years, he was nominated by his fellow students as 2022's Outstanding Tutor, and was granted the honor by the university's faculty. Shortly after, he graduated Summa Cum Laude with a Bachelor of Science in Physics.</p>

  <h4>Graduate School</h4>
  <p>In the fall of 2022, Ray chose to continue his education by joining Georgia Tech's <a href= "https://qbios.gatech.edu/">Interdisciplinary Graduate Program in Quantitave Biosciences (QBioS)</a>. During his time in the program, he has served as a teaching assistant for both Physics I and Foundations of Quantitative Bioscience (the PhD program's first course), where he held group tutoring sessions for upwards of 150 students each week, along with conducting 4-hour labratory periods. It was during this time that Ray began working as an independent tutor, and he has since accumulated over 500 hours of tutoring experience, not including the time spent in the institute's Center for Academic Success.  

  <h4>Today</h4>
  <p>Today, Ray continues to work as an independent tutor for high school and college students while finishing his PhD in Quantitative Bioscience, which he will be graduating with in May of 2025. His work focuses on antibiotic susceptibility testing, and he can often be found creating simulations for microbial communities under stress. He is a published author in the field, with 2 papers currently out and 2 under review.</p>
</div>

<br>

<div id="courses">
  <h3>Courses</h3>

  <div class="courses-tabs">
  <div class="tab-buttons">
      <button class="tab-button active" onclick="showTab('physics')">Physics</button>
      <button class="tab-button" onclick="showTab('math')">Mathematics</button>
      <button class="tab-button" onclick="showTab('programming')">Programming</button>
      <button class="tab-button" onclick="showTab('hs')">High School</button>
      <button class="tab-button" onclick="showTab('misc')">Misc.</button>
  </div>
  <div class="tab-content">
      <div id="physics" class="tab-content-item active">
      <ul>
          <li>Physics I: Introductionn to Mechanics</li>
          <li>Physics II: Introduction to Electromagnetism</li>
          <li>Physics III: Introduction to Modern Physics</li>
          <li>Quantam Mechanics I</li>
          <li>Thermodynamics</li>  
      </ul>
      </div>

      <div id="math" class="tab-content-item">
      <ul>
        <li>Calculus I: Introduction to Differential Calculus</li>
        <li>Calculus II: Introduction to Integral Calculus</li>
        <li>Calculus III: Multivariable Calculus</li>
        <li>College Algebra</li>
        <li>Differential Equations</li>
      </ul>
    </div>

    <div id="programming" class="tab-content-item">
      <ul>
        <li>Introduction to Machine Learning</li>
        <li>Introduction to MATLAB</li>
        <li>Introduction to Python</li>
        <li>Advanced Python</li>
        <li>Introduction to Programming</li>
        <li>Data Structures</li>
        <li>Data Science & Machine Learning</li>
      </ul>
    </div>

    <div id="hs" class="tab-content-item">
      <ul>
        <li>A.P. Physics</li>
        <li>Honors Physics</li>
        <li>A.P. Calculus BC</li>
        <li>Geometry</li>
        <li>SAT Prep (Math)</li>
        <li>ACT Prep (Math, Science)</li>
      </ul>
    </div>

    <div id="misc" class="tab-content-item">
      <ul>
          <li>Foundations of Quantitative Bioscience</li>
          <li>Statics</li>
          <li>Engineering Thermodynamics</li>
      </ul>
    </div>
</div>
</div>


  </main>

  <br><br>

  <footer>
  <p>
    Ray's Tutoring © 2025
    <span class="separator">|</span>
    Phone: 123-456-7890
    <span class="separator">|</span>
    Email: raystutoring@example.com
  </p>
</footer>

<script>
  function showTab(tabId) {
    const buttons = document.querySelectorAll('.tab-button');
    const contents = document.querySelectorAll('.tab-content-item');

    buttons.forEach(button => button.classList.remove('active'));
    contents.forEach(content => content.classList.remove('active'));

    document.querySelector(`.tab-button[onclick="showTab('${tabId}')"]`).classList.add('active');
    document.getElementById(tabId).classList.add('active');
  }
</script>
</body>
</html>
